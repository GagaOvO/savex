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
                          <h4 class="page-title">Tourism Deals</h4>
                          <p class="text-muted page-title-alt">Hello <strong style="color:#505458;">{{Auth::user()->first_name}}</strong>  Welcome to Esavex Admin Panel</p>
                      </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr class="text-center">   
                                    <th>N0</th>
                                    <th>Product</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Category</th>
                                    <th width="30px">Quantity</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                  <tr class="text-center">
                                      <td></td>
                                      <td>
                                        <center>
                                          <img src="" class="thumb-sm" alt="">
                                        </center>
                                      </td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td width="30px"></td>
                                      <td></td>
                                      <td> 
                                        <a href="#" class="table-action-btn btn btn-success btn-sm">
                                          <i class="md md-edit"></i>
                                        </a>
                                        <a href="#" class="table-action-btn btn btn-danger btn-sm">
                                          <i class="md md-close"></i>
                                        </a>
                                      </td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              </div> <!-- container -->            
          </div> <!-- content -->
      </div>
@include('layouts.admin_footer')