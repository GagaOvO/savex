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
                  @if (session('success'))
                      <div class="flash-message">
                        <div class="alert alert-success alert-dismissable card-box">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">
                             &times;
                            </a>
                            {{ Session::get('success') }}
                        </div>
                      </div>
                  @endif
                  <div class="row">
                      <div class="col-sm-12">
                          <form method="POST" action="{{ URL::to ('create_package')}}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="card-box">
                                          <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>General</b></h5>
                                          <div class="row">
                                            <div class="form-group m-b-20 col-lg-6">
                                                <label>Package name <span class="text-danger">*</span></label>
                                                <input type="text" name="package_name" class="form-control" placeholder="e.g : Akagera Tour">
                                            </div>
                                            <div class="form-group m-b-20 col-lg-6">
                                                <label>Package Amount<span class="text-danger">*</span></label>
                                                <input type="text"  name="package_price" class="form-control" value="" placeholder="562000 Rwf">
                                            </div>
                                          </div>
                                          <div class="form-group m-b-20">
                                              <label>Package Description <span class="text-danger">*</span></label>
                                              <textarea class="form-control" name="package_desc" rows="7" placeholder="Please enter description"></textarea>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="col-lg-6">
                                      <div class="card-box">
                                          <div class="row">
                                            <div class="form-group m-b-20 col-md-12">
                                                <label>Package Categories <span class="text-danger">*</span></label>
                                                <select class="form-control select2" name="package_category_id">
                                                    <option>Select Category</option>
                                                    @foreach($package_category AS $row)
                                                      <option value="{{$row->id}}">
                                                        {{$row->package_categoryname}}
                                                      </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label>Feautured Image
                                              <span class="text-danger">*</span>
                                            </label>
                                            <center>
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                              <div class="fileupload-new thumbnail" style="width: 150px;">
                                                  <img src="assets/back_assets/images/profile_avatar.jpg" alt="Click on the buttom bellow to Upload image" class="img-responsive" style="padding-top: 0px;" />
                                              </div>
                                              <div class="fileupload-preview fileupload-exists thumbnail" style="width: 150px;"></div>
                                              <div>
                                                <span class="btn btn-default  btn-file" style="">
                                                    <input type="file" name="package_profile" class="default" required/>
                                                </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">
                                                <i class="fa fa-trash"></i> Remove</a>
                                              </div>
                                            </div>
                                            </center>
                                          </div>
                                          
                                      </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="card-box">
                                      <h4 class="header-title m-t-0">Package Itinerary</h4>
                                        <div class="form-group">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <label>Agenda days
                                              <span class="text-danger">*</span></label>
                                              <div class="tags-default">
                                                <input type="text" value="Day 1" data-role="tagsinput" placeholder="add size" name="day_name" class="form-control" />
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <label>Duration
                                              <span class="text-danger">*</span></label>
                                              <input type="text" name="duration" class="form-control" placeholder="e.g :  4 days & 3 nights">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <label>Location(place)
                                              <span class="text-danger">*</span></label>
                                              <input type="text" name="tour_location" class="form-control" placeholder="Eg. Nyungwe">
                                            </div>
                                            <div class="col-md-6">
                                              <label>Ages
                                              <span class="text-danger">*</span></label>
                                              <input type="text" name="ages" class="form-control" placeholder="Eg. 10 - 45+">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">  
                                          <div class="row">
                                            <div class="col-lg-12">
                                              <label>From->to(Trip Points)
                                              <span class="text-danger">*</span></label>
                                              <div class="input-group">
                                                <input type="text" class="form-control" name="start_point" placeholder="Starting Point">
                                                <span class="input-group-addon bg-custom b-0 text-white">to</span>
                                                <input type="text" class="form-control" name="end_point" placeholder="Ending Point">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="card-box">
                                        <h4 class="header-title m-t-0">Product Gallery</h4>
                                        <div class="p-20 p-b-0">
                                            <div class="form-group clearfix">
                                                <div class="col-sm-12 padding-left-0 padding-right-0">
                                                  <input type="file" name="package_gallery" id="filer_input1"
                                                           multiple="multiple">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer" style="padding-top: 40px;padding-bottom: 40px;">
                                          <div class="form-group pull-right" style="margin-top: -15px;">
                                            <button type="Reset" class="btn btn-danger"> Reset</button>
                                            <button type="Submit" class="btn btn-success"> Submit</button>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                           </form>
                          </div>
                      </div>
              </div> <!-- container -->            
          </div> <!-- content -->
      </div>
@include('layouts.admin_footer')