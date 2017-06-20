<style type="text/css">
  .nav.nav-tabs > li > a{
    line-height: 15px !important;
  }
</style>
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
                    <div class="card-box" style="padding: 10px;">
                      <div class="sorting-content">
                        <div class="row">
                          <div class="col-sm-12 col-md-8">
                            <div class="sort-by-wrapper">
                              <label class="sorting-label">Sort by: </label> 
                              <div class="sorting-middle-holder">
                                <ul class="nav nav-tabs tabs">
                                  <li class="active tab up">
                                      <a href="ui-tabs.html#home-2" data-toggle="tab" aria-expanded="false"> 
                                          <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                          <span class="hidden-xs"> <i class="fa fa-long-arrow-down"></i> Quick Products</span> 
                                      </a> 
                                  </li> 
                                  <li class="tab"> 
                                      <a href="ui-tabs.html#profile-2" data-toggle="tab" aria-expanded="false"> 
                                          <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                          <span class="hidden-xs">Other Products</span> 
                                      </a> 
                                  </li>
                              </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-content"> 
                      <div class="tab-pane active" id="home-2"> 
                        <div class="GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller">
                            <div class="GridLex-grid-noGutter-equalHeight">
                              @foreach($quickproduct AS $value)
                              <div class="GridLex-col-3_sm-6_xs-12 mb-20">
                                <div class="package-grid-item"> 
                                  <a href="{{route ('ecommerce_product-single', ['id' =>$value->id])}}">
                                    <div class="image">
                                      <img src="uploads/products/{{$value->product_image}}" alt="Ecommerce Product" />
                                      <div class="absolute-in-image">
                                        <div class="duration"><span>{{$value->product_price}} RWF</span></div>
                                      </div>
                                    </div>
                                    <div class="content clearfix">
                                      <h6>{{$value->product_name}}</h6>
                                      <div class="absolute-in-content">
                                        <button class="btn btn-success btn-sm btn-cart">
                                          <i class="fa fa-shopping-cart"></i>
                                        </button>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div> 
                      <div class="tab-pane" id="profile-2">
                        <div class="GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller">
                          <div class="GridLex-grid-noGutter-equalHeight">
                            @foreach($otherproduct AS $value)
                            <div class="GridLex-col-4_sm-6_xs-12 mb-20">
                              <div class="package-grid-item"> 
                                <a href="{{route ('ecommerce_product-single', ['id' =>$value->id])}}">
                                  <div class="image">
                                    <img src="uploads/products/{{$value->product_image}}" alt="Ecommerce Product" />
                                    <div class="absolute-in-image">
                                      <div class="duration"><span>{{$value->product_price}} RWF</span></div>
                                    </div>
                                  </div>
                                  <div class="content clearfix">
                                    <h6>{{$value->product_name}}</h6>
                                    <div class="absolute-in-content">
                                      <button class="btn btn-success btn-sm btn-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                      </button>
                                    </div>
                                  </div>
                                </a>
                              </div>
                            </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>

              </div> <!-- container -->
                         
          </div> <!-- content -->

      </div>
@include('layouts.admin_footer')