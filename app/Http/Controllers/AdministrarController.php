<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdministrarServicio;
use App\Empleado;
use App\Servicio;
use App\User;
use Illuminate\Support\Facades\Auth;
class AdministrarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $administrar=AdministrarServicio::all();
        $servicios=Servicio::all();
        $usuario_logeado=User::find(Auth::User()->id);
        return view('listar_administrar',['administrar'=>$administrar,'servicios'=>$servicios,'usuario_logeado'=>$usuario_logeado]);
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
        AdministrarServicio::create([
            "id_servicio"=>$datos["id_servicio"],
            "costo_servicio"=>$datos["costo_servicio"],
            "Desscripcion"=>$datos["Desscripcion"],
            "estado"=>0
        ]);
        return redirect("/listar_administrar");
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
    public function update(Request $request, $idAdministrar)
    {
        //
        // return $request;
        $administrar_servicio_datos= AdministrarServicio::find($idAdministrar);

        $administrar_servicio_datos->id_servicio= $request->id_servicio_;
        $administrar_servicio_datos->costo_servicio= $request->costo_servicio_;
        $administrar_servicio_datos->Desscripcion= $request->Desscripcion_;
        $administrar_servicio_datos->estado= $request->estado_;
        $administrar_servicio_datos->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idempresa)
    {
        //
           //
       $empresa_servicio_eliminar= Empresa::find($idempresa);
       //al cambiar el estado a 1 seria un cliente inactivo
       $empresa_servicio_eliminar->estado=1;
       //delete si deseamos eliminarlo de forma permanente
       //$empresa_servicio_eliminar->delete();
       $empresa_servicio_eliminar->save();
       return redirect()->back();
    }
}
