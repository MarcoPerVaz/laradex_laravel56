<?php

use laradex\Role;
use laradex\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * *No olvidar importar el modelo use laradex\Role;
     * *No olvidar importar el modelo use laradex\User;
     */
    public function run()
    {
        /* 
            | ------------------------------------------------------------------------
            | *Role::where('name', 'user')->first(); Se obtiene el role usuario
            | *Role::where('name', 'admin')->first(); Se obtiene el role administrador
            | ------------------------------------------------------------------------
        */
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        /* 
            | ------------------------------------------------------------------------------
            | *new User(); Crea una nueva instancia del modelo User
            | *$user->name = 'User'; Se asigna un texto al campo 'name'
            | *$user->email = 'user@mail.com'; Se asigna un email al campo 'email'
            | *$user->password = bcrypt('123456'); Se asigna un password al campo 'password'
            |   *bcrypt() es una función de php que genera la encriptación de la contraseña
            | *$user->save(); Se guarda el usuario
            | *$user->roles()->attach($role_user); Se le asigna el role
            |   *$role_user Es la variable creada arriba
            | ------------------------------------------------------------------------------
        */
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@mail.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_user);

        /* 
            | ------------------------------------------------------------------------------
            | *new User(); Crea una nueva instancia del modelo User
            | *$user->name = 'Admin'; Se asigna un texto al campo 'name'
            | *$user->email = 'admin@mail.com'; Se asigna un email al campo 'email'
            | *$user->password = bcrypt('123456'); Se asigna un password al campo 'password'
            |   *bcrypt() es una función de php que genera la encriptación de la contraseña
            | *$user->save(); Se guarda el usuario
            | *$user->roles()->attach($role_admin); Se le asigna el role
            |   *$role_admin Es la variable creada arriba
            | ------------------------------------------------------------------------------
        */
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
