<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntityMultiphase_statusEdit");?>
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

	require_once("EntityMultiphase_status.php");
	require_once("ModelMultiphase_status.php");
	require_once("connection.php");
	global $dbc;
	$multiphase_status = new EntityMultiphase_status();
	$multiphase_statusModel = new ModelMultiphase_status($dbc);

	$multiphase_status = $multiphase_statusModel -> GetMultiphase_statusById($_GET["ID"])[0];
?>
<!-- End: Retrive Data-->

<!-- Start: Edit Form HTML-->
<div class="container">
	<h3 class="w3-padding w3-card-2 w3-blue">Edit Multiphase_status</h3>
	<div class="w3-card-2 w3-padding " style="margin-top:-12px;overflow-x:scroll" >
		<form method="POST" enctype="multipart/form-data" >

			<!-- Start: Input Field For ID-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Id</label>
				<input type="number" placeholder="Please enter ID ..." class="w3-input form-control" name="ID" id="ID"  value="<?php echo $multiphase_status->ID; ?>" />
			</div>
			<!-- End: Input Field For ID-->


			<!-- Start: Input Field For SL_ID-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Sl_id</label>
				<input type="text" placeholder="Please enter SL_ID ..." class="w3-input form-control" name="SL_ID" id="SL_ID"  value="<?php echo $multiphase_status->SL_ID; ?>" />
			</div>
			<!-- End: Input Field For SL_ID-->


			<!-- Start: Input Field For POWERR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Powerr</label>
				<input type="text" placeholder="Please enter POWERR ..." class="w3-input form-control" name="POWERR" id="POWERR"  value="<?php echo $multiphase_status->POWERR; ?>" />
			</div>
			<!-- End: Input Field For POWERR-->


			<!-- Start: Input Field For POWERY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Powery</label>
				<input type="text" placeholder="Please enter POWERY ..." class="w3-input form-control" name="POWERY" id="POWERY"  value="<?php echo $multiphase_status->POWERY; ?>" />
			</div>
			<!-- End: Input Field For POWERY-->


			<!-- Start: Input Field For POWERB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Powerb</label>
				<input type="text" placeholder="Please enter POWERB ..." class="w3-input form-control" name="POWERB" id="POWERB"  value="<?php echo $multiphase_status->POWERB; ?>" />
			</div>
			<!-- End: Input Field For POWERB-->


			<!-- Start: Input Field For CURRENTR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Currentr</label>
				<input type="text" placeholder="Please enter CURRENTR ..." class="w3-input form-control" name="CURRENTR" id="CURRENTR"  value="<?php echo $multiphase_status->CURRENTR; ?>" />
			</div>
			<!-- End: Input Field For CURRENTR-->


			<!-- Start: Input Field For CURRENTY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Currenty</label>
				<input type="text" placeholder="Please enter CURRENTY ..." class="w3-input form-control" name="CURRENTY" id="CURRENTY"  value="<?php echo $multiphase_status->CURRENTY; ?>" />
			</div>
			<!-- End: Input Field For CURRENTY-->


			<!-- Start: Input Field For CURRENTB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Currentb</label>
				<input type="text" placeholder="Please enter CURRENTB ..." class="w3-input form-control" name="CURRENTB" id="CURRENTB"  value="<?php echo $multiphase_status->CURRENTB; ?>" />
			</div>
			<!-- End: Input Field For CURRENTB-->


			<!-- Start: Input Field For VOLTR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Voltr</label>
				<input type="text" placeholder="Please enter VOLTR ..." class="w3-input form-control" name="VOLTR" id="VOLTR"  value="<?php echo $multiphase_status->VOLTR; ?>" />
			</div>
			<!-- End: Input Field For VOLTR-->


			<!-- Start: Input Field For VOLTY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Volty</label>
				<input type="text" placeholder="Please enter VOLTY ..." class="w3-input form-control" name="VOLTY" id="VOLTY"  value="<?php echo $multiphase_status->VOLTY; ?>" />
			</div>
			<!-- End: Input Field For VOLTY-->


			<!-- Start: Input Field For VOLTB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Voltb</label>
				<input type="text" placeholder="Please enter VOLTB ..." class="w3-input form-control" name="VOLTB" id="VOLTB"  value="<?php echo $multiphase_status->VOLTB; ?>" />
			</div>
			<!-- End: Input Field For VOLTB-->


			<!-- Start: Input Field For LOW_VOLTR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Low_voltr</label>
				<input type="text" placeholder="Please enter LOW_VOLTR ..." class="w3-input form-control" name="LOW_VOLTR" id="LOW_VOLTR"  value="<?php echo $multiphase_status->LOW_VOLTR; ?>" />
			</div>
			<!-- End: Input Field For LOW_VOLTR-->


			<!-- Start: Input Field For LOW_VOLTY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Low_volty</label>
				<input type="text" placeholder="Please enter LOW_VOLTY ..." class="w3-input form-control" name="LOW_VOLTY" id="LOW_VOLTY"  value="<?php echo $multiphase_status->LOW_VOLTY; ?>" />
			</div>
			<!-- End: Input Field For LOW_VOLTY-->


			<!-- Start: Input Field For LOW_VOLTB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Low_voltb</label>
				<input type="text" placeholder="Please enter LOW_VOLTB ..." class="w3-input form-control" name="LOW_VOLTB" id="LOW_VOLTB"  value="<?php echo $multiphase_status->LOW_VOLTB; ?>" />
			</div>
			<!-- End: Input Field For LOW_VOLTB-->


			<!-- Start: Input Field For HIGH_VOLTR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> High_voltr</label>
				<input type="text" placeholder="Please enter HIGH_VOLTR ..." class="w3-input form-control" name="HIGH_VOLTR" id="HIGH_VOLTR"  value="<?php echo $multiphase_status->HIGH_VOLTR; ?>" />
			</div>
			<!-- End: Input Field For HIGH_VOLTR-->


			<!-- Start: Input Field For HIGH_VOLTY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> High_volty</label>
				<input type="text" placeholder="Please enter HIGH_VOLTY ..." class="w3-input form-control" name="HIGH_VOLTY" id="HIGH_VOLTY"  value="<?php echo $multiphase_status->HIGH_VOLTY; ?>" />
			</div>
			<!-- End: Input Field For HIGH_VOLTY-->


			<!-- Start: Input Field For HIGH_VOLTB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> High_voltb</label>
				<input type="text" placeholder="Please enter HIGH_VOLTB ..." class="w3-input form-control" name="HIGH_VOLTB" id="HIGH_VOLTB"  value="<?php echo $multiphase_status->HIGH_VOLTB; ?>" />
			</div>
			<!-- End: Input Field For HIGH_VOLTB-->


			<!-- Start: Input Field For PFR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Pfr</label>
				<input type="text" placeholder="Please enter PFR ..." class="w3-input form-control" name="PFR" id="PFR"  value="<?php echo $multiphase_status->PFR; ?>" />
			</div>
			<!-- End: Input Field For PFR-->


			<!-- Start: Input Field For PFY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Pfy</label>
				<input type="text" placeholder="Please enter PFY ..." class="w3-input form-control" name="PFY" id="PFY"  value="<?php echo $multiphase_status->PFY; ?>" />
			</div>
			<!-- End: Input Field For PFY-->


			<!-- Start: Input Field For PFB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Pfb</label>
				<input type="text" placeholder="Please enter PFB ..." class="w3-input form-control" name="PFB" id="PFB"  value="<?php echo $multiphase_status->PFB; ?>" />
			</div>
			<!-- End: Input Field For PFB-->


			<!-- Start: Input Field For HCR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Hcr</label>
				<input type="text" placeholder="Please enter HCR ..." class="w3-input form-control" name="HCR" id="HCR"  value="<?php echo $multiphase_status->HCR; ?>" />
			</div>
			<!-- End: Input Field For HCR-->


			<!-- Start: Input Field For HCY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Hcy</label>
				<input type="text" placeholder="Please enter HCY ..." class="w3-input form-control" name="HCY" id="HCY"  value="<?php echo $multiphase_status->HCY; ?>" />
			</div>
			<!-- End: Input Field For HCY-->


			<!-- Start: Input Field For HCB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Hcb</label>
				<input type="text" placeholder="Please enter HCB ..." class="w3-input form-control" name="HCB" id="HCB"  value="<?php echo $multiphase_status->HCB; ?>" />
			</div>
			<!-- End: Input Field For HCB-->


			<!-- Start: Input Field For LCR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Lcr</label>
				<input type="text" placeholder="Please enter LCR ..." class="w3-input form-control" name="LCR" id="LCR"  value="<?php echo $multiphase_status->LCR; ?>" />
			</div>
			<!-- End: Input Field For LCR-->


			<!-- Start: Input Field For LCY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Lcy</label>
				<input type="text" placeholder="Please enter LCY ..." class="w3-input form-control" name="LCY" id="LCY"  value="<?php echo $multiphase_status->LCY; ?>" />
			</div>
			<!-- End: Input Field For LCY-->


			<!-- Start: Input Field For LCB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Lcb</label>
				<input type="text" placeholder="Please enter LCB ..." class="w3-input form-control" name="LCB" id="LCB"  value="<?php echo $multiphase_status->LCB; ?>" />
			</div>
			<!-- End: Input Field For LCB-->


			<!-- Start: Input Field For A_M_TIME-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> A_m_time</label>
				<input type="text" placeholder="Please enter A_M_TIME ..." class="w3-input form-control" name="A_M_TIME" id="A_M_TIME"  value="<?php echo $multiphase_status->A_M_TIME; ?>" />
			</div>
			<!-- End: Input Field For A_M_TIME-->


			<!-- Start: Input Field For A_E_TIME-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> A_e_time</label>
				<input type="text" placeholder="Please enter A_E_TIME ..." class="w3-input form-control" name="A_E_TIME" id="A_E_TIME"  value="<?php echo $multiphase_status->A_E_TIME; ?>" />
			</div>
			<!-- End: Input Field For A_E_TIME-->


			<!-- Start: Input Field For LONGITUDE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Longitude</label>
				<input type="text" placeholder="Please enter LONGITUDE ..." class="w3-input form-control" name="LONGITUDE" id="LONGITUDE"  value="<?php echo $multiphase_status->LONGITUDE; ?>" />
			</div>
			<!-- End: Input Field For LONGITUDE-->


			<!-- Start: Input Field For LATITUDE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Latitude</label>
				<input type="text" placeholder="Please enter LATITUDE ..." class="w3-input form-control" name="LATITUDE" id="LATITUDE"  value="<?php echo $multiphase_status->LATITUDE; ?>" />
			</div>
			<!-- End: Input Field For LATITUDE-->


			<!-- Start: Input Field For DATE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Date</label>
				<input type="text" placeholder="Please enter DATE ..." class="w3-input form-control" name="DATE" id="DATE"  value="<?php echo $multiphase_status->DATE; ?>" />
			</div>
			<!-- End: Input Field For DATE-->


			<!-- Start: Input Field For TIME-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Time</label>
				<input type="text" placeholder="Please enter TIME ..." class="w3-input form-control" name="TIME" id="TIME"  value="<?php echo $multiphase_status->TIME; ?>" />
			</div>
			<!-- End: Input Field For TIME-->


			<!-- Start: Input Field For Internetconnected-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Internetconnected</label>
				<input type="number" placeholder="Please enter Internetconnected ..." class="w3-input form-control" name="Internetconnected" id="Internetconnected"  value="<?php echo $multiphase_status->Internetconnected; ?>" />
			</div>
			<!-- End: Input Field For Internetconnected-->


			<!-- Start: Input Field For Area-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Area</label>
				<input type="text" placeholder="Please enter Area ..." class="w3-input form-control" name="Area" id="Area"  value="<?php echo $multiphase_status->Area; ?>" />
			</div>
			<!-- End: Input Field For Area-->


			<!-- Start: Input Field For Device_Status-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Device_status</label>
				<input type="number" placeholder="Please enter Device_Status ..." class="w3-input form-control" name="Device_Status" id="Device_Status"  value="<?php echo $multiphase_status->Device_Status; ?>" />
			</div>
			<!-- End: Input Field For Device_Status-->


			<!-- Start: Input Field For FREQUENCY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Frequency</label>
				<input type="text" placeholder="Please enter FREQUENCY ..." class="w3-input form-control" name="FREQUENCY" id="FREQUENCY"  value="<?php echo $multiphase_status->FREQUENCY; ?>" />
			</div>
			<!-- End: Input Field For FREQUENCY-->


			<!-- Start: Input Field For SMODE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Smode</label>
				<input type="number" placeholder="Please enter SMODE ..." class="w3-input form-control" name="SMODE" id="SMODE"  value="<?php echo $multiphase_status->SMODE; ?>" />
			</div>
			<!-- End: Input Field For SMODE-->


			<!-- Start: Input Field For MMODE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Mmode</label>
				<input type="number" placeholder="Please enter MMODE ..." class="w3-input form-control" name="MMODE" id="MMODE"  value="<?php echo $multiphase_status->MMODE; ?>" />
			</div>
			<!-- End: Input Field For MMODE-->


			<!-- Start: Input Field For FAULT-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Fault</label>
				<input type="number" placeholder="Please enter FAULT ..." class="w3-input form-control" name="FAULT" id="FAULT"  value="<?php echo $multiphase_status->FAULT; ?>" />
			</div>
			<!-- End: Input Field For FAULT-->


			<!-- Start: Input Field For R_WATT-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> R_watt</label>
				<input type="text" placeholder="Please enter R_WATT ..." class="w3-input form-control" name="R_WATT" id="R_WATT"  value="<?php echo $multiphase_status->R_WATT; ?>" />
			</div>
			<!-- End: Input Field For R_WATT-->


			<!-- Start: Input Field For ENERGY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Energy</label>
				<input type="text" placeholder="Please enter ENERGY ..." class="w3-input form-control" name="ENERGY" id="ENERGY"  value="<?php echo $multiphase_status->ENERGY; ?>" />
			</div>
			<!-- End: Input Field For ENERGY-->


			<!-- Start: Input Field For PHONE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Phone</label>
				<input type="number" placeholder="Please enter PHONE ..." class="w3-input form-control" name="PHONE" id="PHONE"  value="<?php echo $multiphase_status->PHONE; ?>" />
			</div>
			<!-- End: Input Field For PHONE-->


			<!-- Start: Submit Button-->
			<div class="col-md-12">
				<div class="form-group">
					<button class="w3-btn w3-small w3-round w3-blue" name="submitForm" >Submit</button>
					<a href="EntityMultiphase_statusList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
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

		$multiphase_status->ID = $_POST["ID"];
		$multiphase_status->SL_ID = $_POST["SL_ID"];
		$multiphase_status->POWERR = $_POST["POWERR"];
		$multiphase_status->POWERY = $_POST["POWERY"];
		$multiphase_status->POWERB = $_POST["POWERB"];
		$multiphase_status->CURRENTR = $_POST["CURRENTR"];
		$multiphase_status->CURRENTY = $_POST["CURRENTY"];
		$multiphase_status->CURRENTB = $_POST["CURRENTB"];
		$multiphase_status->VOLTR = $_POST["VOLTR"];
		$multiphase_status->VOLTY = $_POST["VOLTY"];
		$multiphase_status->VOLTB = $_POST["VOLTB"];
		$multiphase_status->LOW_VOLTR = $_POST["LOW_VOLTR"];
		$multiphase_status->LOW_VOLTY = $_POST["LOW_VOLTY"];
		$multiphase_status->LOW_VOLTB = $_POST["LOW_VOLTB"];
		$multiphase_status->HIGH_VOLTR = $_POST["HIGH_VOLTR"];
		$multiphase_status->HIGH_VOLTY = $_POST["HIGH_VOLTY"];
		$multiphase_status->HIGH_VOLTB = $_POST["HIGH_VOLTB"];
		$multiphase_status->PFR = $_POST["PFR"];
		$multiphase_status->PFY = $_POST["PFY"];
		$multiphase_status->PFB = $_POST["PFB"];
		$multiphase_status->HCR = $_POST["HCR"];
		$multiphase_status->HCY = $_POST["HCY"];
		$multiphase_status->HCB = $_POST["HCB"];
		$multiphase_status->LCR = $_POST["LCR"];
		$multiphase_status->LCY = $_POST["LCY"];
		$multiphase_status->LCB = $_POST["LCB"];
		$multiphase_status->A_M_TIME = $_POST["A_M_TIME"];
		$multiphase_status->A_E_TIME = $_POST["A_E_TIME"];
		$multiphase_status->LONGITUDE = $_POST["LONGITUDE"];
		$multiphase_status->LATITUDE = $_POST["LATITUDE"];
		$multiphase_status->DATE = $_POST["DATE"];
		$multiphase_status->TIME = $_POST["TIME"];
		$multiphase_status->Internetconnected = $_POST["Internetconnected"];
		$multiphase_status->Area = $_POST["Area"];
		$multiphase_status->Device_Status = $_POST["Device_Status"];
		$multiphase_status->FREQUENCY = $_POST["FREQUENCY"];
		$multiphase_status->SMODE = $_POST["SMODE"];
		$multiphase_status->MMODE = $_POST["MMODE"];
		$multiphase_status->FAULT = $_POST["FAULT"];
		$multiphase_status->R_WATT = $_POST["R_WATT"];
		$multiphase_status->ENERGY = $_POST["ENERGY"];
		$multiphase_status->PHONE = $_POST["PHONE"];

		if($multiphase_statusModel -> UpdateMultiphase_status($multiphase_status))
		{
			 echo '<script>alert("Multiphase_status updated successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to updated Multiphase_status ...");window.location=window.location.href;</script>';
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
