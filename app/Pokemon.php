<?php

namespace laradex;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    /* 
        | ------------------------
        | *Relación Pertenece a (belongsTo) - Un pokémon pertenece a un trainer
        | ------------------------
    */
    public function trainer()
    {
        return $this->belongsTo('laradex\Trainer');
    }
}


/* Notas:
    | -------------------------------------------------------------------------------------------------------------------
    | *Más información sobre la relación belongTo https://laravel.com/docs/5.6/eloquent-relationships#one-to-many-inverse
    | -------------------------------------------------------------------------------------------------------------------
*/
