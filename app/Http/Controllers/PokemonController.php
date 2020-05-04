<?php

namespace laradex\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /* 
        | ---------------------------------
        | *Devuelve la vista pokemons.index
        | ---------------------------------
    */
    public function index()
    {
        return view('pokemons.index');
    }
}
