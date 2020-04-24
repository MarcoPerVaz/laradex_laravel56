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
    | -------------------------------------
    | *Ruta que apunta a '/mi_primer_ruta' y retorna un texto
    | -------------------------------------
*/
Route::get('/mi_primer_ruta', function(){
    return 'Hello world, esta es mi primer ruta.';
});


/* 
    | -------------------------------------
    | *Ruta con parámetros obligatorios que apunta a '/name/{parametro1}/lastname/{parametro2}'
    |   *Para indicar que un parámetro es obligatorio
    |       *{parametro}
    | *Retorna un texto con las variables pasadas como parámetro
    | -------------------------------------
*/
Route::get('/name/{name}/lastname/{lastname}', function($name, $lastname){
    return "Hola soy " . $name . " " .$lastname;
});


/* 
    | -------------------------------------
    | *Ruta con parámetros obligatorios y opcionales que apunta a '/name/{parametro1}/lastname/{parametro2?}'
    |   *Para indicar que un parámetro es opcional:
    |       *{parametro2?} Se le agrega ? al parámetro
    | *Retorna un texto con las variables pasadas como parámetro
    | -------------------------------------
*/
Route::get('/name/{name}/lastname/{lastname?}', function($name, $lastname = null){
    return "Hola soy " . $name . " " .$lastname;
});


/* 
    | -------------------------------------------------------------------------------------------------------
    | *Ruta con parámetros obligatorios y opcionales que apunta a '/name/{parametro1}/lastname/{parametro2?}'
    |   *Para indicar que un parámetro es opcional:
    |       *{parametro2?} Se le agrega ? al parámetro
    | *Para asignar un valor por defecto
    |   *$lastname = "Apellido"
    | *Retorna un texto con las variables pasadas como parámetro
    | -------------------------------------------------------------------------------------------------------
*/
Route::get('/name/{name}/lastname/{lastname?}', function($name, $lastname = "Apellido"){
    return "Hola soy " . $name . " " . $lastname;
});


/* Notas:
    | -------------------------------------------------------------------------------------------------------
    | *get() es una petición Http para recuperar datos
    |   *Más información en https://developer.mozilla.org/es/docs/Web/HTTP/Methods
    | *Laravel lee las rutas de arriba hacía abajo, por lo que si existen rutas iguales se tomará la de abajo
    | -------------------------------------------------------------------------------------------------------
*/