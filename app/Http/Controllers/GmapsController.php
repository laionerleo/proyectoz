<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Gmaps;
use App\Location; 
use DB;
class GmapsController extends Controller
{
    public function index()
    {
        //configuaración
        $locations = Location::all();
        foreach ($locations as $key => $location) { 
          
            $markes[] = (object)array(
                'Identificador' => $location->id,
                'location_title' => $location->location_title,
                'coords_lat' => $location->coords_lat,
                'coords_lng' => $location->coords_lng,
                'number' => $location->number,
                'location_email' => $location->location_email,
                'addressline1' => $location->addressline1,
                'addressline2' => $location->addressline2,
                'city' => $location->city,
                'country' => $location->country,
            );
        }

        $map = 1 ;  //\Gmaps::create_map();

        //Devolver vista con datos del mapa
        return view('gmaps', compact('markes'));
    }



    /*

     //configuaración
        $config = array();
        $config['center'] = 'auto';
        $config['map_width'] = 1000;
        $config['map_height'] = 700;
        $config['zoom'] = 15;
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())

            });
        }
        centreGot = true;';

        $config['scrollwheel']= false;

        \Gmaps::initialize($config);

        // Colocar el marcador 
        // Una vez se conozca la posición del usuario
        $marker = array();
        \Gmaps::add_marker($marker);
        $map = \Gmaps::create_map();

        //Devolver vista con datos del mapa
        return view('gmaps', compact('map'));

    */
public function obtenerubicacionobreros()
{
    //configuaración
    $locations = Location::all();


    foreach ($locations as $key => $location) { 
      
        $markes[] = (object)array(
            'Identificador' => $location->id,
            'location_title' => $location->location_title,
            'coords_lat' => $location->coords_lat,
            'coords_lng' => $location->coords_lng,
            'number' => $location->number,
            'location_email' => $location->location_email,
            'addressline1' => $location->addressline1,
            'addressline2' => $location->addressline2,
            'city' => $location->city,
            'country' => $location->country,
        );
    }

    $map = 1 ;  //\Gmaps::create_map();
    return response()->json($markes);
    
}
 


public function VerMapaUbicacion()
{
    //configuaración
    $locations = Location::all();


   

    $map = 1 ;  //\Gmaps::create_map();
    return view('gmapsempleado');
    
}

    public function actualizarubicacion(Request $request)
    {
        $Datos= $request->input('pos'); 
        
        $id= $Datos["id"]; 
        $latitude= $Datos["lat"]; 
        $longitude= $Datos["lng"]; 
    

        $Resultadoupdateperiodo = DB::table('locations')
        ->where('id',$id)
        ->update([ 'coords_lat'=> $latitude,
                    'coords_lng' =>  $longitude]);
        
        return response()->json($Resultadoupdateperiodo);
    }

}
