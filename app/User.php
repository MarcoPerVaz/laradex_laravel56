<?php

namespace laradex;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /* 
        | --------------------------------------------------------------------
        | *roles() Es para crear la relación muchos a muchos - belongsToMany()
        | *'App\Role' Es la instancia del modelo app\Role.php
        | --------------------------------------------------------------------
    */
    public function roles()
    {
        return $this->belongsToMany('laradex\Role');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
