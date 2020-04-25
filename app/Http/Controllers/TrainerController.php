<?php

namespace laradex\Http\Controllers;

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
            | -----------------------------------------------------------------------------------------------------------
            | *return $request->all(); Devuelve los valores de todos los elementos HTML que tengan la propiedad name
            | *return $request->input('_token'); Devuelve el valor del elemento HTML que tenga la propiedad name="_token"
            |   *<input type="hidden" name="_token" value="paRbVXVLfwc3S2tO9JCSLEyKMmMupNtXDPc9AWw7">
            |       *Este elemento input es importante porque Laravel lo usa para reconocer la aplicación
            |   *Se puede obtener el valor de cualquier elemento HTML que tenga la propiedad name
            | *return $request->input('name'); Devuelve el valor del elemento HTML que tenga la propiedad name="name"
            |   *<input class="form-control" type="text" name="name">
            | -----------------------------------------------------------------------------------------------------------
        */
        // return $request->all();
        // return $request->input('_token');
        return $request->input('name');
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
