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
                          <h4 class="page-title">Products</h4>
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
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                  <?php $i=1; ?>
                                  @foreach($products AS $product)
                                  <tr class="text-center">
                                      <td>{{$i++}}</td>
                                      <td>
                                        <center>
                                          <img src="./uploads/products/{{$product->product_image}}" class="thumb-sm" alt="">
                                        </center>
                                      </td>
                                      <td>{{$product->product_name}}</td>
                                      <td>{{$product->product_price}}</td>
                                      <td>{{$product->name}}</td>
                                      <td width="30px">{{$product->product_quantity}}</td>
                                      <td>{{$product->product_type}}</td>
                                      <td>
                                        <?php if($product->product_quantity == '0'){ ?>
                                          <span class="label label-danger">Out of stock</span>
                                        <?php } else { ?>
                                          <span class="label label-success">In Stock</span>
                                         <?php } ?>
                                        </td>
                                       
                                      <td> 
                                        <a href="#" class="table-action-btn btn btn-success btn-sm">
                                          <i class="md md-edit"></i>
                                        </a>
                                        <a href="#" class="table-action-btn btn btn-danger btn-sm">
                                          <i class="md md-close"></i>
                                        </a>
                                        <!-- <a href="/product_delete/{{$product->id}}" class="table-action-btn btn btn-danger btn-sm">
                                          <i class="md md-close"></i>
                                        </a> -->
                                      </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              </div> <!-- container -->            
          </div> <!-- content -->
      </div>
@include('layouts.admin_footer')