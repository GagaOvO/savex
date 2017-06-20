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
                     <div class="col-sm-12 col-md-12">
                      <div class="sorting-wrappper">
              
                        <div class="sorting-header">
                          <h3 class="sorting-title">Tour Packages</h3>
                        </div>
                        <div class="card-box">
                          <div class="sorting-content">
                            <div class="row">
                              <div class="col-sm-12 col-md-8">
                                <div class="sort-by-wrapper">
                                  <label class="sorting-label">Sort by: </label> 
                                  <div class="sorting-middle-holder">
                                    <ul class="sort-by">
                                      <li class="active up"><a href="#">Name <i class="fa fa-long-arrow-down"></i></a></li>
                                      <li><a href="#">Price</a></li>
                                      <li><a href="#">Location</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="col-sm-12 col-md-4">
                                <div class="sort-by-wrapper mt pull-right pull-left-sm mt-10-sm">
                                  <label class="sorting-label">View as: </label> 
                                  <div class="sorting-middle-holder">
                                    <a href="tour_package_listview" class="btn btn-sorting"><i class="fa fa-th-list"></i></a>
                                    <a href="tour_package" class="btn btn-sorting active"><i class="fa fa-th-large"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        

                      </div>
                      
                      <div class="package-list-item-wrapper on-page-result-page">
                      
                        <div class="package-list-item clearfix">
                          <div class="image">
                            <img src="assets/dashboard_assets/ui-assets/images/tour-package/01.jpg" alt="Tour Package" />
                            <div class="absolute-in-image">
                              <div class="duration"><span>4 days 3 nights</span></div>
                            </div>
                          </div>
                          
                          <div class="content">
                            <h5>Paris in Love <button class="btn"></h5>
                            <div class="row gap-10">
                              <div class="col-sm-12 col-md-9">
                                
                                <p class="line18">Letter wooded direct two men indeed income sister. Impression up admiration partiality is...</p>
                                
                                <ul class="list-info">
                                  <li><span class="icon"><i class="fa fa-flag"></i></span> <span class="font600">Starting Point:</span> Paris</li>
                                  <li><span class="icon"><i class="fa fa-flag"></i></span> <span class="font600">Ending Point:</span> Paris</li>
                                </ul>
                                
                              </div>
                              <div class="col-sm-12 col-md-3 text-right text-left-sm">
                                <div class="price">$1422</div>
                                
                                <a href="./tour_package_single" class="btn btn-success">view</a>
                                
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        
                        <div class="package-list-item clearfix">
                          <div class="image">
                            <img src="assets/dashboard_assets/ui-assets/images/tour-package/02.jpg" alt="Tour Package" />
                            <div class="absolute-in-image">
                              <div class="duration"><span>4 days 3 nights</span></div>
                            </div>
                          </div>
                          
                          <div class="content">
                            <h5>Classic Europe<button class="btn"></h5>
                            <div class="row gap-10">
                              <div class="col-sm-12 col-md-9">
                                
                                <p class="line18">Letter wooded direct two men indeed income sister. Impression up admiration partiality is...</p>
                                
                                <ul class="list-info">
                                  <li><span class="icon"><i class="fa fa-flag"></i></span> <span class="font600">Starting Point:</span> Paris</li>
                                  <li><span class="icon"><i class="fa fa-flag"></i></span> <span class="font600">Ending Point:</span> Amsterdam</li>
                                </ul>
                              </div>
                              <div class="col-sm-12 col-md-3 text-right text-left-sm">
                                <div class="price">$1422</div>
                                <a href="./tour_package_single" class="btn btn-success">view</a>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        
                        <div class="package-list-item clearfix">
                          <div class="image">
                            <img src="assets/dashboard_assets/ui-assets/images/tour-package/03.jpg" alt="Tour Package" />
                            <div class="absolute-in-image">
                              <div class="duration"><span>4 days 3 nights</span></div>
                            </div>
                          </div>
                          
                          <div class="content">
                            <h5>Best of Egypt <button class="btn"></h5>
                            <div class="row gap-10">
                              <div class="col-sm-12 col-md-9">
                                
                                <p class="line18">Letter wooded direct two men indeed income sister. Impression up admiration partiality is...</p>
                                
                                <ul class="list-info">
                                  <li><span class="icon"><i class="fa fa-flag"></i></span> <span class="font600">Starting Point:</span> Cairo</li>
                                  <li><span class="icon"><i class="fa fa-flag"></i></span> <span class="font600">Ending Point:</span> Cairo</li>
                                </ul>
                              </div>
                              <div class="col-sm-12 col-md-3 text-right text-left-sm">
                                <div class="price">$1422</div>
                                
                                <a href="./tour_package_single" class="btn btn-success">view</a>
                                
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        
                      </div>

                      <div class="pager-wrappper clearfix">
              
                        <div class="pager-innner">
                        
                          <div class="flex-row flex-align-middle">
                              
                            <div class="flex-column flex-sm-12">
                              Showing reslut 1 to 15 from 248 
                            </div>
                            
                            <div class="flex-column flex-sm-12">
                              <nav class="pager-right">
                                <ul class="pagination">
                                  <li>
                                    <a href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                    </a>
                                  </li>
                                  <li class="active"><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><span>...</span></li>
                                  <li><a href="#">11</a></li>
                                  <li><a href="#">12</a></li>
                                  <li><a href="#">13</a></li>
                                  <li>
                                    <a href="#" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                            </div>
                          
                          </div>
                          
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>
              </div> <!-- container -->
                         
          </div> <!-- content -->

      </div>
@include('layouts.admin_footer')