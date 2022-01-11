<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdministrarServicio extends Model
{
    protected $table='AdminitrarSolicitud';
    protected $fillable=["id_servicio","id_empleado","Desscripcion","costo_servicio","estado"];

    public function empleados(){
        return $this->hasMany('App\Empleado');
    }
    public function servicios(){
        return $this->hasMany('App\Servicio');
    }
}
