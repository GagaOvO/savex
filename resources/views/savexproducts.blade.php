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
                  
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="grid destination-grid-wrapper">
                        <div class="grid-item" data-colspan="10" data-rowspan="10">
                          <a href="ecommerce" class="top-destination-image-bg" style="background-image:url('./assets/dashboard_assets/ui-assets/images/ecommerce.jpg');">
                            <div class="relative">
                              <h4>Ecommerce Products</h4>
                              <span>Different martials arround</span>
                            </div>
                          </a>
                        </div>
                        
                        <div class="grid-item" data-colspan="10" data-rowspan="5">
                          <a href="tour_package" class="top-destination-image-bg" style="background-image:url('./assets/dashboard_assets/ui-assets/images/tour_package.jpg');">
                            <div class="relative">
                              <h4>Tourism Packages</h4>
                              <span>Starting from $122</span>
                            </div>
                          </a>
                        </div>
                        
                        <div class="grid-item" data-colspan="10" data-rowspan="5">
                          <a href="topup" class="top-destination-image-bg" style="background-image:url('./assets/dashboard_assets/ui-assets/images/topup.jpg');">
                            <div class="relative">
                              <h4>Top Up</h4>
                              <span>you can top up Airtime ,Eletricity ,</span>
                            </div>
                          </a>
                        </div>
                        
                      </div>
                    </div>
                </div>
              </div> <!-- container -->            
          </div> <!-- content -->
      </div>
@include('layouts.admin_footer')