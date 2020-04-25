<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            /* 
                | --------------------------------------------------------------------------------------------------------------------
                | *Tanto $table->increments('id'); como $table->timestamps(); son creados por Laravel al momento de crear la migración
                | --------------------------------------------------------------------------------------------------------------------
                | *$table->increments('id'); Crea un campo llamado 'id' que va a ser autoincrementable
                | --------------------------------------------------------------------------------------------------------------------
                | *$table->string('name'); Crea un campo llamado 'name' de tipo varchar
                |   *Para ver todos los tipos de dato para los campos
                |       *https://laravel.com/docs/5.6/migrations#creating-columns
                | --------------------------------------------------------------------------------------------------------------------
                | * $table->timestamps(); Crea 2 campos de tipo date (created_at y updated_at)
                | --------------------------------------------------------------------------------------------------------------------
            */
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /* 
            | ------------------------------------------------------------------------------------------------------------------------------------------------
            | *Schema::dropIfExists('trainers'); Si existe una tabla llamada 'trainers' y se hace llamado a esta función, entonces elimina la tabla 'trainers'
            | ------------------------------------------------------------------------------------------------------------------------------------------------
        */
        Schema::dropIfExists('trainers');
    }
}


/* Notas:
    | -----------------------
    | *Las migraciones siempre tienen 2 funciones
    |   *up() Aquí se va a determinar que se va a crear con la migración
    |       *Crear una tabla y sus campos
    |       *Agregar a una tabla existente algunos campos
    |       *Transacciones con base de datos
    |       *Llaves foráneas en los campos
    |   *down() Aquí se hace lo inverso que en up()
    |       *Eliminar la tabla creada en up()
    |       *Eliminar el campo agregado en up()
    |     *Más información en https://laravel.com/docs/5.6/migrations#rolling-back-migrations
    | *Más información sobre la estructura de las migraciones https://laravel.com/docs/5.6/migrations#migration-structure
    | -----------------------
*/
