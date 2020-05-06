<?php

namespace laradex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    /*
        | ------------------------------
        | *Propiedad que sirve para indicarle a Laravel que campos van a guardarse en la base de datos
        |   *Protege contra asignación masiva
        |       *Más información en https://laravel.com/docs/5.6/eloquent#mass-assignment
        | ------------------------------
    */
    protected $fillable = ['name', 'description', 'avatar'];


    /* 
        | --------------------------------------------------------------------------------------------------------------------------
        | *Esta función sobreescribe a la función original que devuelve el 'id' y permite usar el 'slug' en la url en lugar del 'id'
        | --------------------------------------------------------------------------------------------------------------------------
    */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /* 
        | --------------------------------------------------------------------
        | *Relación Uno a Muchos (hasMany) - Un trainer tiene muchos pokémon's
        | --------------------------------------------------------------------
    */
    public function pokemons()
    {
        return $this->hasMany('laradex\Pokemon');
    }
}


/* Notas:
    | ----------------------------------------------------------------------------------------------------------
    | *Más información sobre la relación hasMany https://laravel.com/docs/5.6/eloquent-relationships#one-to-many
    | ----------------------------------------------------------------------------------------------------------
*/
