<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntityStreetlightCreate");?>
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
	<h3 class="w3-padding w3-card-2 w3-blue">Create Streetlight</h3>
	<div class="w3-card-2 w3-padding " style="margin-top:-12px;overflow-x:scroll" >
		<form method="POST" enctype="multipart/form-data" >

			<!-- Start: Input Field For ID-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Id</label>
				<input type="number" placeholder="Please enter ID ..." class="w3-input form-control" name="ID" id="ID"  />
			</div>
			<!-- End: Input Field For ID-->


			<!-- Start: Input Field For SL_ID-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Sl_id</label>
				<input type="text" placeholder="Please enter SL_ID ..." class="w3-input form-control" name="SL_ID" id="SL_ID"  />
			</div>
			<!-- End: Input Field For SL_ID-->


			<!-- Start: Input Field For PHASE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Phase</label>
				<input type="number" placeholder="Please enter PHASE ..." class="w3-input form-control" name="PHASE" id="PHASE"  />
			</div>
			<!-- End: Input Field For PHASE-->


			<!-- Start: Input Field For R_WATT-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> R_watt</label>
				<input type="text" placeholder="Please enter R_WATT ..." class="w3-input form-control" name="R_WATT" id="R_WATT"  />
			</div>
			<!-- End: Input Field For R_WATT-->


			<!-- Start: Input Field For Area-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Area</label>
				<input type="text" placeholder="Please enter Area ..." class="w3-input form-control" name="Area" id="Area"  />
			</div>
			<!-- End: Input Field For Area-->


			<!-- Start: Input Field For LONGITUDE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Longitude</label>
				<input type="text" placeholder="Please enter LONGITUDE ..." class="w3-input form-control" name="LONGITUDE" id="LONGITUDE"  />
			</div>
			<!-- End: Input Field For LONGITUDE-->


			<!-- Start: Input Field For LATITUDE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Latitude</label>
				<input type="text" placeholder="Please enter LATITUDE ..." class="w3-input form-control" name="LATITUDE" id="LATITUDE"  />
			</div>
			<!-- End: Input Field For LATITUDE-->


			<!-- Start: Submit Button-->
			<div class="col-md-12">
				<div class="form-group">
					<button class="w3-btn w3-small w3-round w3-blue" name="submitForm" >Submit</button>
					<a href="EntityStreetlightList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
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

		require_once("EntityStreetlight.php");
		require_once("ModelStreetlight.php");
		require_once("connection.php");
		global $dbc;
		$streetlight = new EntityStreetlight();
		$streetlightModel = new ModelStreetlight($dbc);

		$streetlight->ID = $_POST["ID"];
		$streetlight->SL_ID = $_POST["SL_ID"];
		$streetlight->PHASE = $_POST["PHASE"];
		$streetlight->R_WATT = $_POST["R_WATT"];
		$streetlight->Area = $_POST["Area"];
		$streetlight->LONGITUDE = $_POST["LONGITUDE"];
		$streetlight->LATITUDE = $_POST["LATITUDE"];

		if($streetlightModel -> InsertStreetlight($streetlight))
		{
			 echo '<script>alert("Streetlight created successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to create Streetlight ...");window.location=window.location.href;</script>';
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
