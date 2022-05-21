<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntitySuperadminCreate");?>
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
	  
	   
<!-- Start: Edit Form HTML-->
<div class="container">
	<h3 class="w3-padding w3-card-2 w3-blue">Create Superadmin</h3>
	<div class="w3-card-2 w3-padding " style="margin-top:-12px;overflow-x:scroll" >
		<form method="POST" enctype="multipart/form-data" >

			<!-- Start: Input Field For ID-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Id</label>
				<input type="number" placeholder="Please enter ID ..." class="w3-input form-control" name="ID" id="ID"  />
			</div>
			<!-- End: Input Field For ID-->


			<!-- Start: Input Field For SADMINUID-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Sadminuid</label>
				<input type="text" placeholder="Please enter SADMINUID ..." class="w3-input form-control" name="SADMINUID" id="SADMINUID"  />
			</div>
			<!-- End: Input Field For SADMINUID-->


			<!-- Start: Input Field For SADMINPASSWORD-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Sadminpassword</label>
				<input type="text" placeholder="Please enter SADMINPASSWORD ..." class="w3-input form-control" name="SADMINPASSWORD" id="SADMINPASSWORD"  />
			</div>
			<!-- End: Input Field For SADMINPASSWORD-->


			<!-- Start: Submit Button-->
			<div class="col-md-12">
				<div class="form-group">
					<button class="w3-btn w3-small w3-round w3-blue" name="submitForm" >Submit</button>
					<a href="EntitySuperadminList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
				</div>
			</div>
			<!-- End: Submit Button-->

		</form>
	</div>
</div>
<!-- End: Create Form HTML-->

<!-- Start: Create Form PHP-->
<?php
	if(isset($_POST["submitForm"]))
	{

		require_once("EntitySuperadmin.php");
		require_once("ModelSuperadmin.php");
		require_once("connection.php");
		global $dbc;
		$superadmin = new EntitySuperadmin();
		$superadminModel = new ModelSuperadmin($dbc);

		$superadmin->ID = $_POST["ID"];
		$superadmin->SADMINUID = $_POST["SADMINUID"];
		$superadmin->SADMINPASSWORD = $_POST["SADMINPASSWORD"];

		if($superadminModel -> InsertSuperadmin($superadmin))
		{
			 echo '<script>alert("Superadmin created successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to create Superadmin ...");window.location=window.location.href;</script>';
		}
	}
?>
<!-- End: Create Form PHP-->

	   
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
