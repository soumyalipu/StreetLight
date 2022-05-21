<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntityMultiphaseEdit");?>
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

	require_once("EntityMultiphase.php");
	require_once("ModelMultiphase.php");
	require_once("connection.php");
	global $dbc;
	$multiphase = new EntityMultiphase();
	$multiphaseModel = new ModelMultiphase($dbc);

	$multiphase = $multiphaseModel -> GetMultiphaseById($_GET["ID"])[0];
?>
<!-- End: Retrive Data-->

<!-- Start: Edit Form HTML-->
<div class="container">
	<h3 class="w3-padding w3-card-2 w3-blue">Edit Multiphase</h3>
	<div class="w3-card-2 w3-padding " style="margin-top:-12px;overflow-x:scroll" >
		<form method="POST" enctype="multipart/form-data" >

			<!-- Start: Input Field For ID-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Id</label>
				<input type="number" placeholder="Please enter ID ..." class="w3-input form-control" name="ID" id="ID"  value="<?php echo $multiphase->ID; ?>" />
			</div>
			<!-- End: Input Field For ID-->


			<!-- Start: Input Field For SL_ID-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Sl_id</label>
				<input type="text" placeholder="Please enter SL_ID ..." class="w3-input form-control" name="SL_ID" id="SL_ID"  value="<?php echo $multiphase->SL_ID; ?>" />
			</div>
			<!-- End: Input Field For SL_ID-->


			<!-- Start: Input Field For POWERR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Powerr</label>
				<input type="text" placeholder="Please enter POWERR ..." class="w3-input form-control" name="POWERR" id="POWERR"  value="<?php echo $multiphase->POWERR; ?>" />
			</div>
			<!-- End: Input Field For POWERR-->


			<!-- Start: Input Field For POWERY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Powery</label>
				<input type="text" placeholder="Please enter POWERY ..." class="w3-input form-control" name="POWERY" id="POWERY"  value="<?php echo $multiphase->POWERY; ?>" />
			</div>
			<!-- End: Input Field For POWERY-->


			<!-- Start: Input Field For POWERB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Powerb</label>
				<input type="text" placeholder="Please enter POWERB ..." class="w3-input form-control" name="POWERB" id="POWERB"  value="<?php echo $multiphase->POWERB; ?>" />
			</div>
			<!-- End: Input Field For POWERB-->


			<!-- Start: Input Field For CURRENTR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Currentr</label>
				<input type="text" placeholder="Please enter CURRENTR ..." class="w3-input form-control" name="CURRENTR" id="CURRENTR"  value="<?php echo $multiphase->CURRENTR; ?>" />
			</div>
			<!-- End: Input Field For CURRENTR-->


			<!-- Start: Input Field For CURRENTY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Currenty</label>
				<input type="text" placeholder="Please enter CURRENTY ..." class="w3-input form-control" name="CURRENTY" id="CURRENTY"  value="<?php echo $multiphase->CURRENTY; ?>" />
			</div>
			<!-- End: Input Field For CURRENTY-->


			<!-- Start: Input Field For CURRENTB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Currentb</label>
				<input type="text" placeholder="Please enter CURRENTB ..." class="w3-input form-control" name="CURRENTB" id="CURRENTB"  value="<?php echo $multiphase->CURRENTB; ?>" />
			</div>
			<!-- End: Input Field For CURRENTB-->


			<!-- Start: Input Field For VOLTR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Voltr</label>
				<input type="text" placeholder="Please enter VOLTR ..." class="w3-input form-control" name="VOLTR" id="VOLTR"  value="<?php echo $multiphase->VOLTR; ?>" />
			</div>
			<!-- End: Input Field For VOLTR-->


			<!-- Start: Input Field For VOLTY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Volty</label>
				<input type="text" placeholder="Please enter VOLTY ..." class="w3-input form-control" name="VOLTY" id="VOLTY"  value="<?php echo $multiphase->VOLTY; ?>" />
			</div>
			<!-- End: Input Field For VOLTY-->


			<!-- Start: Input Field For VOLTB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Voltb</label>
				<input type="text" placeholder="Please enter VOLTB ..." class="w3-input form-control" name="VOLTB" id="VOLTB"  value="<?php echo $multiphase->VOLTB; ?>" />
			</div>
			<!-- End: Input Field For VOLTB-->


			<!-- Start: Input Field For LOW_VOLTR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Low_voltr</label>
				<input type="text" placeholder="Please enter LOW_VOLTR ..." class="w3-input form-control" name="LOW_VOLTR" id="LOW_VOLTR"  value="<?php echo $multiphase->LOW_VOLTR; ?>" />
			</div>
			<!-- End: Input Field For LOW_VOLTR-->


			<!-- Start: Input Field For LOW_VOLTY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Low_volty</label>
				<input type="text" placeholder="Please enter LOW_VOLTY ..." class="w3-input form-control" name="LOW_VOLTY" id="LOW_VOLTY"  value="<?php echo $multiphase->LOW_VOLTY; ?>" />
			</div>
			<!-- End: Input Field For LOW_VOLTY-->


			<!-- Start: Input Field For LOW_VOLTB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Low_voltb</label>
				<input type="text" placeholder="Please enter LOW_VOLTB ..." class="w3-input form-control" name="LOW_VOLTB" id="LOW_VOLTB"  value="<?php echo $multiphase->LOW_VOLTB; ?>" />
			</div>
			<!-- End: Input Field For LOW_VOLTB-->


			<!-- Start: Input Field For HIGH_VOLTR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> High_voltr</label>
				<input type="text" placeholder="Please enter HIGH_VOLTR ..." class="w3-input form-control" name="HIGH_VOLTR" id="HIGH_VOLTR"  value="<?php echo $multiphase->HIGH_VOLTR; ?>" />
			</div>
			<!-- End: Input Field For HIGH_VOLTR-->


			<!-- Start: Input Field For HIGH_VOLTY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> High_volty</label>
				<input type="text" placeholder="Please enter HIGH_VOLTY ..." class="w3-input form-control" name="HIGH_VOLTY" id="HIGH_VOLTY"  value="<?php echo $multiphase->HIGH_VOLTY; ?>" />
			</div>
			<!-- End: Input Field For HIGH_VOLTY-->


			<!-- Start: Input Field For HIGH_VOLTB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> High_voltb</label>
				<input type="text" placeholder="Please enter HIGH_VOLTB ..." class="w3-input form-control" name="HIGH_VOLTB" id="HIGH_VOLTB"  value="<?php echo $multiphase->HIGH_VOLTB; ?>" />
			</div>
			<!-- End: Input Field For HIGH_VOLTB-->


			<!-- Start: Input Field For PFR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Pfr</label>
				<input type="text" placeholder="Please enter PFR ..." class="w3-input form-control" name="PFR" id="PFR"  value="<?php echo $multiphase->PFR; ?>" />
			</div>
			<!-- End: Input Field For PFR-->


			<!-- Start: Input Field For PFY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Pfy</label>
				<input type="text" placeholder="Please enter PFY ..." class="w3-input form-control" name="PFY" id="PFY"  value="<?php echo $multiphase->PFY; ?>" />
			</div>
			<!-- End: Input Field For PFY-->


			<!-- Start: Input Field For PFB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Pfb</label>
				<input type="text" placeholder="Please enter PFB ..." class="w3-input form-control" name="PFB" id="PFB"  value="<?php echo $multiphase->PFB; ?>" />
			</div>
			<!-- End: Input Field For PFB-->


			<!-- Start: Input Field For HCR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Hcr</label>
				<input type="text" placeholder="Please enter HCR ..." class="w3-input form-control" name="HCR" id="HCR"  value="<?php echo $multiphase->HCR; ?>" />
			</div>
			<!-- End: Input Field For HCR-->


			<!-- Start: Input Field For HCY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Hcy</label>
				<input type="text" placeholder="Please enter HCY ..." class="w3-input form-control" name="HCY" id="HCY"  value="<?php echo $multiphase->HCY; ?>" />
			</div>
			<!-- End: Input Field For HCY-->


			<!-- Start: Input Field For HCB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Hcb</label>
				<input type="text" placeholder="Please enter HCB ..." class="w3-input form-control" name="HCB" id="HCB"  value="<?php echo $multiphase->HCB; ?>" />
			</div>
			<!-- End: Input Field For HCB-->


			<!-- Start: Input Field For LCR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Lcr</label>
				<input type="text" placeholder="Please enter LCR ..." class="w3-input form-control" name="LCR" id="LCR"  value="<?php echo $multiphase->LCR; ?>" />
			</div>
			<!-- End: Input Field For LCR-->


			<!-- Start: Input Field For LCY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Lcy</label>
				<input type="text" placeholder="Please enter LCY ..." class="w3-input form-control" name="LCY" id="LCY"  value="<?php echo $multiphase->LCY; ?>" />
			</div>
			<!-- End: Input Field For LCY-->


			<!-- Start: Input Field For LCB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Lcb</label>
				<input type="text" placeholder="Please enter LCB ..." class="w3-input form-control" name="LCB" id="LCB"  value="<?php echo $multiphase->LCB; ?>" />
			</div>
			<!-- End: Input Field For LCB-->


			<!-- Start: Input Field For A_M_TIME-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> A_m_time</label>
				<input type="text" placeholder="Please enter A_M_TIME ..." class="w3-input form-control" name="A_M_TIME" id="A_M_TIME"  value="<?php echo $multiphase->A_M_TIME; ?>" />
			</div>
			<!-- End: Input Field For A_M_TIME-->


			<!-- Start: Input Field For A_E_TIME-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> A_e_time</label>
				<input type="text" placeholder="Please enter A_E_TIME ..." class="w3-input form-control" name="A_E_TIME" id="A_E_TIME"  value="<?php echo $multiphase->A_E_TIME; ?>" />
			</div>
			<!-- End: Input Field For A_E_TIME-->


			<!-- Start: Input Field For LONGITUDE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Longitude</label>
				<input type="text" placeholder="Please enter LONGITUDE ..." class="w3-input form-control" name="LONGITUDE" id="LONGITUDE"  value="<?php echo $multiphase->LONGITUDE; ?>" />
			</div>
			<!-- End: Input Field For LONGITUDE-->


			<!-- Start: Input Field For LATITUDE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Latitude</label>
				<input type="text" placeholder="Please enter LATITUDE ..." class="w3-input form-control" name="LATITUDE" id="LATITUDE"  value="<?php echo $multiphase->LATITUDE; ?>" />
			</div>
			<!-- End: Input Field For LATITUDE-->


			<!-- Start: Input Field For DATE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Date</label>
				<input type="text" placeholder="Please enter DATE ..." class="w3-input form-control" name="DATE" id="DATE"  value="<?php echo $multiphase->DATE; ?>" />
			</div>
			<!-- End: Input Field For DATE-->


			<!-- Start: Input Field For TIME-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Time</label>
				<input type="text" placeholder="Please enter TIME ..." class="w3-input form-control" name="TIME" id="TIME"  value="<?php echo $multiphase->TIME; ?>" />
			</div>
			<!-- End: Input Field For TIME-->


			<!-- Start: Input Field For Internetconnected-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Internetconnected</label>
				<input type="number" placeholder="Please enter Internetconnected ..." class="w3-input form-control" name="Internetconnected" id="Internetconnected"  value="<?php echo $multiphase->Internetconnected; ?>" />
			</div>
			<!-- End: Input Field For Internetconnected-->


			<!-- Start: Input Field For Area-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Area</label>
				<input type="text" placeholder="Please enter Area ..." class="w3-input form-control" name="Area" id="Area"  value="<?php echo $multiphase->Area; ?>" />
			</div>
			<!-- End: Input Field For Area-->


			<!-- Start: Input Field For Device_Status-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Device_status</label>
				<input type="number" placeholder="Please enter Device_Status ..." class="w3-input form-control" name="Device_Status" id="Device_Status"  value="<?php echo $multiphase->Device_Status; ?>" />
			</div>
			<!-- End: Input Field For Device_Status-->


			<!-- Start: Input Field For FREQUENCY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Frequency</label>
				<input type="text" placeholder="Please enter FREQUENCY ..." class="w3-input form-control" name="FREQUENCY" id="FREQUENCY"  value="<?php echo $multiphase->FREQUENCY; ?>" />
			</div>
			<!-- End: Input Field For FREQUENCY-->


			<!-- Start: Input Field For SMODE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Smode</label>
				<input type="number" placeholder="Please enter SMODE ..." class="w3-input form-control" name="SMODE" id="SMODE"  value="<?php echo $multiphase->SMODE; ?>" />
			</div>
			<!-- End: Input Field For SMODE-->


			<!-- Start: Input Field For MMODE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Mmode</label>
				<input type="number" placeholder="Please enter MMODE ..." class="w3-input form-control" name="MMODE" id="MMODE"  value="<?php echo $multiphase->MMODE; ?>" />
			</div>
			<!-- End: Input Field For MMODE-->


			<!-- Start: Input Field For FAULT-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Fault</label>
				<input type="number" placeholder="Please enter FAULT ..." class="w3-input form-control" name="FAULT" id="FAULT"  value="<?php echo $multiphase->FAULT; ?>" />
			</div>
			<!-- End: Input Field For FAULT-->


			<!-- Start: Input Field For R_WATT-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> R_watt</label>
				<input type="text" placeholder="Please enter R_WATT ..." class="w3-input form-control" name="R_WATT" id="R_WATT"  value="<?php echo $multiphase->R_WATT; ?>" />
			</div>
			<!-- End: Input Field For R_WATT-->


			<!-- Start: Input Field For ENERGY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Energy</label>
				<input type="text" placeholder="Please enter ENERGY ..." class="w3-input form-control" name="ENERGY" id="ENERGY"  value="<?php echo $multiphase->ENERGY; ?>" />
			</div>
			<!-- End: Input Field For ENERGY-->


			<!-- Start: Input Field For PHONE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Phone</label>
				<input type="number" placeholder="Please enter PHONE ..." class="w3-input form-control" name="PHONE" id="PHONE"  value="<?php echo $multiphase->PHONE; ?>" />
			</div>
			<!-- End: Input Field For PHONE-->


			<!-- Start: Submit Button-->
			<div class="col-md-12">
				<div class="form-group">
					<button class="w3-btn w3-small w3-round w3-blue" name="submitForm" >Submit</button>
					<a href="EntityMultiphaseList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
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

		$multiphase->ID = $_POST["ID"];
		$multiphase->SL_ID = $_POST["SL_ID"];
		$multiphase->POWERR = $_POST["POWERR"];
		$multiphase->POWERY = $_POST["POWERY"];
		$multiphase->POWERB = $_POST["POWERB"];
		$multiphase->CURRENTR = $_POST["CURRENTR"];
		$multiphase->CURRENTY = $_POST["CURRENTY"];
		$multiphase->CURRENTB = $_POST["CURRENTB"];
		$multiphase->VOLTR = $_POST["VOLTR"];
		$multiphase->VOLTY = $_POST["VOLTY"];
		$multiphase->VOLTB = $_POST["VOLTB"];
		$multiphase->LOW_VOLTR = $_POST["LOW_VOLTR"];
		$multiphase->LOW_VOLTY = $_POST["LOW_VOLTY"];
		$multiphase->LOW_VOLTB = $_POST["LOW_VOLTB"];
		$multiphase->HIGH_VOLTR = $_POST["HIGH_VOLTR"];
		$multiphase->HIGH_VOLTY = $_POST["HIGH_VOLTY"];
		$multiphase->HIGH_VOLTB = $_POST["HIGH_VOLTB"];
		$multiphase->PFR = $_POST["PFR"];
		$multiphase->PFY = $_POST["PFY"];
		$multiphase->PFB = $_POST["PFB"];
		$multiphase->HCR = $_POST["HCR"];
		$multiphase->HCY = $_POST["HCY"];
		$multiphase->HCB = $_POST["HCB"];
		$multiphase->LCR = $_POST["LCR"];
		$multiphase->LCY = $_POST["LCY"];
		$multiphase->LCB = $_POST["LCB"];
		$multiphase->A_M_TIME = $_POST["A_M_TIME"];
		$multiphase->A_E_TIME = $_POST["A_E_TIME"];
		$multiphase->LONGITUDE = $_POST["LONGITUDE"];
		$multiphase->LATITUDE = $_POST["LATITUDE"];
		$multiphase->DATE = $_POST["DATE"];
		$multiphase->TIME = $_POST["TIME"];
		$multiphase->Internetconnected = $_POST["Internetconnected"];
		$multiphase->Area = $_POST["Area"];
		$multiphase->Device_Status = $_POST["Device_Status"];
		$multiphase->FREQUENCY = $_POST["FREQUENCY"];
		$multiphase->SMODE = $_POST["SMODE"];
		$multiphase->MMODE = $_POST["MMODE"];
		$multiphase->FAULT = $_POST["FAULT"];
		$multiphase->R_WATT = $_POST["R_WATT"];
		$multiphase->ENERGY = $_POST["ENERGY"];
		$multiphase->PHONE = $_POST["PHONE"];

		if($multiphaseModel -> UpdateMultiphase($multiphase))
		{
			 echo '<script>alert("Multiphase updated successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to updated Multiphase ...");window.location=window.location.href;</script>';
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
