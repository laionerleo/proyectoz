<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AsignarTrabajo;
use App\Empleado;
use App\AdministrarServicio;
use App\User;
use Illuminate\Support\Facades\Auth;
class AsiganarTrabajoControlle extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AsignarTrabajo=AsignarTrabajo::all();
        $administrarServicio=AdministrarServicio::all();
        $empleados=Empleado::all();
        $usuario_logeado=User::find(Auth::User()->id);
        return view('listar_Asignar_Trabajo',['AsignarTrabajo'=>$AsignarTrabajo,'empleados'=>$empleados,'administrarServicio'=>$administrarServicio,'usuario_logeado'=>$usuario_logeado]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //
        // return $request;
          //

          $datos = $request->all();
          //dd($datos);
        AsignarTrabajo::create([
            "Direccion"=>$datos["Direccion"],
            "id_servicio"=>$datos["id"],
            "id_empleado"=>$datos["id_empleado"],
            "estado"=>0
        ]);
        return redirect("listar_Asignar_Trabajo");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idasignacio)
    {
         //
        // return $request;
        $asignacion_datos= AsignarTrabajo::find($idasignacio);
        $asignacion_datos->id_servicio= $request->id_servicio_;
        $asignacion_datos->id_empleado= $request->id_empleado_;
        $asignacion_datos->Direccion= $request->Direccion_;
        $asignacion_datos->estado= $request->estado_;
        $asignacion_datos->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idEmpleado)
    {
        //
        //
        $empleado_eliminar= Empleado::find($idEmpleado);
        //al cambiar el estado a 1 seria un cliente inactivo
        $empleado_eliminar->estado_empleado=1;
        //delete si deseamos eliminarlo de forma permanente
        //$cliente_eliminar->delete();
        $empleado_eliminar->save();
        return redirect()->back();
    }
}
