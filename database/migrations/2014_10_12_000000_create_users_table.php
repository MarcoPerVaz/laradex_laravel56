<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 
            | ----------------------------------------------------------------------------------------------------------------------------------------------------
            | *Al usar MariaDB muestra un error en consola SQLState Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes
            |   *Opción 2: Para solucionarlo:
            |       *Esto: $table->string('email')->unique(); por esto: $table->string('email', 128)->unique();
            |   *El error es porque Laravel implementa caracteres utf8mb4 y se debe corregir manualmente en MariaDB (versión 10.2.2 o anteriores)
            |   *Al usar Laragon este error no aparece ya que el gestor de base de datos (HeidiSql) soporta emojis
            | ----------------------------------------------------------------------------------------------------------------------------------------------------
        */
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email', 128)->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
