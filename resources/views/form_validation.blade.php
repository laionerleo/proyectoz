<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/form_validation')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:56:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../../../../../alvarez.is/demo/dashio/favicon.html">

    <title>COOSEDSA R.L.</title>

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
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('/index')}}#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">
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
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('/index')}}#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">
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
                                <a href="{{ url('/index')}}#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('/index')}}#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Server Overloaded.
                                    <span class="small italic">4 mins.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">
                                    <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                    Memory #2 Not Responding.
                                    <span class="small italic">30 mins.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Disk Space Reached 85%.
                                    <span class="small italic">2 hrs.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">
                                    <span class="label label-success"><i class="fa fa-plus"></i></span>
                                    New User Registered.
                                    <span class="small italic">3 hrs.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/index')}}#">See all notifications</a>
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
                      <a href="{{ url('/index')}}">
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
                          <li ><a  href="{{ url('/inline_editor') }}">Inline Editor</a></li>
                          <li ><a  href="{{ url('/file_upload')}}">Multiple File Upload</a></li>
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
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Registro Del Cliente</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="{{ url('/form_component')}}">Registrar Cliente</a></li>
                        <li ><a  href="{{ url('/advanced_form_components')}}">Modificar Cliente</a></li>
                          <li class="active"><a  href="{{ url('/form_validation')}}">Listar Clientes</a></li>
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
                        <li ><a  href="{{ url('/flot_chart')}}">Flot Charts</a></li>
                        <li ><a  href="{{ url('/xchart')}}">xChart</a></li>
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
                    <a href="{{ url('/google_maps')}}" >
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
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Form Validation</h3>

          	  <!-- BASIC FORM VALIDATION -->
              <div class="row mt">
                  <div class="col-lg-12">
                      <h4><i class="fa fa-angle-right"></i> Basic Validations</h4>
                      <div class="form-panel">
                          <form role="form" class="form-horizontal style-form">
                              <div class="form-group has-success">
                                  <label class="col-lg-2 control-label">First Name</label>
                                  <div class="col-lg-10">
                                      <input type="text" placeholder="" id="f-name" class="form-control">
                                      <p class="help-block">Successfully done</p>
                                  </div>
                              </div>
                              <div class="form-group has-error">
                                  <label class="col-lg-2 control-label">Last Name</label>
                                  <div class="col-lg-10">
                                      <input type="text" placeholder="" id="l-name" class="form-control">
                                      <p class="help-block">Aha you gave a wrong info</p>
                                  </div>
                              </div>
                              <div class="form-group has-warning">
                                  <label class="col-lg-2 control-label">Email</label>
                                  <div class="col-lg-10">
                                      <input type="email" placeholder="" id="email2" class="form-control">
                                      <p class="help-block">Something went wrong</p>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-10">
                                      <button class="btn btn-theme" type="submit">Submit</button>
                                  </div>
                              </div>
                          </form>
                      </div><!-- /form-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

          	  <!-- FORM VALIDATION -->
          	  <div class="row mt">
                  <div class="col-lg-12">
                      <h4><i class="fa fa-angle-right"></i> Form Validations</h4>
                      <div class="form-panel">
                          <div class=" form">
                              <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="#">
                                  <div class="form-group ">
                                      <label for="cname" class="control-label col-lg-2">Name (required)</label>
                                      <div class="col-lg-10">
                                          <input class=" form-control" id="cname" name="name" minlength="2" type="text" required />
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="cemail" class="control-label col-lg-2">E-Mail (required)</label>
                                      <div class="col-lg-10">
                                          <input class="form-control " id="cemail" type="email" name="email" required />
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="curl" class="control-label col-lg-2">URL (optional)</label>
                                      <div class="col-lg-10">
                                          <input class="form-control " id="curl" type="url" name="url" />
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="ccomment" class="control-label col-lg-2">Your Comment (required)</label>
                                      <div class="col-lg-10">
                                          <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button class="btn btn-theme" type="submit">Save</button>
                                          <button class="btn btn-theme04" type="button">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div><!-- /form-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->


              <div class="row mt">
                  <div class="col-lg-12">
                      <h4><i class="fa fa-angle-right"></i> Advanced Form Validations</h4>
                      <div class="form-panel">
                          <div class="form">
                              <form class="cmxform form-horizontal style-form" id="signupForm" method="get" action="#">
                                  <div class="form-group ">
                                      <label for="firstname" class="control-label col-lg-2">Firstname</label>
                                      <div class="col-lg-10">
                                          <input class=" form-control" id="firstname" name="firstname" type="text" />
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="lastname" class="control-label col-lg-2">Lastname</label>
                                      <div class="col-lg-10">
                                          <input class=" form-control" id="lastname" name="lastname" type="text" />
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="username" class="control-label col-lg-2">Username</label>
                                      <div class="col-lg-10">
                                          <input class="form-control " id="username" name="username" type="text" />
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="password" class="control-label col-lg-2">Password</label>
                                      <div class="col-lg-10">
                                          <input class="form-control " id="password" name="password" type="password" />
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                                      <div class="col-lg-10">
                                          <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="email" class="control-label col-lg-2">Email</label>
                                      <div class="col-lg-10">
                                          <input class="form-control " id="email" name="email" type="email" />
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="agree" class="control-label col-lg-2 col-sm-3">Agree to Our Policy</label>
                                      <div class="col-lg-10 col-sm-9">
                                          <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="newsletter" class="control-label col-lg-2 col-sm-3">Receive the Newsletter</label>
                                      <div class="col-lg-10 col-sm-9">
                                          <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="newsletter" />
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button class="btn btn-theme" type="submit">Save</button>
                                          <button class="btn btn-theme04" type="button">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div><!-- /form-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="{{ url('/form_validation')}}#" class="go-top">
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
    <script src="/js/form-validation-script.js"></script>

  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/form_validation')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:56:13 GMT -->
</html>
