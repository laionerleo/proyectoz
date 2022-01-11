<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $table='locations';
    protected $fillable=["location_title","coords_lat","coords_lng","number","location_email","addressline1","addressline2","city","country"];
}
