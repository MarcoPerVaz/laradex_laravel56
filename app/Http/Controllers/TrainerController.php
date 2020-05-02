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
    public function index()
    {
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
            | -------------------------------------------------------------------------------------------------------
            | *return $trainer Devuelve la información del modelo
            | *return $request Devuelve los valores de los campos HTML que tengan la propiedad name asignada
            | *fill() se encarga de actualizar el trainer
            | * if ($request->hasFile('avatar')) Se encarga de comprobar is hay una imagen que actualizar
            | *$trainer->save() Guarda el trainer}
            | *return redirect()->route('trainers.show'); Redirige a la vista resources\views\trainers\show.blade.php
            | -------------------------------------------------------------------------------------------------------
        */
        // return $trainer;
        // return $request;

        $trainer->fill($request->except('avatar'));

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time() . $file->getClientOriginalName();
            $trainer->avatar = $name;
            $file->move(public_path() . '/images/', $name);
        }
        $trainer->slug = str_slug($request->input('name'));
        $trainer->save();
        return redirect()->route('trainers.show', [$trainer]);
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
