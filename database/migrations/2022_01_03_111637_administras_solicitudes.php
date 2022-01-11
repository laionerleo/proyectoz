<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdministrasSolicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('AdminitrarSolicitud', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_servicio');
            $table->Integer('costo_servicio');
            $table->string('Desscripcion');
            $table->string('estado');
            $table->timestamps();
            $table->foreign('id_servicio')->references('id')->on('servicio');
            $table->foreign('costo_Servicio')->references('costo_servicio')->on('servicio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
