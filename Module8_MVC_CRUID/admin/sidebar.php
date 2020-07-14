    <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           
                            <a class="nav-link" href="<?php echo $mainurl;?>Dashboard"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >

                            
                            <a class="nav-link" href="<?php echo $mainurl;?>ManageCustomer"
                                ><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Manage All Customer</a>
                                
                         
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Add Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="<?php echo $mainurl;?>AddCategory">Add Category</a><a class="nav-link" href="<?php echo $mainurl;?>ManageCategory">Manage Category</a></nav>
                            </div>
                         
                         
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Add SubCategory
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Add SubCategory</a><a class="nav-link" href="layout-sidenav-light.html">Manage SubCategory</a></nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Add Color
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Add Color</a><a class="nav-link" href="layout-sidenav-light.html">Manage Color</a></nav>
                            </div>
                         


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Add Size
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Add Size</a><a class="nav-link" href="layout-sidenav-light.html">Manage Size</a></nav>
                            </div>



                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Add Products
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Add Products</a><a class="nav-link" href="layout-sidenav-light.html">Manage Products</a></nav>
                            </div>



                         
                         
                         
                         
                         
                         
                         

                         
                         
                            <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                        >Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                    </div>
                                </nav>
                            </div>
                        -->
                            <a class="nav-link" href="<?php  echo $mainurl;?>ManageFeedback"
                                ><div class="sb-nav-link-icon"><i class="fas fa-comment"></i></div>
                                Manage Feedback</a>
                                
                                
                                <a class="nav-link" href="tables.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Manage Contacts</a
                            >


                            
                            <a class="nav-link" href="tables.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Add Country</a
                            >
                            
                            <a class="nav-link" href="tables.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Add State</a
                            >

                            
                            <a class="nav-link" href="tables.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Add City</a
                            >

                            
                            <a class="nav-link" href="tables.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-truck"></i></div>
                                Manage Orders</a
                            >


                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small" style="color:white">Logged in as:</div>
                        <?php echo "<b style='color:red'>".$_SESSION["em"]."</b>";?>
                    </div>
                </nav>
            </div>
