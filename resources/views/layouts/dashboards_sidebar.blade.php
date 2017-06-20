<!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <?php 
                                if (Auth::user()->user_type == 'super_admin') { ?>
                            <!-- ********************* ECOMMERCE MENUS ***************** -->
                            <li class="text-muted menu-title">Ecommerce</li>
                            <li>
                              <a href="admin_dashboard"><i class="fa fa-dashboard"></i>Dashboard</a>
                            </li>
                            <li class="has_sub">
                               <a href="javascript:void(0);" class="waves-effect"><i class="md md-store-mall-directory"></i> <span> Products </span><span class="menu-arrow"></span></a>
                               <ul class="list-unstyled">
                                 <li><a href="/create_product">Add Products</a></li>
                                 <li><a href="/products">All Products</a></li>
                               </ul>
                            </li>
                            <li class="has_sub">
                               <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-shield"></i> <span> Categories </span><span class="menu-arrow"></span></a>
                               <ul class="list-unstyled">
                                 <li><a href="/product_category">Product Categories</a></li>
                                 <li><a href="/sub_category">Sub Category</a></li>
                               </ul>
                            </li>
                            <li><a href="#"><i class="md md-add-shopping-cart"></i> Orders</a></li>
                            <li><a href="#"><i class="fa fa-users"></i>Agents</a></li>
                            <!-- ********************* ECOMMERCE MENUS ***************** -->

                            <!-- ********************* TOURISM MENUS ***************** -->
                            <li class="text-muted menu-title">Tourism</li>
                            <li>
                              <a href="tourism_dashboard"><i class="glyphicon glyphicon-tree-deciduous"></i> Dashboard</a>
                            </li>
                            <li class="has_sub">
                               <a href="javascript:void(0);" class="waves-effect"><i class="ti-package"></i> <span> Deals </span><span class="menu-arrow"></span></a>
                               <ul class="list-unstyled">
                                 <li><a href="/create_package">Add New</a></li>
                                 <li><a href="/tour_package">All Deals</a></li>
                               </ul>
                            </li>
                            <li>
                              <a href="/package_category"><i class="fa fa-shield"></i>Categories</a>
                            </li>
                            <li><a href="#"><i class="ti ti-bag"></i> Orders</a></li>
                            <!-- ********************* TOURISM MENUS ***************** -->

                            <!-- ********************* TOURISM MENUS ***************** -->
                            <li class="text-muted menu-title">Top Up</li>
                            <li>
                              <a href="#"><i class="ti ti-stats-up"></i> Dashboard</a>
                            </li>
                            <li><a href="#"><i class="ti-write"></i> History</a></li>
                            <li><a href="#"><i class="ti-user"></i> Users</a></li>
                            <li class="has_sub">
                               <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cogs"></i> <span>System Settings </span><span class="menu-arrow"></span></a>
                               <ul class="list-unstyled">
                                 <li><a href="#">Manage Employees</a></li>
                                 <li><a href="#">Cashout History</a></li>
                               </ul>
                            </li>
                            <!-- ********************* TOURISM MENUS ***************** -->
                        <?php } ?>
                        <?php 
                                if (Auth::user()->user_type == 'agent') { ?>
                        <!-- ********************* ECOMMERCE MENUS ***************** -->
                            <div class="user-profile">
                              <center>
                                <img src="/uploads/users/{{Auth::user()->profile_pic}}" alt="user-img" class="img-circle" style="width: 100px;height: 100px;padding: 4px;border: 3px solid #fff;margin-top: 15px;">
                                <h5 class="text-white">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h5>
                              </center>
                            </div>
                             <!-- <li class="text-muted menu-title">App</li> -->
                            <li>
                              <a href="agent_dashboard"><i class="fa fa-dashboard"></i>Dashboard</a>
                            </li>
                            <li>
                              <a href="savexproducts"><i class="md md-store-mall-directory"></i>Esavex Products</a>
                            </li>
                            <!-- ********************* TOURISM MENUS ***************** -->
                            <!-- ********************* TOURISM MENUS ***************** -->
                            <li><a href="#"><i class="md md-add-shopping-cart"></i> Orders</a></li>
                            <!-- ********************* TOURISM MENUS ************** *** -->
                            <li><a href="#"><i class="fa fa-users"></i> My client</a></li>
                            <!-- ********************* TOURISM MENUS ***************** -->
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <?php } ?>

                         <?php 
                                if (Auth::user()->user_type == 'buyer') { ?>
                        <!-- ********************* ECOMMERCE MENUS ***************** -->
                            <div class="user-profile">
                              <center>
                                <img src="uploads/users/{{Auth::user()->profile_pic}}" alt="user-img" class="img-circle" style="width: 100px;height: 100px;padding: 4px;border: 3px solid #fff;margin-top: 15px;">
                                <h5 class="text-white">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h5>
                              </center>
                            </div>
                            <li>
                              <a href="#"><i class="fa fa-dashboard"></i>Dashboard</a>
                            </li>
                            <li>
                              <a href="savexproducts"><i class="md md-store-mall-directory"></i>Esavex Products</a>
                            </li>
                            <li><a href="#"><i class="md md-add-shopping-cart"></i> My Orders</a></li>
                            <li><a href="#"><i class="fa fa-map-marker"></i>Addresses</a></li>
                            <!-- ********************* TOURISM MENUS ***************** -->
                            <li><a href="#"><i class="ti ti-user"></i></a>Profile</li>
                            <!-- ********************* TOURISM MENUS ***************** -->
                        <?php } ?>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 