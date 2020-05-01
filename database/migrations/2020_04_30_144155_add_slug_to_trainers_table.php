<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trainers', function (Blueprint $table) {
            /* 
                | -----------------------------------------
                | *$table->string('slug')->unique();
                |   *Se crea el campo 'slug'
                |   *De tipo varchar
                |   *El valor no se puede repetir(unique())
                | -----------------------------------------
            */
            $table->string('slug')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trainers', function (Blueprint $table) {
            /* 
                | --------------------------
                | *Elimina la columna 'slug'
                | --------------------------
            */
            $table->dropColumn('slug');
        });
    }
}
