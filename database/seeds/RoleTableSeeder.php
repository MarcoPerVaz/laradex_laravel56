<?php

use laradex\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * *No olvidar importar el modelo use laradex\Role;
     */
    public function run()
    {
        /* 
            | ----------------------------
            | *Se crea el role 'admin'
            |   *new Role() Se crea una nueva instancia del modelo Role
            |   *$role->name = "admin"; Se asigna un texto al campo 'name' 
            |   *$role->description = "Administrador"; Se asigna un texto al campo 'description' 
            | *Se crea el role 'user'
            |   *new Role() Se crea una nueva instancia del modelo Role
            |   *$role->name = "user"; Se asigna un texto al campo 'name' 
            |   *$role->description = "Usuario"; Se asigna un texto al campo 'description' 
            | ----------------------------        
        */
        $role = new Role();
        $role->name = "admin";
        $role->description = "Administrador";
        $role->save();

        $role = new Role();
        $role->name = "user";
        $role->description = "Usuario";
        $role->save();
    }
}
