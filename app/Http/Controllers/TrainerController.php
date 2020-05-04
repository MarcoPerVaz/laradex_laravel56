<?php

namespace laradex\Http\Controllers;

use laradex\Trainer;
use Illuminate\Http\Request;
use laradex\Http\Requests\StoreTrainerRequest;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * Función usada para mostrar los trainers de la base de datos
     * Función que retorna un texto
     * Se obtienen todos los trainers usando Eloquent
     * all() es una colección de Laravel y todos los métodos disponibles para colecciones
     *  Más información en https://laravel.com/docs/5.6/collections#available-methods
     */
    public function index(Request $request)
    {
        /* 
            | -------------------------------------------------------------------------------------------------------------------------------------
            | *Esta validación no la incluye el curso pero es necesaria porque si el usuario no ha iniciado sesión no puede acceder a la validación 
            |  de su role y muestra un error: Call to a member function authorizeRoles() on null
            | -------------------------------------------------------------------------------------------------------------------------------------
        */
        if (is_null($request->user())) {
            return redirect('/');
        }

        /* 
            | ---------------------------------------------------------------
            | *Solo permite al role admin 
            | *La función authorizeRoles($roles) Se encuentra en app\User.php
            | ---------------------------------------------------------------
        */
        // $request->user()->authorizeRoles('admin');

        /* 
            | ---------------------------------------------------------------
            | *Solo permite al role user 
            | *La función authorizeRoles($roles) Se encuentra en app\User.php
            | ---------------------------------------------------------------
        */
        // $request->user()->authorizeRoles('user');

        /* 
            | ---------------------------------------------------------------
            | *Solo permite al role admin y user
            | *La función authorizeRoles($roles) Se encuentra en app\User.php
            | ---------------------------------------------------------------
        */
        // $request->user()->authorizeRoles(['admin', 'user']);

        /* 
            | ---------------------------------------------------------------
            | *Solo permite al role admin
            | *La función authorizeRoles($roles) Se encuentra en app\User.php
            | ---------------------------------------------------------------
        */
        $request->user()->authorizeRoles(['admin']);

        /* 
            | -----------------------------------------------------------------------------------------------------------------------------------------------
            | *Trainer::all(); Obtiene todos los registros del modelo Trainer(tabla trainers)
            | *return view('trainers.index', compact('trainers')); Devuelve la vista resources\views\trainers\index.blade.php y le pasa la variable $trainers
            | *Usando la función compact() se le pueden pasar variables a la vista
            | -----------------------------------------------------------------------------------------------------------------------------------------------
        */
        $trainers = Trainer::all(); 

        return view('trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * Función para mostrar el formulario para crear un trainer
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * Función para crear un nuevo trainer usando FormRequest
     * *Para usar el FormRequest debe inyectarse en la función public function store(StoreTrainerRequest $request)
     * return redirect()->route('trainers.index'); Redirige a la vista resources\views\trainers\index.blade.php
     */
    public function store(StoreTrainerRequest $request)
    {
        /* 
            | -----------------------------------------------------------------------------------------------
            | *Las reglas de validación se pasaron al FormRequest app\Http\Requests\StoreTrainerRequest.php
            | -----------------------------------------------------------------------------------------------
        */

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
        }

        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->description = $request->input('description');
        $trainer->slug = str_slug($request->input('name'));
        $trainer->avatar = $name;
        $trainer->save();
        return redirect()->route('trainers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Función parar mostrar la información de un trainer usando Model Binding
     * Route Model Binding permite inyectar directamente el modelo como parámetro de la función show(Trainer $trainer)
     *      *Más información en https://laravel.com/docs/5.6/routing#route-model-binding
     * show($slug) Devuelve el slug y debe llamarse igual al parámetro de la ruta en ruta routes\web.php
     * show(Trainer $trainer) usando Route Model Binding
     */
    public function show(Trainer $trainer)
    {
        /* 
            |--------------------------------------------------------------------------------------------------------------------------------
            | *Trainer::where('slug', '=', $slug)->firstOrFail();
            |   *Trainer::where('slug', '=', $slug): Obtiene al trainer que el slug pasado como request sea igual al slug de la base de datos
            |   *firstOrFail(): Si existe muestra el primero y si no existe muestra un error 404 Not found
            |   *Se guarda en la variable $trainer
            | *Devuelve la vista 'trainers.show' y le pasa la variable $trainer usando Route Model Binding
            | *Si la función es show($slug)
            |   *Se debe incluir $trainer = Trainer::where('slug', '=', $slug)->firstOrFail();
            |--------------------------------------------------------------------------------------------------------------------------------
        */
        // $trainer = Trainer::where('slug', '=', $slug)->firstOrFail();
        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Función para mostrar el formulario de edición de un trainer usando Implicit Binding
     * return view('trainers.edit', compact('trainer')); Devuelve la vista trainers.edit y le pasa la variable $trainer
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Función que actualiza a un trainer usando Implicit Binding
     */
    public function update(Request $request, Trainer $trainer)
    {
        /* 
            | ---------------------------------------------------------------------------------------------------------------------------------
            | *->with('status', 'Entrenador actualizado correctamente') Asigna un mensaje a la variable de sesión 'status' y se pasa a la vista
            | ---------------------------------------------------------------------------------------------------------------------------------
        */

        $trainer->fill($request->except('avatar'));

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time() . $file->getClientOriginalName();
            $trainer->avatar = $name;
            $file->move(public_path() . '/images/', $name);
        }
        $trainer->slug = str_slug($request->input('name'));
        $trainer->save();
        return redirect()->route('trainers.show', [$trainer])->with('status', 'Entrenador actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * return $trainer; Devuelve la información del modelo Trainer
     * return $file_path = public_path(); Devuelve la ruta del directorio public
     * return $file_path = public_path() . '/images/' . $trainer->avatar; Devuelve la ruta completa de la imagen del trainer
     * \File::delete($file_path); Borra la imagen físicamente 
     * $trainer->delete(); Borra el registro de la base de datos
     *  return redirect()->route('trainers.index'); Redirige a la vista resources\views\trainers\index.blade.php
     */
    public function destroy(Trainer $trainer)
    {
        // return $trainer;
        // return $file_path = public_path();
        // return $file_path = public_path() . '/images/' . $trainer->avatar;

        $file_path = public_path() . '/images/' . $trainer->avatar;
        \File::delete($file_path);
        $trainer->delete();
        return redirect()->route('trainers.index');
    }
}
