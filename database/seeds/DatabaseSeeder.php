<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * El orden importa al momento de generar los seeders
     * Se hace el llamado de los seeders que se tengan implementados
     */
    public function run()
    {
        /* 
            | ---------------
            | *$this->call(RoleTableSeeder::class); Hace el llamado al seeder database\seeds\RoleTableSeeder.php
            | *$this->call(UserTableSeeder::class); Hace el llamado al seeder database\seeds\UserTableSeeder.php
            | ---------------
        */
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
