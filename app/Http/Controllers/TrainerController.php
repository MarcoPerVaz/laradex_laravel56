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
            | ---------------------------------------------------
            | *No olvidar importar el modelo use laradex\Trainer;
            | ---------------------------------------------------
        */

        /* 
            |----------------
            | *Comprueba si se recibe una imagen desde la vista 
            | *$file = $request->file('avatar'); Obtiene el valor del elemento HTML con la propiedad name="avatar" y lo guarda en la variable $file
            | *$name = time() . $file->getClientOriginalName(); Concatena la fecha con el nombre de la imagen}
            | *$file->move(public_path() . '/images/', $name); Mueve la imagen a la ruta \public\images\nombreImagen
            |----------------
        */
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
        }

        /* 
            
            | ----------------------------------------------------------------------------------------------------------------------------------------------
            | *new Trainer(); Es una nueva instancia del modelo
            | *$trainer->name = $request->input('name'); Lo que venga del elemento input HTML se guarda en el modelo cuyo campo es name
            | *$trainer->description = $request->input('description'); Lo que venga del elemento input HTML se guarda en el modelo cuyo campo es description
            | *$trainer->slug = str_slug($request->input('name')); 
            |   *str_slug($request->input('name')) Convierte las mayúsculas en minúsculas y quita los espacios entre palabras
            | *$trainer->avatar = $name; Lo que venga del input file se guarda en el modelo cuyo campo es avatar
            | *$trainer->save(); Guarda el trainer
            | *return 'Saved'; Devuelve un texto
            | ----------------------------------------------------------------------------------------------------------------------------------------------
        */
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
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    | *El comando php artisan make:controller TrainerController --resource crea 7 funciones (index, create, store, show, edit, update y destroy)
    | ------------------------------------------------------------------------------------------------------------------------------------------
*/
