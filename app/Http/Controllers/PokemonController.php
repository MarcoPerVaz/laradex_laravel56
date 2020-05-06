<?php

namespace laradex\Http\Controllers;

use laradex\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /* 
        | ------------------------------------------------------
        | *Devuelve una respuesta JSON y la vista pokemons.index
        | ------------------------------------------------------
    */
    public function index(Request $request)
    {
        /* 
            | ------------------------------------------------------------------------------------------------------------------------
            | *if ($request->ajax()) Validar que solo se reciba una respuesta ajax
            | *return response()->json() Dcevuelve una respuesta en formato JSON
            |   *Esta respuesta json es enviada al componente resources\assets\js\components\PokemonsComponent.vue en data: pokemons[]
            | *Muestra los pokémon almacenados en la base de datos
            | ------------------------------------------------------------------------------------------------------------------------
        */
        if ($request->ajax()) {
           $pokemons = Pokemon::all();
           return response()->json($pokemons, 200);
        }

        return view('pokemons.index');
    }

    /* 
     | -----------------------------------------
     | *Guarda un Pokémon
     | *No olvidar importar use laradex\Pokemon;
     | -----------------------------------------
    */
    public function store(Request $request)
    {
        /* 
            | -----------------------------------------------------------------------------------------------------------------------------
            | *if ($request->ajax()) Validar que solo se reciba una respuesta ajax
            | *new Pokemon() Nueva instancia del modelo Pokemon
            | *$pokemon->name = $request->input('name'); Asigna lo que venga del elemento Html en el campo name del modelo Pokemon
            | *$pokemon->picture = $request->input('picture'); Asigna lo que venga del elemento Html en el campo picture del modelo Pokemon
            | *$pokemon->save(); Guarda el pokémon
            | *return response()->json([]) Devuelve una respuesta json con un mensaje y un estado Http de código 200
            | *"pokemon" => $pokemon Envía en formato json toda la instancia del modelo Pokemon
            | -----------------------------------------------------------------------------------------------------------------------------
        */
        if ($request->ajax()) {
            $pokemon = new Pokemon();
            $pokemon->name = $request->input('name');
            $pokemon->picture = $request->input('picture');
            $pokemon->save();

            return response()->json([
                "message" => "Pokemon creado correctamente",
                "pokemon" => $pokemon
            ], 200);
        }
    }
}
