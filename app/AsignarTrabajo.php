<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignarTrabajo extends Model
{
    //
     protected $table='asignartrabaj';
    protected $fillable=["Direccion","id_servicio","id_empleado","estado"];

    public function empleados(){
        return $this->hasMany('App\Empleado');
    }
    public function AdministrarServicio(){
        return $this->hasMany('App\AdministrarServicio');
    }
}
