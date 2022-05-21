<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntityAdminEdit");?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
	<?php navBar(); ?>
  <!-- /.navbar -->

  <!-- Start: Main Sidebar Container -->
	<?php sideBar(); ?>
  <!-- End: Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
	  
	   
<!-- Start: Retrive Data -->
<?php

	require_once("EntityAdmin.php");
	require_once("ModelAdmin.php");
	require_once("connection.php");
	global $dbc;
	$admin = new EntityAdmin();
	$adminModel = new ModelAdmin($dbc);

	$admin = $adminModel -> GetAdminById($_GET["ID"])[0];
?>
<!-- End: Retrive Data-->

<!-- Start: Edit Form HTML-->
<div class="container">
	<h3 class="w3-padding w3-card-2 w3-blue">Edit Admin</h3>
	<div class="w3-card-2 w3-padding " style="margin-top:-12px;overflow-x:scroll" >
		<form method="POST" enctype="multipart/form-data" >

			<!-- Start: Input Field For ID-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Id</label>
				<input type="number" placeholder="Please enter ID ..." class="w3-input form-control" name="ID" id="ID"  value="<?php echo $admin->ID; ?>" />
			</div>
			<!-- End: Input Field For ID-->


			<!-- Start: Input Field For ADMINID-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Adminid</label>
				<input type="text" placeholder="Please enter ADMINID ..." class="w3-input form-control" name="ADMINID" id="ADMINID"  value="<?php echo $admin->ADMINID; ?>" />
			</div>
			<!-- End: Input Field For ADMINID-->


			<!-- Start: Input Field For ADMINPASS-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Adminpass</label>
				<input type="text" placeholder="Please enter ADMINPASS ..." class="w3-input form-control" name="ADMINPASS" id="ADMINPASS"  value="<?php echo $admin->ADMINPASS; ?>" />
			</div>
			<!-- End: Input Field For ADMINPASS-->


			<!-- Start: Input Field For ADMINEMAIL-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Adminemail</label>
				<input type="text" placeholder="Please enter ADMINEMAIL ..." class="w3-input form-control" name="ADMINEMAIL" id="ADMINEMAIL"  value="<?php echo $admin->ADMINEMAIL; ?>" />
			</div>
			<!-- End: Input Field For ADMINEMAIL-->


			<!-- Start: Input Field For ADMINMOBILE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Adminmobile</label>
				<input type="text" placeholder="Please enter ADMINMOBILE ..." class="w3-input form-control" name="ADMINMOBILE" id="ADMINMOBILE"  value="<?php echo $admin->ADMINMOBILE; ?>" />
			</div>
			<!-- End: Input Field For ADMINMOBILE-->


			<!-- Start: Input Field For ADMINSTATUS-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Adminstatus</label>
				<input type="number" placeholder="Please enter ADMINSTATUS ..." class="w3-input form-control" name="ADMINSTATUS" id="ADMINSTATUS"  value="<?php echo $admin->ADMINSTATUS; ?>" />
			</div>
			<!-- End: Input Field For ADMINSTATUS-->


			<!-- Start: Submit Button-->
			<div class="col-md-12">
				<div class="form-group">
					<button class="w3-btn w3-small w3-round w3-blue" name="submitForm" >Submit</button>
					<a href="EntityAdminList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
				</div>
			</div>
			<!-- End: Submit Button-->

		</form>
	</div>
</div>
<!-- End: Edit Form HTML-->

<!-- Start: Edit Form PHP-->
<?php
	if(isset($_POST["submitForm"]))
	{

		$admin->ID = $_POST["ID"];
		$admin->ADMINID = $_POST["ADMINID"];
		$admin->ADMINPASS = $_POST["ADMINPASS"];
		$admin->ADMINEMAIL = $_POST["ADMINEMAIL"];
		$admin->ADMINMOBILE = $_POST["ADMINMOBILE"];
		$admin->ADMINSTATUS = $_POST["ADMINSTATUS"];

		if($adminModel -> UpdateAdmin($admin))
		{
			 echo '<script>alert("Admin updated successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to updated Admin ...");window.location=window.location.href;</script>';
		}
	}
?>
<!-- End: Edit Form PHP-->

	   
	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 SSSTech</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

   <?php scriptTags() ?>
</body>
</html>
