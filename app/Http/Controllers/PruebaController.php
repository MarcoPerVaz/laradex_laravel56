<?php

namespace laradex\Http\Controllers;

use laradex\Http\Controllers\Controller;

class PruebaController extends Controller 
{
  /* 
    | -------------------------------------------
    | *Función sin parámetro que retorna un texto
    | -------------------------------------------
  */
  public function prueba()
  {
    return 'Estoy dentro prueba() en PruebaController';
  }

  /* 
    | ----------------------------------------------------------
    | *Función con parámetro que retorna un texto y el parámetro
    | ----------------------------------------------------------
  */
  public function pruebaParametro($name)
  {
    return "Estoy dentro de la función pruebaParametro({$name}) en PruebaController y recibí este parámetro " . $name;
  }

}


/* Notas:
    | ----------------------------------------------------------------------------------------------------------
    | *Los requisitos al crear un controlador sin Artisan son
    |   *Declarar la etiqueta de php
    |     *<?php
    |   *Usar el namespace donde se encuentra el controlador, es decir la ruta donde se encuentra el controlador
    |     *laradex\Http\Controllers\Controller;
    |       *Dónde laradex es el nombre de la aplicación
    |       *Http es el directorio app\Http
    |       *Controllers es el directorio app\Http\Controllers
    |   *class PruebaController 
    |     *Es el nombre de la clase (debe llamarse igual que el archivo)
    |     *extends Controller Que extiende de la clase Controller
    | ----------------------------------------------------------------------------------------------------------
    | *Un estándar de PHP es que el nombre de las funciones incluya un verbo
    |   *En este caso se usó prueba() como demostrativo, pero debería llamarse probar()
    | ----------------------------------------------------------------------------------------------------------
*/