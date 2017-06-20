@include('layouts.admin_header')
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        @include('layouts.dashboards_sidebar')
        <!-- /.aside -->
        <style type="text/css">
          .service{
            padding-bottom: 40px;
          }
          .service i {
            font-size: 40px;
            color: #000;
            padding-bottom: 20px;
          }
          .service h4 {
            color: #03025f !important;
          }
          .border-right{
            border-right: 1px solid #ccc;
          }
          .border-bottom{
            border-bottom: 1px solid #ccc;
          }
          .space-top{
            padding-top: 40px;
          }
        </style>
        <div class="content-page">
          <!-- Start content -->
          <div class="content">
              <div class="container">
                  <!-- Page-Title -->
                  <div class="row">
                    <div class="card-box col-md-12">
                        <h3 class="sorting-title text-center">Topup to this Services</h3>
                        <div class="table-responsive" style="padding: 80px;">
                            <div class="col-md-4 border-right border-bottom">
                              <center class="service">
                                <i class=" md-sd-card"></i>
                                <h4 class="m-0 text-dark counter font-600">Airtime</h4>
                              </center>
                            </div>
                            <div class="col-md-4 border-right border-bottom">
                              <center class="service">
                                <i class=" wi wi-lightning"></i>
                                <h4 class="m-0 text-dark counter font-600">Electricty</h4>
                              </center>
                            </div>
                            <div class="col-md-4 border-bottom">
                              <center class="service">
                                <i class=" wi wi-raindrops"></i>
                                <h4 class="m-0 text-dark counter font-600">Water</h4>
                              </center>
                            </div>
                            <div class="col-md-4 border-right space-top">
                              <center class="service">
                                <i class=" md-tv"></i>
                                <h4 class="m-0 text-dark counter font-600">Tv Bundles</h4>
                              </center>
                            </div>
                            <div class="col-md-4 border-right space-top">
                              <center class="service">
                                <i class="fa fa-globe"></i>
                                <h4 class="m-0 text-dark counter font-600">Internet</h4>
                              </center>
                            </div>
                            <div class="col-md-4 space-top">
                              
                            </div>
                        </div>
                    </div>
                  </div>
              </div> <!-- container -->
                         
          </div> <!-- content -->

      </div>
@include('layouts.admin_footer')