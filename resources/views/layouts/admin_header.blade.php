<!DOCTYPE html>
  <html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The Esavex A multi part Applications">
        <meta name="author" content="Eric Ku From Itroupe Ltd">

        <title>{{ config('app.name') }}</title>
        <!-- ***************************** Form Advanced Stylesheets ********************************* -->
        <link href="/assets/dashboard_assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="/assets/dashboard_assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="/assets/dashboard_assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="/assets/dashboard_assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/dashboard_assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="/assets/dashboard_assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- ***************************** color Picker Stylesheets ********************************* -->
        <link href="/assets/dashboard_assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

        <!-- ***************************** Gallery Multiple image Uploads ********************************* -->
        <link href="/assets/dashboard_assets/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="/assets/dashboard_assets/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
        <!-- ***************************** Dropzones Css ********************************* -->
        <link href="/assets/dashboard_assets/plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />

        <link href="/assets/dashboard_assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="assets/back_assets/css/bootstrap-fileupload.min.css" type="text/css" />
        <!-- DataTables -->
        <link href="/assets/dashboard_assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/dashboard_assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/dashboard_assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/dashboard_assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/dashboard_assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/dashboard_assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/dashboard_assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/dashboard_assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <!-- ***************************** Morris Charts ********************************* -->        
        <link rel="stylesheet" href="/assets/dashboard_assets/plugins/morris/morris.css">

        <link href="/assets/dashboard_assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/dashboard_assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="/assets/dashboard_assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="/assets/dashboard_assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/assets/dashboard_assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="/assets/dashboard_assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- ***************************** Esavex Product Page styles ********************************* -->
        <link href="/assets/dashboard_assets/ui-assets/css/animate.css" rel="stylesheet">
        <link href="/assets/dashboard_assets/ui-assets/css/main.css" rel="stylesheet">
        <link href="/assets/dashboard_assets/ui-assets/css/component.css" rel="stylesheet">
        
        <!-- ***************************** Esavex Product Custom Page styles ********************************* -->
        <link href="/assets/dashboard_assets/ui-assets/css/style.css" rel="stylesheet" />
        <script src="/assets/dashboard_assets/js/modernizr.min.js"></script>
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
              <!-- LOGO -->
              <div class="topbar-left">
                  <div class="text-center">
                      <a href="#" class="logo">
                        <center>
                          <img src="/assets/back_assets/images/logo.jpeg" class="img-responsive" style="width: 217px;background: #fff">
                        </center>
                      </a>
                  </div>
              </div>
              <!-- Button mobile view to collapse sidebar menu -->
              <div class="navbar navbar-default" role="navigation">
                  <div class="container">
                      <div class="">
                          <div class="pull-left">
                              <button class="button-menu-mobile open-left waves-effect waves-light">
                                  <i class="md md-menu"></i>
                              </button>
                              <span class="clearfix"></span>
                          </div>
                          <ul class="nav navbar-nav navbar-right pull-right">
                              <?php 
                              if (Auth::user()->user_type == 'super_admin') { ?>
                              <li class="dropdown top-menu-item-xs">
                                  <a href="ecommerce-dashboard.html#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                      <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">0</span>
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-lg">
                                      <li class="notifi-title"><span class="label label-default pull-right">New</span>Notification</li>
                                      <li class="list-group slimscroll-noti notification-list">
                                      </li>
                                      <li>
                                          <a href="javascript:void(0);" class="list-group-item text-right">
                                              <small class="font-600">See all notifications</small>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <?php } ?>
                              <?php 
                              if (Auth::user()->user_type == 'agent') { ?>
                              <li class="top-menu-item-xs">
                                  <a href="ecommerce-dashboard.html#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true" style="width: 25px;">
                                      <i class="ti  ti-shopping-cart"></i> <span class="badge badge-xs badge-danger">0</span>
                                  </a>
                              </li>
                              <?php } ?>
                              <li class="dropdown top-menu-item-xs" style="padding-top: 10px;">
                                  <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <img src="/uploads/users/{{Auth::user()->profile_pic}}" alt="user-img" class="img-circle"> </a>
                                  <ul class="dropdown-menu">
                                      <li><a href="javascript:void(0)">Hello {{Auth::user()->first_name}}</a></li>
                                      <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                      <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                          <i class="ti-power-off m-r-10 text-danger"></i>
                                        Logout
                                        </a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                          </form>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                      <!--/.nav-collapse -->
                  </div>
              </div>
          </div>
          <!-- Top Bar End -->
