<?php

namespace laradex\Http\Controllers;

use laradex\Trainer;
use Illuminate\Http\Request;

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
     * Función para crear un nuevo trainer
     */
    public function store(Request $request)
    {
        /* 
            | -----------------------------------------------------------------------------------------------
            | *Las reglas de validación permiten definir que requisitos tendrán los campos HTML
            |   *Cuando la aplicación es pequeña, las validaciones pueden ir en el controlador
            |   *Cuando la aplicación es grande es necesario crar FormRequest para almacenar las validaciones
            | *'name' => 'required|max:10'
            |   *El elemento 'name' es obligatorio y debe contener máximo 10 caracteres
            | *'description' => 'required'
            |   *El elemento 'description' es obligatorio
            | *'avatar' => 'required|image'
            |   *El elemento 'avatar' es obligatorio y tiene que ser de tipo imagen
            | -----------------------------------------------------------------------------------------------
        */
        $validateData = $request->validate([
            'name' => 'required|max:10',
            'description' => 'required',
            'avatar' => 'required|image',
        ]);

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
        return 'Saved';
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
            | -----------------------------------------------------------------------------------------------
            | *return $trainer Devuelve la información del modelo
            | *return $request Devuelve los valores de los campos HTML que tengan la propiedad name asignada
            | *fill() se encarga de actualizar el trainer
            | * if ($request->hasFile('avatar')) Se encarga de comprobar is hay una imagen que actualizar
            | *$trainer->save() Guarda el trainer}
            | *return 'Updated' Devuelve una cadena de texto
            | -----------------------------------------------------------------------------------------------
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
        return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


/* Notas:
    | ------------------------------------------------------------------------------------------------------------------------------------------
    | *Las reglas de validación permiten definir que requisitos tendrán los campos HTML
    |   *Cuando la aplicación es pequeña, las validaciones pueden ir en el controlador
    |   *Cuando la aplicación es grande es necesario crar FormRequest para almacenar las validaciones
    | *Para ver cuales son las reglas de validación que incluye Laravel 5.6
    |   *https://laravel.com/docs/5.6/validation#available-validation-rules
    | ------------------------------------------------------------------------------------------------------------------------------------------
*/
