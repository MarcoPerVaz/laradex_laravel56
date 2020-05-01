<?php

namespace laradex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    /* 
        | --------------------------------------------------------------------------------------------------------------------------
        | *Esta función sobreescribe a la función original que devuelve el 'id' y permite usar el 'slug' en la url en lugar del 'id'
        | --------------------------------------------------------------------------------------------------------------------------
    */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
