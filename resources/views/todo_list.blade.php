<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/todo_list') }} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:55:17 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../../../../../alvarez.is/demo/dashio/favicon.html">

    <title>DASHIO - Bootstrap Admin + Front-End template</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/to-do.css">

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
            <a href="{{ url('/index') }}" class="logo"><b>DASH<span>IO</span></b></a>
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
                    <li><a class="logout" href="{{ url('/')}}">Logout</a></li>
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
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
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
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="{{ url('/grids') }}">Grids</a></li>
                        <li ><a  href="{{ url('/calendar') }}">Calendar</a></li>
                          <li><a  href="{{ url('/gallery') }}">Gallery</a></li>
                          <li class="active"><a  href="{{ url('/todo_list') }}">Todo List</a></li>
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
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/form_component')}}">Form Components</a></li>
                          <li><a  href="{{ url('/advanced_form_components')}}">Advanced Components</a></li>
                          <li><a  href="{{ url('/form_validation')}}">Form Validation</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
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
                  </li>
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
          	<h3><i class="fa fa-angle-right"></i> To-Do Lists</h3>

          	<!-- SIMPLE TO DO LIST -->
          	<div class="row mt">
          		<div class="col-md-12">
          			<div class="white-panel pn">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Todo List - Basic Style</h5></div>
	                        <br>
	                 	</div>
				  		<div class="custom-check goleft mt">
				             <table id="todo" class="table table-hover custom-check">
				              <tbody>
				                <tr>
				           			<td>
				                        <span class="check"><input type="checkbox" class="checked"></span>
				                        <a href="{{ url('/index') }}#">Send invoice</a></span>
				                        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
									</td>
				                </tr>
				                <tr>
				           			<td>
				                        <span class="check"><input type="checkbox" class="checked"></span>
				                        <a href="{{ url('/index') }}#">Check messages</a></span>
				                        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
									</td>
				                </tr>
				                <tr>
				            		<td>
				                        <span class="check"><input type="checkbox" class="checked"></span>
				                        <a href="{{ url('/index') }}#">Pay bills</a></span>
				                        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
									</td>
				                </tr>
				                <tr>
				            		<td>
				                        <span class="check"><input type="checkbox" class="checked"></span>
				                        <a href="{{ url('/index') }}#">Schedule site </a></span>
				                        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
									</td>
				                 </tr>
				              </tbody>
				          </table>
						</div><!-- /table-responsive -->
					</div><!--/ White-panel -->
          		</div><! --/col-md-12 -->
          	</div><! -- row -->


          	<!-- COMPLEX TO DO LIST -->
              <div class="row mt">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Todo List - Complex Style</h5></div>
	                        <br>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">

                                  <ul class="task-list">
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Dashio - Admin Panel & Front-end Theme</span>
                                              <span class="badge bg-theme">Done</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Extensive collection of plugins</span>
                                              <span class="badge bg-warning">Cool</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Free updates always, no extra fees.</span>
                                              <span class="badge bg-success">2 Days</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">More features coming soon</span>
                                              <span class="badge bg-info">Tomorrow</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Hey, seriously, you should buy this Dashboard</span>
                                              <span class="badge bg-important">Now</span>
                                              <div class="pull-right">
                                                  <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                              </div>

                              <div class=" add-task-row">
                                  <a class="btn btn-success btn-sm pull-left" href="{{ url('/todo_list') }}#">Add New Tasks</a>
                                  <a class="btn btn-default btn-sm pull-right" href="{{ url('/todo_list') }}#">See All Tasks</a>
                              </div>
                          </div>
                      </section>
                  </div><!-- /col-md-12-->
              </div><!-- /row -->


          	<!-- SORTABLE TO DO LIST -->

              <div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Todo List - Sortable Style</h5></div>
	                        <br>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                                      <li class="list-primary">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Dashio - Admin Panel & Front-end Theme</span>
                                              <span class="badge bg-theme">Done</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-check"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>

                                      <li class="list-danger">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Extensive collection of plugins</span>
                                              <span class="badge bg-warning">Cool</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-check"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-success">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Free updates always, no extra fees.</span>
                                              <span class="badge bg-success">2 Days</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-check"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-warning">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">More features coming soon</span>
                                              <span class="badge bg-info">Tomorrow</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-check"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-info">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Hey, seriously, you should buy this Dashboard</span>
                                              <span class="badge bg-important">Now</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-check"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>

                                  </ul>
                              </div>
                              <div class=" add-task-row">
                                  <a class="btn btn-success btn-sm pull-left" href="{{ url('/todo_list') }}#">Add New Tasks</a>
                                  <a class="btn btn-default btn-sm pull-right" href="{{ url('/todo_list') }}#">See All Tasks</a>
                              </div>
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="{{ url('/todo_list') }}#" class="go-top">
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
	<script src="../../../../../code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="/js/tasks.js" type="text/javascript"></script>

    <script>
      jQuery(document).ready(function() {
          TaskList.initTaskWidget();
      });

      $(function() {
          $( "#sortable" ).sortable();
          $( "#sortable" ).disableSelection();
      });

    </script>


  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>

<!-- Mirrored from blacktie.co/demo/premium/dashio/dashboard/{{ url('/todo_list') }} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 17:55:22 GMT -->
</html>
