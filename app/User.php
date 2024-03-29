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


    /* 
        | ---------------------------------------------------------------------------------------------------------------------
        | *Valida si el usario tiene algún role y lo deja pasar, de lo contrario manda un error 401 This action is unauthorized
        | *Usa la función hasAnyRole() 
        | ---------------------------------------------------------------------------------------------------------------------
    */
    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'This action is unauthorized');
    }

    /* 
        | -------------------------------------------
        | *Valida si el usuario tiene uno o más roles
        | *Usa la función hasRole()
        | -------------------------------------------
    */
    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    /* 
        | -----------------------------------
        | *Verifica que role tiene el usuario
        | -----------------------------------
    */
    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
}
