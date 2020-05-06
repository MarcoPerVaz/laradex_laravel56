<?php

/* 
    | -------------------------------------
    | *Ruta que Laravel incluye por defecto
    | *Ruta que apunta a '/' y retorna la vista welcome.blade.php
    | -------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

/* 
    | --------------------------------------------------------------------------------------------------------
    | *Ruta que apunta a '/trainers' asociada al controlador app\Http\Controllers\TrainerController.php
    | *Ruta Resource que contiene 7 rutas (index, create, store, show, edit, update y destroy)
    |   *Laravel automáticamente le asigna nombres a las rutas
    |       *Para ver las rutas del proyecto 
    |           *php artisan router:list
    | --------------------------------------------------------------------------------------------------------
*/
Route::resource('trainers', 'TrainerController');

/* 
    | ---------------------------------------------------------------------------------------------------------------------------------------------------------
    | *Ruta que apunta a '/trainers/{trainer}/pokemons', apunta a la función store(Request $request) del controlador app\Http\Controllers\PokemonController.php
    | *Ruta que guarda un pokémon
    | ---------------------------------------------------------------------------------------------------------------------------------------------------------
*/
Route::Post('trainers/{trainer}/pokemons', 'PokemonController@store');


/* Notas:
    | -------------------------------------------------------------------------------------------------------
    | *get() es una petición Http para recuperar datos
    |   *Más información en https://developer.mozilla.org/es/docs/Web/HTTP/Methods
    | *Laravel lee las rutas de arriba hacía abajo, por lo que si existen rutas iguales se tomará la de abajo
    | *resource() Significa que es una ruta que contiene 7 rutas (index, create, store, show, edit, update y destroy)
    | -------------------------------------------------------------------------------------------------------
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
