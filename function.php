<?php
ob_start();
    function headContent($fileName)
    {
        ?>
          <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title><?php echo $fileName; ?></title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
        <?php
    }
    
    function mobile($uid){
        ?>
                <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <?php 
                            if ($uid=="Admin") {
                                ?>
                                    <li class="has-sub">
                                        <a class="js-arrow" href="adminindex.php">
                                            <i class="fas fa-user"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="adminllupdate.php">
                                            <i class="fas fa-lightbulb-o"></i>Streetlights</a>
                                    </li>
                                    <li>
                                        <a href="viewmap.php">
                                            <i class="fas fa-map-marker"></i>Map</a>
                                    </li>

                                <?php
                                
                            }
                            else if($uid=="Sadmin"){
                                ?>
                                    <!--<li class="has-sub">-->
                                    <!--    <a class="js-arrow" href="superadminindex.php">-->
                                    <!--        <i class="fas fa-user "></i>Super Admin</a>-->
                                    <!--</li>-->
                                    <li>
                                        <a href="viewstreetlight.php">
                                            <i class="fas fa-lightbulb-o"></i>Streetlights</a>
                                    </li>
                                    <li>
                                        <a href="addarea.php">
                                            <i class="fas fa-map"></i>Add Location</a>
                                    </li>
                                    <li>
                                        <a href="approveadmin.php">
                                            <i class="fas fa-users"></i>Approve Admin</a>
                                    </li>
                                    <li>
                                        <a href="viewmap.php">
                                            <i class="fas fa-map-marker-alt"></i>Map</a>
                                    </li>
                                <?php
                            }

                         ?>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <?php
    }
    function headerdesktop(){
        ?>
        <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap" style="float: right;">
                            
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" style="font-size:26px;" href="#"><?php if ($_SESSION['usertype']=="Admin") {
                                            	echo"Admin";
                                            }else{echo"Super Admin";}?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">

                                                    <h5 class="name">
                                                        <a href="#"><?php if ($_SESSION['usertype']=="Admin") {
                                            	echo"Admin";
                                            }else{echo"Superadmin";}?></a>
                                                    </h5>
                                                    <span class="email"><?php if ($_SESSION['usertype']=="Admin") {
                                            	echo $_SESSION['user'];
                                            }else{echo $_SESSION['user'];}?></span>
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
        <?php
    }
    function navBar()
    {
        ?>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                       <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                  </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            
              <!-- Messages Dropdown Menu -->
              <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-comments"></i>
                  <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                      <img src="https://adminlib.beginnertopro.in/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                      <div class="media-body">
                        <h3 class="dropdown-item-title">
                          Brad Diesel
                          <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">Call me whenever you can...</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                    </div>
                    <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                      <img src="https://adminlib.beginnertopro.in/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                      <div class="media-body">
                        <h3 class="dropdown-item-title">
                          John Pierce
                          <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">I got your message bro</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                    </div>
                    <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                      <img src="https://adminlib.beginnertopro.in/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                      <div class="media-body">
                        <h3 class="dropdown-item-title">
                          Nora Silvester
                          <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">The subject goes here</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                    </div>
                    <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
              </li>
              
              <!-- Notifications Dropdown Menu -->
              <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-bell"></i>
                  <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">15 Notifications</span>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
              </li>
            </ul>
          </nav>
        <?php
    }
    
    function sideBar($uid)
    {
        ?>
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                
                <a href="superadminindex.php">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <?php 
                            if ($uid=="Admin") {?>
                                <li class="active has-sub">
                            <a class="js-arrow" href="adminindex.php">
                                <i class="fas fa-tachometer-alt"></i>Admin</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="adminllupdate.php">
                                <i class="fas fa-lightbulb-o"></i>StreetLights</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <!-- <li>
                                    <a href="viewstreetlight.php">View Streetlight</a>
                                </li> -->
                                <!-- <li>
                                    <a href="login.html">Add Streetlight</a>
                                </li>
                                <li>
                                    <a href="register.html">Update Streetlight</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Delete Streetlight</a>
                                </li> -->
                            </ul>
                        </li>
                        
                        
                        <li>
                            <a href="viewmap.php">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        
                        <?php
                            }  

                            elseif ($uid=="Sadmin") {
                                ?>
                        <!--        <li class="active has-sub">-->
                        <!--    <a class="js-arrow" href="superadminindex.php">-->
                                <!--<i class="fas fa-tachometer-alt"></i>Super Admin</a>-->
                        <!--    <ul class="list-unstyled navbar__sub-list js-sub-list">-->
                                
                        <!--    </ul>-->
                        <!--</li>-->
                        <li class="has-sub">
                            <a class="js-arrow" href="viewstreetlight.php">
                                <i class="fas fa-lightbulb-o"></i>Street Lights (CCMS)</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <!-- <li>
                                    <a href="login.html">View Streetlight</a>
                                </li>
                                <li>
                                    <a href="login.html">Add Streetlight</a>
                                </li>
                                <li>
                                    <a href="register.html">Update Streetlight</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Delete Streetlight</a>
                                </li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="addarea.php">
                                <i class="far fa-map"></i>Add Location</a>
                        </li>
                        <li>
                            <a href="approveadmin.php">
                                <i class="far fa-user"></i>Approve Admin</a>
                        </li>
                        
                        <li>
                            <a href="viewmap.php">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        
                        
                                <?php
                            }

                            else{
                                ?>
                                <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>User</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-lightbulb-o"></i>StreetLights</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">View Streetlight</a>
                                </li>
                                <li>
                                    <a href="login.html">Add Streetlight</a>
                                </li>
                                <li>
                                    <a href="register.html">Update Streetlight</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Delete Streetlight</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-user"></i>Approve Admin</a>
                        </li>
                        
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        
                        
                                <?php
                            }
                            ?>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <?php
    }
    function footer(){
        ?>
        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2022 IDioT Technologies. All rights reserved. Template by IDIoT.</a>.</p>
                                </div>
                            </div>
                        </div>
                        <?php

    }
    function scriptTags()
    {
        ?>
        <!-- jQuery -->
        <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
        <?php
    }
    
    function uploadFile($file){
        $target_dir = "../uploads/";
        $dbName = uniqid(). basename($file["name"]);
        $target_file = $target_dir . $dbName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
               return $dbName;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
   }
?>