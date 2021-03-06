@include('layouts.admin_header')
    <section>
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
                          <h4 class="page-title">Dashboard</h4>
                          <p class="text-muted page-title-alt">Hello <strong style="color:#505458;">{{Auth::user()->first_name}}</strong>  Welcome to Esavex Admin Panel</p>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-lg-3 col-sm-6">
                          <div class="widget-panel widget-style-2 bg-white">
                              <i class="text-primary" style="font-size: 20px;">RWF</i>
                              <h2 class="m-0 text-dark counter font-600">50568</h2>
                              <div class="text-muted m-t-5">Total Revenue</div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                          <div class="widget-panel widget-style-2 bg-white">
                              <i class="text-info" style="font-size: 20px;">RWF</i>
                              <h2 class="m-0 text-dark counter font-600">23568</h2>
                              <div class="text-muted m-t-5">Net Revenue</div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                          <div class="widget-panel widget-style-2 bg-white">
                              <i class="md md-add-shopping-cart text-pink"></i>
                              <h2 class="m-0 text-dark counter font-600">1256</h2>
                              <div class="text-muted m-t-5">Orders</div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                          <div class="widget-panel widget-style-2 bg-white">
                              <i class="md md-account-child text-custom"></i>
                              <h2 class="m-0 text-dark counter font-600">85</h2>
                              <div class="text-muted m-t-5">Agents</div>
                          </div>
                      </div>
                  </div>
                  <!-- end row -->
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="card-box">
                              <a href="ecommerce-dashboard.html#" class="pull-right btn btn-default btn-sm waves-effect waves-light">View All</a>
                        <h4 class="text-dark header-title m-t-0">Recent Orders</h4>
                        <p class="text-muted m-b-30 font-13">
              Your awesome text goes here.
            </p>

                        <div class="table-responsive">
                                  <table class="table table-actions-bar">
                                      <thead>
                                          <tr>
                                              <th>Product</th>
                                              <th>Order Date</th>
                                              <th>Order Number</th>
                                              <th>Amount</th>
                                              <th style="min-width: 80px;">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td><img src="assets/dashboard_assets/images/products/iphone.jpg" class="thumb-sm" alt=""> </td>
                                              <td>08/10/2015</td>
                                              <td><a href="ecommerce-dashboard.html#">UB#160924</a></td>
                                              <td>$1,256</td>
                                              <td>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-close"></i></a>
                                              </td>
                                          </tr>

                                          <tr>
                                              <td><img src="assets/dashboard_assets/images/products/samsung.jpg" class="thumb-sm" alt=""> </td>
                                              <td>08/10/2015</td>
                                              <td><a href="ecommerce-dashboard.html#">UB#160923</a></td>
                                              <td>$2,562</td>
                                              <td>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-close"></i></a>
                                              </td>
                                          </tr>

                                          <tr>
                                              <td><img src="assets/dashboard_assets/images/products/lumia.jpg" class="thumb-sm" alt=""> </td>
                                              <td>08/10/2015</td>
                                              <td><a href="ecommerce-dashboard.html#">UB#160922</a></td>
                                              <td>$6,458</td>
                                              <td>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-close"></i></a>
                                              </td>
                                          </tr>

                                          <tr>
                                              <td><img src="assets/dashboard_assets/images/products/imac.jpg" class="thumb-sm" alt=""> </td>
                                              <td>07/10/2015</td>
                                              <td><a href="ecommerce-dashboard.html#">UB#160921</a></td>
                                              <td>$1,256</td>
                                              <td>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-close"></i></a>
                                              </td>
                                          </tr>

                                          <tr>
                                              <td><img src="assets/dashboard_assets/images/products/macbook.jpg" class="thumb-sm" alt=""> </td>
                                              <td>07/10/2015</td>
                                              <td><a href="ecommerce-dashboard.html#">UB#160920</a></td>
                                              <td>$7,521</td>
                                              <td>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-close"></i></a>
                                              </td>
                                          </tr>

                                          <tr>
                                              <td><img src="assets/dashboard_assets/images/products/samsung.jpg" class="thumb-sm" alt=""> </td>
                                              <td>06/10/2015</td>
                                              <td><a href="ecommerce-dashboard.html#">UB#160920</a></td>
                                              <td>$7,521</td>
                                              <td>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-close"></i></a>
                                              </td>
                                          </tr>

                                      </tbody>
                                  </table>
                              </div>

                      </div>
                    </div> <!-- end col -->


                      <div class="col-lg-6">
                      <div class="card-box">
                              <a href="ecommerce-dashboard.html#" class="pull-right btn btn-default btn-sm waves-effect waves-light">View All</a>
                        <h4 class="text-dark header-title m-t-0">recent Products</h4>
                        <p class="text-muted m-b-30 font-13">
              Your awesome text goes here.
            </p>

                        <div class="table-responsive">
                                  <table class="table table-actions-bar">
                                      <thead>
                                          <tr>
                                              <th>Product</th>
                                              <th>Addded Date</th>
                                              <th>Orders</th>
                                              <th>Amount</th>
                                              <th style="min-width: 80px;">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td><img src="assets/dashboard_assets/images/products/iphone.jpg" class="thumb-sm" alt=""> </td>
                                              <td>08/10/2015</td>
                                              <td><b>22</b></td>
                                              <td>$1,256</td>
                                              <td>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-close"></i></a>
                                              </td>
                                          </tr>

                                          <tr>
                                              <td><img src="assets/dashboard_assets/images/products/samsung.jpg" class="thumb-sm" alt=""> </td>
                                              <td>08/10/2015</td>
                                              <td><b>35</b></td>
                                              <td>$2,562</td>
                                              <td>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-close"></i></a>
                                              </td>
                                          </tr>

                                          <tr>
                                              <td><img src="assets/dashboard_assets/images/products/lumia.jpg" class="thumb-sm" alt=""> </td>
                                              <td>08/10/2015</td>
                                              <td><b>20</b></td>
                                              <td>$6,458</td>
                                              <td>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-close"></i></a>
                                              </td>
                                          </tr>

                                          <tr>
                                              <td><img src="assets/dashboard_assets/images/products/imac.jpg" class="thumb-sm" alt=""> </td>
                                              <td>07/10/2015</td>
                                              <td><b>5</b></td>
                                              <td>$1,256</td>
                                              <td>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-close"></i></a>
                                              </td>
                                          </tr>

                                          <tr>
                                              <td><img src="assets/dashboard_assets/images/products/macbook.jpg" class="thumb-sm" alt=""> </td>
                                              <td>07/10/2015</td>
                                              <td><b>10</b></td>
                                              <td>$7,521</td>
                                              <td>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-close"></i></a>
                                              </td>
                                          </tr>

                                          <tr>
                                              <td><img src="assets/dashboard_assets/images/products/samsung.jpg" class="thumb-sm" alt=""> </td>
                                              <td>06/10/2015</td>
                                              <td><b>7</b></td>
                                              <td>$7,521</td>
                                              <td>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="ecommerce-dashboard.html#" class="table-action-btn"><i class="md md-close"></i></a>
                                              </td>
                                          </tr>

                                      </tbody>
                                  </table>
                              </div>

                      </div>
                    </div> <!-- end col -->



                  </div>
                  
                  

              </div> <!-- container -->
                         
          </div> <!-- content -->

      </div>
@include('layouts.admin_footer')
  
  


  
