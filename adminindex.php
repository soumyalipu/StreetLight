<?php
ob_start();
    include("connection.php");
    include("function.php");
  if(!isset($_SESSION['user']))
    {
        header("Location:login.php");
    }
    else{
        header("location:adminllupdate.php");
    }
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
  <?php $utype=$_SESSION['usertype'];mobile($utype); sideBar($utype); ?>
  <!-- End: Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="page-container">
  <?php headerdesktop(); ?>

    <!-- Main content -->
    <div class="main-content">
      #maincontent
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
