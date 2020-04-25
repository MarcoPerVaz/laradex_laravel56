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
     */
    public function index()
    {
        return 'Estoy dentro prueba() en PruebaController';
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
            | -------------------------------------------------------------------------------------------------------------------------
            | *No olvidar importar el modelo use laradex\Trainer;
            | -------------------------------------------------------------------------------------------------------------------------
            | *new Trainer(); Es una nueva instancia del modelo
            | *$trainer->name = $request->input('name'); Lo que venga del elemento input HTML se guarda en el modelo cuyo campo es name
            | *$trainer->save(); Guarda el trainer
            | *return 'Saved'; Devuelve un texto
            | -------------------------------------------------------------------------------------------------------------------------
        */
        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->save();
        return 'Saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
