<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntityAreaCreate");?>
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
	<h3 class="w3-padding w3-card-2 w3-blue">Create Area</h3>
	<div class="w3-card-2 w3-padding " style="margin-top:-12px;overflow-x:scroll" >
		<form method="POST" enctype="multipart/form-data" >

			<!-- Start: Input Field For ID-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Id</label>
				<input type="number" placeholder="Please enter ID ..." class="w3-input form-control" name="ID" id="ID"  />
			</div>
			<!-- End: Input Field For ID-->


			<!-- Start: Input Field For area_name-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Area_name</label>
				<input type="text" placeholder="Please enter area_name ..." class="w3-input form-control" name="area_name" id="area_name"  />
			</div>
			<!-- End: Input Field For area_name-->


			<!-- Start: Input Field For Longitude-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Longitude</label>
				<input type="text" placeholder="Please enter Longitude ..." class="w3-input form-control" name="Longitude" id="Longitude"  />
			</div>
			<!-- End: Input Field For Longitude-->


			<!-- Start: Input Field For Latitude-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Latitude</label>
				<input type="text" placeholder="Please enter Latitude ..." class="w3-input form-control" name="Latitude" id="Latitude"  />
			</div>
			<!-- End: Input Field For Latitude-->


			<!-- Start: Submit Button-->
			<div class="col-md-12">
				<div class="form-group">
					<button class="w3-btn w3-small w3-round w3-blue" name="submitForm" >Submit</button>
					<a href="EntityAreaList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
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

		require_once("EntityArea.php");
		require_once("ModelArea.php");
		require_once("connection.php");
		global $dbc;
		$area = new EntityArea();
		$areaModel = new ModelArea($dbc);

		$area->ID = $_POST["ID"];
		$area->area_name = $_POST["area_name"];
		$area->Longitude = $_POST["Longitude"];
		$area->Latitude = $_POST["Latitude"];

		if($areaModel -> InsertArea($area))
		{
			 echo '<script>alert("Area created successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to create Area ...");window.location=window.location.href;</script>';
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
