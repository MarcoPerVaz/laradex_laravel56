<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTrainerIdToPokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pokemon', function (Blueprint $table) {
            /* 
                | -------------------------------------------------------------------------------------------------------------------
                | *$table->integer('trainer_id')->unsigned(); Agrega un campo de tipo entero sin signo para guardar el id del trainer
                | -------------------------------------------------------------------------------------------------------------------
            */
            $table->integer('trainer_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pokemon', function (Blueprint $table) {
            /* 
                | ------------------------------------------------------------------
                | *$table->dropColumn('trainer_id'); Elimina la columna 'trainer_id'
                | ------------------------------------------------------------------
            */
            $table->dropColumn('trainer_id');
        });
    }
}
