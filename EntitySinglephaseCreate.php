<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntitySinglephaseCreate");?>
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
	<h3 class="w3-padding w3-card-2 w3-blue">Create Singlephase</h3>
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


			<!-- Start: Input Field For POWER-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Power</label>
				<input type="text" placeholder="Please enter POWER ..." class="w3-input form-control" name="POWER" id="POWER"  />
			</div>
			<!-- End: Input Field For POWER-->


			<!-- Start: Input Field For CURRENT-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Current</label>
				<input type="text" placeholder="Please enter CURRENT ..." class="w3-input form-control" name="CURRENT" id="CURRENT"  />
			</div>
			<!-- End: Input Field For CURRENT-->


			<!-- Start: Input Field For VOLT-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Volt</label>
				<input type="text" placeholder="Please enter VOLT ..." class="w3-input form-control" name="VOLT" id="VOLT"  />
			</div>
			<!-- End: Input Field For VOLT-->


			<!-- Start: Input Field For LOW_VOLT-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Low_volt</label>
				<input type="text" placeholder="Please enter LOW_VOLT ..." class="w3-input form-control" name="LOW_VOLT" id="LOW_VOLT"  />
			</div>
			<!-- End: Input Field For LOW_VOLT-->


			<!-- Start: Input Field For HIGH_VOLT-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> High_volt</label>
				<input type="text" placeholder="Please enter HIGH_VOLT ..." class="w3-input form-control" name="HIGH_VOLT" id="HIGH_VOLT"  />
			</div>
			<!-- End: Input Field For HIGH_VOLT-->


			<!-- Start: Input Field For PF-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Pf</label>
				<input type="text" placeholder="Please enter PF ..." class="w3-input form-control" name="PF" id="PF"  />
			</div>
			<!-- End: Input Field For PF-->


			<!-- Start: Input Field For HC-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Hc</label>
				<input type="text" placeholder="Please enter HC ..." class="w3-input form-control" name="HC" id="HC"  />
			</div>
			<!-- End: Input Field For HC-->


			<!-- Start: Input Field For LC-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Lc</label>
				<input type="text" placeholder="Please enter LC ..." class="w3-input form-control" name="LC" id="LC"  />
			</div>
			<!-- End: Input Field For LC-->


			<!-- Start: Input Field For A_M_TIME-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> A_m_time</label>
				<input type="text" placeholder="Please enter A_M_TIME ..." class="w3-input form-control" name="A_M_TIME" id="A_M_TIME"  />
			</div>
			<!-- End: Input Field For A_M_TIME-->


			<!-- Start: Input Field For A_E_TIME-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> A_e_time</label>
				<input type="text" placeholder="Please enter A_E_TIME ..." class="w3-input form-control" name="A_E_TIME" id="A_E_TIME"  />
			</div>
			<!-- End: Input Field For A_E_TIME-->


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


			<!-- Start: Input Field For DATE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Date</label>
				<input type="text" placeholder="Please enter DATE ..." class="w3-input form-control" name="DATE" id="DATE"  />
			</div>
			<!-- End: Input Field For DATE-->


			<!-- Start: Input Field For TIME-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Time</label>
				<input type="text" placeholder="Please enter TIME ..." class="w3-input form-control" name="TIME" id="TIME"  />
			</div>
			<!-- End: Input Field For TIME-->


			<!-- Start: Input Field For Internetconnected-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Internetconnected</label>
				<input type="number" placeholder="Please enter Internetconnected ..." class="w3-input form-control" name="Internetconnected" id="Internetconnected"  />
			</div>
			<!-- End: Input Field For Internetconnected-->


			<!-- Start: Input Field For Area-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Area</label>
				<input type="text" placeholder="Please enter Area ..." class="w3-input form-control" name="Area" id="Area"  />
			</div>
			<!-- End: Input Field For Area-->


			<!-- Start: Input Field For Device_Status-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Device_status</label>
				<input type="number" placeholder="Please enter Device_Status ..." class="w3-input form-control" name="Device_Status" id="Device_Status"  />
			</div>
			<!-- End: Input Field For Device_Status-->


			<!-- Start: Input Field For FREQUENCY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Frequency</label>
				<input type="text" placeholder="Please enter FREQUENCY ..." class="w3-input form-control" name="FREQUENCY" id="FREQUENCY"  />
			</div>
			<!-- End: Input Field For FREQUENCY-->


			<!-- Start: Input Field For SMODE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Smode</label>
				<input type="number" placeholder="Please enter SMODE ..." class="w3-input form-control" name="SMODE" id="SMODE"  />
			</div>
			<!-- End: Input Field For SMODE-->


			<!-- Start: Input Field For MMODE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Mmode</label>
				<input type="number" placeholder="Please enter MMODE ..." class="w3-input form-control" name="MMODE" id="MMODE"  />
			</div>
			<!-- End: Input Field For MMODE-->


			<!-- Start: Input Field For FAULT-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Fault</label>
				<input type="number" placeholder="Please enter FAULT ..." class="w3-input form-control" name="FAULT" id="FAULT"  />
			</div>
			<!-- End: Input Field For FAULT-->


			<!-- Start: Input Field For R_WATT-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> R_watt</label>
				<input type="text" placeholder="Please enter R_WATT ..." class="w3-input form-control" name="R_WATT" id="R_WATT"  />
			</div>
			<!-- End: Input Field For R_WATT-->


			<!-- Start: Input Field For ENERGY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Energy</label>
				<input type="text" placeholder="Please enter ENERGY ..." class="w3-input form-control" name="ENERGY" id="ENERGY"  />
			</div>
			<!-- End: Input Field For ENERGY-->


			<!-- Start: Input Field For PHONE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Phone</label>
				<input type="number" placeholder="Please enter PHONE ..." class="w3-input form-control" name="PHONE" id="PHONE"  />
			</div>
			<!-- End: Input Field For PHONE-->


			<!-- Start: Submit Button-->
			<div class="col-md-12">
				<div class="form-group">
					<button class="w3-btn w3-small w3-round w3-blue" name="submitForm" >Submit</button>
					<a href="EntitySinglephaseList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
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

		require_once("EntitySinglephase.php");
		require_once("ModelSinglephase.php");
		require_once("connection.php");
		global $dbc;
		$singlephase = new EntitySinglephase();
		$singlephaseModel = new ModelSinglephase($dbc);

		$singlephase->ID = $_POST["ID"];
		$singlephase->SL_ID = $_POST["SL_ID"];
		$singlephase->POWER = $_POST["POWER"];
		$singlephase->CURRENT = $_POST["CURRENT"];
		$singlephase->VOLT = $_POST["VOLT"];
		$singlephase->LOW_VOLT = $_POST["LOW_VOLT"];
		$singlephase->HIGH_VOLT = $_POST["HIGH_VOLT"];
		$singlephase->PF = $_POST["PF"];
		$singlephase->HC = $_POST["HC"];
		$singlephase->LC = $_POST["LC"];
		$singlephase->A_M_TIME = $_POST["A_M_TIME"];
		$singlephase->A_E_TIME = $_POST["A_E_TIME"];
		$singlephase->LONGITUDE = $_POST["LONGITUDE"];
		$singlephase->LATITUDE = $_POST["LATITUDE"];
		$singlephase->DATE = $_POST["DATE"];
		$singlephase->TIME = $_POST["TIME"];
		$singlephase->Internetconnected = $_POST["Internetconnected"];
		$singlephase->Area = $_POST["Area"];
		$singlephase->Device_Status = $_POST["Device_Status"];
		$singlephase->FREQUENCY = $_POST["FREQUENCY"];
		$singlephase->SMODE = $_POST["SMODE"];
		$singlephase->MMODE = $_POST["MMODE"];
		$singlephase->FAULT = $_POST["FAULT"];
		$singlephase->R_WATT = $_POST["R_WATT"];
		$singlephase->ENERGY = $_POST["ENERGY"];
		$singlephase->PHONE = $_POST["PHONE"];

		if($singlephaseModel -> InsertSinglephase($singlephase))
		{
			 echo '<script>alert("Singlephase created successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to create Singlephase ...");window.location=window.location.href;</script>';
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
