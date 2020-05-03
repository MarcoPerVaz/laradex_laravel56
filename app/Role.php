<?php

namespace laradex;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /* 
        | -------------------------------------------------------------------
        | *user() Es para crear la relación muchos a muchos - belongsToMany()
        | *'App\User' Es la instancia del modelo app\User.php
        | -------------------------------------------------------------------
    */
    public function user()
    {
        return $this->belongsToMany('laradex\User');
    }
}
