<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAvatarToTrainerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 
            | ---------------------------------------------------------------------------------------------------------------------------
            | *Al usar el comando de consola php artisan make:migration add_avatar_to_trainer_table --table=trainers 
            |   *Al colocar--table=trainers laravel ayuda generando código para especificar a que tabla se le va a agregar el campo nuevo
            |       *Schema::table('trainers', function (Blueprint $table)
            | *$table->string('avatar'); Agrega un campo de tipo varchar para guardar la imagen del trainer
            | *El instructor del curso pidió agregar el campo $table->string('description'); Agrega un campo de tipo varchar  
            | ---------------------------------------------------------------------------------------------------------------------------
        */
        Schema::table('trainers', function (Blueprint $table) {
            $table->string('avatar');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * Al hacer rollback la función down() borrará el campo 'avatar'
     */
    public function down()
    {
        /* 
        | ---------------------------------------------------------------------------------------------------------------------------
        | *Al usar el comando de consola php artisan make:migration add_avatar_to_trainer_table --table=trainers 
        |   *Al colocar--table=trainers laravel ayuda generando código para especificar a que tabla se le va a agregar el campo nuevo
        |       *Schema::table('trainers', function (Blueprint $table)
        | *$table->dropColumn('avatar'); Borra la columna 'avatar' de la tabla 'trainers'
        | *$table->dropColumn('description'); Borra la columna 'description' de la tabla 'trainers'
        | ---------------------------------------------------------------------------------------------------------------------------
        */
        Schema::table('trainers', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('description');
        });
    }
}


/* Notas:
     | ----------------------------
     | *Las migraciones con Laravel permiten agregar campos a tablas existentes
     | ----------------------------
*/
