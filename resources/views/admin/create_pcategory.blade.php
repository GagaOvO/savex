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
                          <h4 class="page-title">All Product Categories</h4>
                          <p class="text-muted page-title-alt">Hello <strong style="color:#505458;">{{Auth::user()->first_name}}</strong>  Welcome to Esavex Admin Panel</p>
                      </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            @if (session('success'))
                                <div class="flash-message">
                                  <div class="alert alert-success alert-dismissable">
                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">
                                       &times;
                                      </a>
                                      {{ Session::get('success') }}
                                  </div>
                                </div>
                            @endif
                            <button class="btn btn-success pull-right" style="margin-left: 40px;" data-toggle="modal" data-target="#create_category">
                               <i class="fa fa-plus"></i> Add New
                            </button>
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>   
                                    <th>N0</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1;?>
                                  @foreach($category AS $row)
                                  <tr>
                                      <td>{{$i++}}</td>
                                      <td>{{$row->name}}</td>
                                      <td width="400px;">{{$row->description}}</td>
                                      <td> 
                                        <a href="#" class="table-action-btn btn btn-success btn-sm">
                                          <i class="md md-edit"></i>
                                        </a>
                                        <a href="#" class="table-action-btn btn btn-danger btn-sm">
                                          <i class="md md-close"></i>
                                        </a>
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
      <!-- Modal -->
  <div id="create_category" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Category</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ URL::to ('product_category')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="form-group col-md-12">
                <label>Category Name</label>
                <input type="text" name="categoryname" value="" class="form-control" placeholder="">
            </div>
            <div class="form-group col-md-12">
                <label>Category Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-success pull-right" value="submit">
        </div>
        </form>
      </div>

    </div>
  </div>
@include('layouts.admin_footer')