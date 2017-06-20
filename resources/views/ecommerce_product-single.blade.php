@include('layouts.admin_header')
  <style type="text/css">
    .schedule{
      padding: 0px;
    }
    .btn.active {
      padding: 8px !important;
    }
  </style>
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
                  <div class="row card-box">
                      <!-- end Page title -->
                      <div class="breadcrumb-wrapper bg-light-2">
                        <div class="container">
                          <ol class="breadcrumb-list">
                            <li><a href="index.html">Savex Products</a></li>
                            <li><a href="tour_packages-grid">Tour Packages</a></li>
                            <li><span>Croatia Sailing &amp; Cruising</span></li>
                          </ol>
                        </div>
                      </div>
                      <div class="content-wrapper" style="padding: 20px 0;">
      
                        <div class="container">
                      
                          <div class="row">
                          
                            <div class="col-md-12" role="main">
                              <div class="detail-content-wrapper">
                                <div id="section-1" class="detail-content">
                                 @foreach($singleproduct AS $value)
                                  <div class="col-md-12 itinerary-item ">
                                      <div class="section-title text-left">
                                        <h5>{{$value->product_name}} </h5>
                                      </div>
                                      <div class="preview col-md-6">
                                        <div class="preview-pic tab-content">
                                          <div class="tab-pane active" id="pic-1"><img src="/assets/dashboard_assets/ui-assets/images/detail-gallery/01.jpg" /></div>
                                          <div class="tab-pane" id="pic-2"><img src="/assets/dashboard_assets/ui-assets/images/detail-gallery/02.jpg" /></div>
                                          <div class="tab-pane" id="pic-3"><img src="/assets/dashboard_assets/ui-assets/images/detail-gallery/03.jpg" /></div>
                                          <div class="tab-pane" id="pic-2"><img src="/assets/dashboard_assets/ui-assets/images/detail-gallery/04.jpg" /></div>
                                          <div class="tab-pane" id="pic-3"><img src="/assets/dashboard_assets/ui-assets/images/detail-gallery/05.jpg" /></div>
                                        </div>
                                        <ul class="preview-thumbnail nav nav-tabs">
                                          <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="/assets/dashboard_assets/ui-assets/images/detail-gallery/01.jpg" /></a></li>
                                          <li><a data-target="#pic-2" data-toggle="tab"><img src="/assets/dashboard_assets/ui-assets/images/detail-gallery/02.jpg" /></a></li>
                                          <li><a data-target="#pic-3" data-toggle="tab"><img src="/assets/dashboard_assets/ui-assets/images/detail-gallery/03.jpg" /></a></li>
                                          <li><a data-target="#pic-2" data-toggle="tab"><img src="/assets/dashboard_assets/ui-assets/images/detail-gallery/04.jpg" /></a></li>
                                          <li><a data-target="#pic-3" data-toggle="tab"><img src="/assets/dashboard_assets/ui-assets/images/detail-gallery/05.jpg" /></a></li>
                                        </ul>
                                        
                                      </div>
                                      <div class="details col-md-6">
                                        <p class="product-description">{{$value->product_desc}}</p>
                                        <h4 class="prodcut-price-tag">current price: 
                                        <span>{{$value->product_price}}</span></h4>
                                        
                                        <div class="form-group">
                                          <div class="col-md-4">
                                            <h5 class="sizes line-height-text">sizes:</h5>
                                          </div>
                                          <div class="col-md-8">
                                            <select class="form-control">
                                              <option value="">Select Product Size</option>
                                              @foreach (explode(',', $value->product_size) as $product_size)
                                                  <option value="{{ $product_size }}">{{ $product_size }}</option>
                                              @endforeach
                                            </select>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-md-4">
                                            <h5 class="colors">colors:</h5>
                                          </div>
                                          <div class="m-b-sm col-md-8">
                                            <div class="btn-group" data-toggle="buttons">
                                            @foreach (explode(',', $value->product_color) as $product_color)
                                                <label class="btn btn-sm" style="margin-right: 10px;padding: 13px;background: {{$product_color}}">
                                                  <input type="radio" name="options"><i class="fa fa-check text-active"></i>
                                                </label>
                                              @endforeach
                                              

                                            </div>
                                          </div>
                                        </div>
                                        <div class="action">
                                          <div class="form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <label>Quantity</label>
                                                <input type="number" class="form-control" name="" >
                                              </div>
                                              <div class="col-md-9">
                                                <button class="add-to-cart btn btn-default" type="button" style="margin-top: 15px;">add to cart</button>
                                              </div>
                                            </div>
                                            
                                          </div>
                                          
                                        </div>
                                      </div>
                                  </div>
                                  @endforeach
                                </div>
                            </div>
                        </div>
                          
                      </div>

                    </div>
                    <!-- end Main Wrapper -->
                  </div>
              </div> <!-- container -->
                         
          </div> <!-- content -->

      </div>
@include('layouts.admin_footer')