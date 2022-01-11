<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsignacionTrabajos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //
        Schema::create('asignartrabaj', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_servicio');
            $table->unsignedInteger('id_empleado');
            $table->string('Direccion');
            $table->string('estado');
            $table->foreign('id_servicio')->references('id')->on('adminitrarsolicitud');
            $table->foreign('id_empleado')->references('id')->on('empleado');
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
        //
    }
}
