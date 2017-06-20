@include('layouts.admin_header')
    <section>
      <style type="text/css">
        .btn-file{
          padding: 0px;
        }
      </style>
      <section class="hbox stretch">
        <!-- .aside -->
        @include('layouts.dashboards_sidebar')
        <!-- /.aside -->
        <div class="content-page">
          <!-- Start content -->
          <div class="content">
              <div class="container">

                  <!-- Page-Title -->
                  <div class="row">
                      <div class="col-sm-12">
                          <h4 class="page-title">Create tourism Package</h4>
                          <p class="text-muted page-title-alt">Hello <strong style="color:#505458;">{{Auth::user()->first_name}}</strong>  Welcome to Esavex Admin Panel</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                          <form method="POST" action="{{ URL::to ('create_package')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-box">
                              <div class="form-control">
                                
                              </div>
                            </div>
                           </form>
                          </div>
                      </div>
              </div> <!-- container -->            
          </div> <!-- content -->
      </div>
@include('layouts.admin_footer')