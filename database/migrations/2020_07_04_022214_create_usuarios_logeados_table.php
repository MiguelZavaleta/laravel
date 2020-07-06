<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosLogeadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_logeados', function (Blueprint $table) {
             $table->string('id_usuario')->primary()->unique();
             $table->string('nombre');
             $table->string('ap_paterno');
             $table->string('ap_materno');
             $table->string('correo')->unique();
             $table->string('contrasena');
             $table->string('telefono');
             $table->string('sexo');

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
        Schema::dropIfExists('usuarios_logeados');
    }
}
