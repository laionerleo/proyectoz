<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/google_maps')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:56:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../../../../../alvarez.is/demo/dashio/favicon.html">

    <title>COOSEDSA R.L.</title>
    <script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDChrhhY43_EO4korrPrEUOPbWUTtop5Q&callback=initMap">
</script>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="{{ url('/index')}}" class="logo"><b>COOSEDSA <span>R.L.</span></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('/index') }}#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <div class="task-info">
                                        <div class="desc">Dashio Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('/index') }}#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="photo"><img alt="avatar" src="/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="photo"><img alt="avatar" src="/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="photo"><img alt="avatar" src="/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="photo"><img alt="avatar" src="/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('/index') }}#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Server Overloaded.
                                    <span class="small italic">4 mins.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                    Memory #2 Not Responding.
                                    <span class="small italic">30 mins.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Disk Space Reached 85%.
                                    <span class="small italic">2 hrs.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">
                                    <span class="label label-success"><i class="fa fa-plus"></i></span>
                                    New User Registered.
                                    <span class="small italic">3 hrs.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index') }}#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                </br>
                    <form class="logout" method="POST" action="{{ route ('logout') }}">
                        {{ csrf_field() }}
                        <li><button class="btn btn-theme" >Cerrar Sesion</button></li>
                      </form>
                    {{--  <li><a class="logout" href="{{ url('/')}}">Logout</a></li>  --}}
              </ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                  <p class="centered"><a href="{{ url('/profile')}}"><img src="/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
                  <h5 class="centered">Sam Soffes</h5>

                  <li class="mt">
                      <a href="{{ url('/index') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Inicio</span>
                      </a>
                  </li>

                  {{--  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="{{ url('/general')}}">General</a></li>
                        <li ><a  href="{{ url('/buttons')}}">Buttons</a></li>
                        <li><a  href="{{ url('/panels')}}">Panels</a></li>
                        <li><a  href="{{ url('/font_awesome')}}">Font Awesome</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="{{ url('/grids') }}">Grids</a></li>
                        <li ><a  href="{{ url('/calendar') }}">Calendar</a></li>
                        <li><a  href="{{ url('/gallery') }}">Gallery</a></li>
                        <li><a  href="{{ url('/todo_list') }}">Todo List</a></li>
                          <li><a  href="{{ url('/dropzone') }}">Dropzone File Upload</a></li>
                          <li><a  href="{{ url('/inline_editor') }}">Inline Editor</a></li>
                          <li><a  href="{{ url('/file_upload')}}">Multiple File Upload</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/blank')}}">Blank Page</a></li>
                          <li><a  href="{{ url('/')}}">Login</a></li>
                          <li><a  href="{{ url('/lock_screen')}}">Lock Screen</a></li>
                          <li><a  href="{{ url('/profile')}}">Profile</a></li>
                          <li><a  href="{{ url('/invoice')}}">Invoice</a></li>
                          <li><a  href="{{ url('/pricing_table')}}">Pricing Table</a></li>
                          <li><a  href="{{ url('/faq')}}">FAQ</a></li>
                          <li><a  href="{{ url('/404')}}">404 Error</a></li>
                          <li><a  href="{{ url('/500')}}">500 Error</a></li>
                      </ul>
                  </li>  --}}
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Registro Del Cliente</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/form_component')}}">Registrar Cliente</a></li>
                          <li><a  href="{{ url('/advanced_form_components')}}">Modificar Cliente</a></li>
                          <li><a  href="{{ url('/form_validation')}}">Listar Clientes</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-tasks"></i>
                        <span>Administrar Servicios</span>
                    </a>
                    <ul class="sub">
                      <li><a  href="{{ url('/form_component')}}">Registrar Servicios</a></li>
                      <li><a  href="{{ url('/advanced_form_components')}}">Modificar Servicios</a></li>
                      <li><a  href="{{ url('/form_validation')}}">Listar Servicios</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                  <a href="javascript:;" >
                      <i class="fa fa-tasks"></i>
                      <span>Registro Del Personal</span>
                  </a>
                  <ul class="sub">
                      <li><a  href="{{ url('/form_component')}}">Registrar Personal</a></li>
                      <li><a  href="{{ url('/advanced_form_components')}}">Modificar Personal</a></li>
                      <li><a  href="{{ url('/form_validation')}}">Listar Personal</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" >
                      <i class="fa fa-tasks"></i>
                      <span>Administrar Solicitudes</span>
                  </a>
                  <ul class="sub">
                      <li><a  href="{{ url('/form_component')}}">Registrar Solicitudes</a></li>
                      <li><a  href="{{ url('/advanced_form_components')}}">Modificar Solicitudes</a></li>
                      <li><a  href="{{ url('/form_validation')}}">Listar Solicitudes</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" >
                      <i class="fa fa-book"></i>
                      <span>Asignar Trabajo</span>
                  </a>
                  <ul class="sub">
                      <li><a  href="{{ url('/form_component')}}">Registrar Trabajo</a></li>
                      <li><a  href="{{ url('/advanced_form_components')}}">Modificar Trabajo</a></li>
                      <li><a  href="{{ url('/form_validation')}}">Listar Trabajo</a></li>
                      <li><a href="{{ url('/google_maps')}}" >
                          <i class="fa fa-map-marker"></i>
                          <span>Seguimiento</span>
                      </a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" >
                      <i class="fa fa-bar-chart-o"></i>
                      <span>Reportes Administrativo</span>
                  </a>
                  <ul class="sub">
                      <li><a  href="{{ url('/form_component')}}">Registrar Trabajo</a></li>
                      <li><a  href="{{ url('/advanced_form_components')}}">Modificar Trabajo</a></li>
                      <li><a  href="{{ url('/form_validation')}}">Listar Trabajo</a></li>
                  </ul>
              </li>

                  {{--  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/basic_table')}}">Basic Table</a></li>
                          <li><a  href="{{ url('/responsive_table')}}">Responsive Table</a></li>
                          <li><a  href="{{ url('/advanced_table')}}">Advanced Table</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="{{ url('/inbox')}}">
                          <i class="fa fa-envelope"></i>
                          <span>Mail </span>
                          <span class="label label-theme pull-right mail-info">2</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/morris')}}">Morris</a></li>
                          <li><a  href="{{ url('/chartjs')}}">Chartjs</a></li>
                          <li><a  href="{{ url('/flot_chart')}}">Flot Charts</a></li>
                          <li><a  href="{{ url('/xchart')}}">xChart</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-comments-o"></i>
                          <span>Chat Room</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/lobby')}}">Lobby</a></li>
                          <li><a  href="{{ url('/chat_room')}}"> Chat Room</a></li>
                      </ul>
                  </li>  --}}
                  <li>
                      <a class="active" href="{{ url('/google_maps')}}" >
                          <i class="fa fa-map-marker"></i>
                          <span>Google Maps </span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">

          <div  id="map_canvas"  style="    width: 1000px; height: 1000px;"></div>
         
         <!-- page end-->
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="{{ url('/google_maps')}}#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="/js/common-scripts.js"></script>

    <!--script for this page-->
  <!--Google Map-->
 <script src="/js/google-maps/maplace.js"></script>
  <script src="/js/google-maps/data/points.js"></script>
<head>
    <script type="text/javascript">var centreGot = false;</script>
    
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?"></script>

</head>


<script>

              	
var map; // Global declaration of the map
var lat_longs_map = new Array();
var markers_map = new Array();
var iw_map,marker_4;
var ubicacionesobreros=<?php  echo json_encode($markes) ; ?> ;
var markadoresobreros=new Array();
console.log(ubicacionesobreros);


iw_map = new google.maps.InfoWindow();

     function initialize_map() {

    
    var myOptions = {
          zoom: 12,
          center: {lat: -17.78315962290801, lng: -63.180976199658176},
          mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false};
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);


    // Try W3C Geolocation (Preferred)
    for (let index = 0; index < ubicacionesobreros.length; index++) {
        const element = ubicacionesobreros[index];
        console.log(element["coords_lat"]);

        myLatlng = new google.maps.LatLng(element["coords_lat"],element["coords_lng"]);

            var markerOptions = {
                map: map,
                position: myLatlng,
                title: "mapid_Santa Cuz De la sierra"
            };
            marker_2 = createMarker_map(markerOptions);

            var Datos = {
                Id: element["Identificador"],
                position: myLatlng,
                marcador: marker_2
            };

            markadoresobreros.push(Datos);
            

    }
        console.log(markadoresobreros);
  
         /*
            myLatlng = new google.maps.LatLng(-17.805386348245875,-63.199575023234274);

            var markerOptions = {
                map: map,
                position: myLatlng,
                title: "mapid_Santa Cuz De la sierra"
            };
            marker_3 = createMarker_map(markerOptions);

            myLatlng = new google.maps.LatLng(-17.80827190921417,-63.18918931535259);

            var markerOptions = {
                map: map,
                position: myLatlng,
                title: "mapid_Santa Cuz De la sierra"
            };
            marker_4 = createMarker_map(markerOptions);
*/

            }


                function createMarker_map(markerOptions) {
                        var marker = new google.maps.Marker(markerOptions);
                        markers_map.push(marker);
                        lat_longs_map.push(marker.getPosition());
                        return marker;
                    }
    
             google.maps.event.addDomListener(window, "load", initialize_map);

</script>

  <script>
      //ul list example
      /*new Maplace({
          locations: LocsB,
          map_div: '#gmap-list',
          controls_type: 'list',
          controls_title: 'Choose a location:'
      }).Load();

      new Maplace({
          locations: LocsB,
          map_div: '#gmap-tabs',
          controls_div: '#controls-tabs',
          controls_type: 'list',
          controls_on_map: false,
          show_infowindow: false,
          start: 1,
          afterShow: function(index, location, marker) {
              $('#info').html(location.html);
          }
      }).Load();
      */
  </script>
  <script>
      //custom select box

      $(function(){
        ///  $('select.styled').customSelect();
      });

  </script>

<script>
      // aqui se actualizara el mapa cada cierto tiempo 
      setInterval('Redibujar()',4000);

      function Redibujar(){

        var datos={};
			var urlajax="api/Ubicaciones/Obtenerubicacion";   
            
                 
            $.ajax({                    
                url: urlajax,
               // data: {datos},
                type : 'POST',
                dataType: "json",
                beforeSend:function( ) {   
                    //$("#waitLoadinglogin").fadeIn(1000);
                },                    
                success:function(response) {
                
                console.log(response);
                for (let index = 0; index < markadoresobreros.length; index++) {
                    const element = markadoresobreros[index];
                    for (let J = 0; J < response.length; J++) {
                        const elementresponse = response[J];
                        if(element["Id"]  == elementresponse["Identificador"] ){
                            element["marcador"].setPosition( new google.maps.LatLng( elementresponse["coords_lat"],elementresponse["coords_lng"] ) )
                            //element["coords_lat"],element["coords_lng"]
                        }
                    }
                    
                }
            
                  
                    
                },
                error: function (data) {
                    console.log(data);
                   
                  
                },               
                complete:function( ) {
                    //$("#waitLoadinglogin").fadeOut(1000);  
                },
            }
            ); 

      //          marker_4.setPosition( new google.maps.LatLng( -17.794529560730723,-63.20707154157833 ) );
               // map.panTo( new google.maps.LatLng( 17.3850, 78.4867 ) );
            

        
            console.log("redibujar");
          /*  map = new google.maps.Map(document.getElementById('map_canvas'), {
                    center: {lat: -17.78315962290801, lng: -63.180976199658176},           
                    zoom: 12
                    });
               */     


            }
            

            function moveBus( map, marker ) {
            setTimeout(() => {
                marker.setPosition( new google.maps.LatLng( 12.3850, 77.4867 ) );
                map.panTo( new google.maps.LatLng( 17.3850, 78.4867 ) );
            }, 1000)


        };


  </script>



  </body>

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/google_maps')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:56:58 GMT -->
</html>