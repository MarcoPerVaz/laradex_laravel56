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
    | -------------------------------------------------------------------------------------------------------------------------------------
    | *Ruta sin parámetro que apunta a '/prueba' y asociada a la función prueba() del controlador app\Http\Controllers\PruebaController.php
    | -------------------------------------------------------------------------------------------------------------------------------------
*/
Route::get('prueba', 'PruebaController@prueba');

/* 
    | --------------------------------------------------------------------------------------------------------
    | *Ruta con parámetro que apunta a '/prueba{parámetro}' y asociada a la función pruebaParametro($name) del 
    |  controlador app\Http\Controllers\PruebaController.php
    | --------------------------------------------------------------------------------------------------------
*/
Route::get('prueba/{name}', 'PruebaController@pruebaParametro');


/* Notas:
    | -------------------------------------------------------------------------------------------------------
    | *get() es una petición Http para recuperar datos
    |   *Más información en https://developer.mozilla.org/es/docs/Web/HTTP/Methods
    | *Laravel lee las rutas de arriba hacía abajo, por lo que si existen rutas iguales se tomará la de abajo
    | *El parámetro de la función debe llamarse igual que la variable pasada como parámetro en la función
    |   *Ejemplo: Ruta '{name}' = Función ($name)
    | -------------------------------------------------------------------------------------------------------
*/