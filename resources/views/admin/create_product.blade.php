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
                          <h4 class="page-title">Products</h4>
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
                          <form method="POST" action="{{ URL::to ('create_product')}}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="card-box">
                                          <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>General</b></h5>
                                          <div class="form-group m-b-20">
                                              <label>Product name <span class="text-danger">*</span></label>
                                              <input type="text" name="product_name" class="form-control" placeholder="e.g : Apple iMac">
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group m-b-20">
                                                  <label>Product Amount<span class="text-danger">*</span></label>
                                                  <input type="text"  name="product_price" class="form-control" value="" placeholder="$ 562.56">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group m-b-20">
                                                <label>Product Quantity<span class="text-danger">*</span></label>
                                                <input type="number" name="product_quantity" class="form-control" value="" placeholder="eg: 60">
                                            </div>
                                            </div>
                                          </div>
                                          <div class="form-group m-b-20">
                                              <label>Product Description <span class="text-danger">*</span></label>
                                              <textarea class="form-control" name="product_desc" rows="7" placeholder="Please enter description"></textarea>
                                          </div>
                                          <div class="form-group m-b-20">
                                              <label class="m-b-15">Product Type<span class="text-danger">*</span></label>
                                              <br/>
                                              <div class="radio radio-inline">
                                                  <input type="radio" id="inlineRadio1" value="Hot Deal" name="product_type" checked="">
                                                  <label for="inlineRadio1">Hot Deal</label>
                                              </div>
                                              <div class="radio radio-inline">
                                                  <input type="radio" id="inlineRadio2" value="Outsider Product" name="product_type">
                                                  <label for="inlineRadio2">Outsider Product</label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="col-lg-6">
                                      <div class="card-box">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group m-b-20">
                                                <label>Categories <span class="text-danger">*</span></label>
                                                <select class="form-control select2" name="category_id">
                                                    <option>Select Category</option>
                                                    @foreach($category AS $row)
                                                      <option value="{{$row->id}}">{{$row->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group m-b-20">
                                                <label>Sub Categories<span class="text-danger">*</span></label>
                                                <select class="form-control select2" name="subcategory_id">
                                                    <option>Select subcategory</option>
                                                    @foreach($subcategory AS $row)
                                                      <option value="{{$row->id}}">{{$row->subcategoryname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                          </div>
                                        </div>
                                          <div class="form-group">
                                            <label>Product Featured Image
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
                                                    <input type="file" name="product_image" class="default" required/>
                                                </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">
                                                <i class="fa fa-trash"></i> Remove</a>
                                              </div>
                                            </div>
                                            </center>
                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label>Size Available</label>
                                                <div class="tags-default">
                                                  <input type="text" value="" data-role="tagsinput" placeholder="add size" name="product_size" class="form-control" />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="col-md-12">
                                                <label>Color Available</label>
                                                <div class="tags-default">
                                                 <div data-color-format="rgb" data-color="#0d1e75" class="colorpicker-default input-group" s>
                                                      <input type="text" readonly="readonly" value="" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-white" type="button" style="padding: 0px;">
                                                          <i style="background-color: #0d1e75;padding: 17px;"></i>
                                                        </button> 
                                                      </span>
                                                    </div>
                                                </div>
                                                <div class="tags-default">
                                                  <input type="text" value="" data-role="tagsinput" placeholder="add colors" class="colorpicker-default form-control" name="product_color" />
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
                                                  <input type="file" name="images" id="filer_input1"
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
<script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
</script>