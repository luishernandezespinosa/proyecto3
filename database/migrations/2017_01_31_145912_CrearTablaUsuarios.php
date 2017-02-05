<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName', 30);
            $table->string('lastName', 50);
            $table->string('password', 255);
            $table->string('email')->unique();

            $table->string('token');

            $table->enum('rol', ['Administrador',
                                    'Profesor',
                                    'AlumnoESO',
                                    'AlumnoBach',
                                    'AlumnoFP']);

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
