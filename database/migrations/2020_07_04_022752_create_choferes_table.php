<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoferesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choferes', function (Blueprint $table) {
            $table->integer('id_chofer integer(5)');
            $table->string('nombre_chofer varchar(20)');
            $table->string('ap_paterno varchar(15)');
            $table->string('ap_materno varchar(15)');
            $table->integer('edad integer(5)');
            $table->string('sexo varchar(10)');
            $table->string('telefono varchar(10');
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
        Schema::dropIfExists('choferes');
    }
}
