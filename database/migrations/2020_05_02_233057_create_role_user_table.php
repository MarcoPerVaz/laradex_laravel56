<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('id');
            /* 
                | -------------------
                | *Campo con nombre 'user_id' de tipo entero sin signo (solo números positivos) - Para guardar el id del usuario (tabla users)
                | *Campo con nombre 'role_id' de tipo entero sin signo (solo números positivos) - Para guardar el id del role (tabla roles)
                | -------------------
            */
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
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
        Schema::dropIfExists('role_user');
    }
}
