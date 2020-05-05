<?php

namespace laradex\Http\Controllers;

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
            | ------------------------------------------------------------------------------------------------------------------------
        */
        if ($request->ajax()) {
            return response()->json([
                ['id' => 1, 'name' => 'Pikachu'],
                ['id' => 2, 'name' => 'Squirtle'],
                ['id' => 3, 'name' => 'Charizard'],
            ]);
        }

        return view('pokemons.index');
    }
}
