<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->increments('id');
            /* 
                | -------------------
                | *Campo con nombre 'name' de tipo varchar - Para guardar el name del pokémon (tabla pokemons)
                | *Campo con nombre 'picture' de tipo varchar - Para guardar la imagen del pokémon (tabla pokemons)
                | -------------------
            */
            $table->string('name');
            $table->string('picture');
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
        Schema::dropIfExists('pokemon');
    }
}
