<?php

return [
  
    /*
    |--------------------------------------------------------------------------
    | Google Map Api key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Google Map Api key
    |
    */

    'key'=>'AIzaSyD86PlH2I4rQerQ6md8Vd2bi1_gYLsD9Rs',
    'adesense_publisher_id'=>'',

    'geocode' => [
      'cache' => false,
      'table_name' => 'gmaps_geocache',
     ],

    'css_class' => '',

    'http_proxy' => env('http_proxy',null),

];