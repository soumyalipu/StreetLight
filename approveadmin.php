<?php
    include("connection.php");
  include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("FILENAME");?>
</head>
<body class="animsition">
<div class="page-wrapper">

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Start: Main Sidebar Container -->
  <?php $utype="Sadmin"; mobile($utype);sideBar($utype); ?>
  <!-- End: Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="page-container">
  <?php headerdesktop(); ?>

    <!-- Main content -->
    <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--<div class="au-card au-card--bg-blue au-card-top-countries m-b-30">-->
                                    <div class="au-card-inner">
                                        <div class="table-responsive "style="border-top-left-radius:12px;border-top-right-radius:12px">
                                            <table class="table table-borderless table-striped table-earning">
                                                <thead>
                                                    <tr>
                                                        <th>Admin Name</th>
                                                        <th>Email</th>
                                                        <th class="text-right">Settings</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php

                                                    require_once("EntityAdmin.php");
                                                    require_once("ModelAdmin.php");
                                                    require_once("connection.php");
                                                    global $dbc;
                                                    $admin = new EntityAdmin();
                                                    $adminModel = new ModelAdmin($dbc);
                                                    $ADMINSTATUS=1;
                                                    $adminArrayList = $adminModel -> GetAdminByAdminstatus($ADMINSTATUS);
                                                    foreach($adminArrayList as $row){                               
                                                  ?>
                                                    <tr>
                                                        <td><?php echo $row->ADMINID;?></td>
                                                        <td><?php echo $row->ADMINEMAIL;?></td>
                                                        <td class="text-right">
                                                           <div class="table-data-feature">
                                                        
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Approve" onclick="window.location='aadmin.php?email=<?php echo $row->ADMINEMAIL ?>';">
                                                                    <i class="zmdi zmdi-check"></i>
                                                                </button>
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php  }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <!--</div>-->
                            </div>
                        
                        <?php // footer(); ?>
                    </div>
                </div>
            </div>
    <!-- /.content -->
  </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  

  <!-- Control Sidebar -->
      <!-- Control sidebar content goes here -->
  
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

   <?php scriptTags() ?>
</body>
</html>
