<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntitySlCreate");?>
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
	<h3 class="w3-padding w3-card-2 w3-blue">Create Sl</h3>
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
				<input type="number" placeholder="Please enter SL_ID ..." class="w3-input form-control" name="SL_ID" id="SL_ID"  />
			</div>
			<!-- End: Input Field For SL_ID-->


			<!-- Start: Input Field For SL_PASS-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Sl_pass</label>
				<input type="text" placeholder="Please enter SL_PASS ..." class="w3-input form-control" name="SL_PASS" id="SL_PASS"  />
			</div>
			<!-- End: Input Field For SL_PASS-->


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


			<!-- Start: Input Field For D1-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> D1</label>
				<input type="number" placeholder="Please enter D1 ..." class="w3-input form-control" name="D1" id="D1"  />
			</div>
			<!-- End: Input Field For D1-->


			<!-- Start: Input Field For D2-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> D2</label>
				<input type="number" placeholder="Please enter D2 ..." class="w3-input form-control" name="D2" id="D2"  />
			</div>
			<!-- End: Input Field For D2-->


			<!-- Start: Input Field For D3-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> D3</label>
				<input type="number" placeholder="Please enter D3 ..." class="w3-input form-control" name="D3" id="D3"  />
			</div>
			<!-- End: Input Field For D3-->


			<!-- Start: Input Field For D4-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> D4</label>
				<input type="number" placeholder="Please enter D4 ..." class="w3-input form-control" name="D4" id="D4"  />
			</div>
			<!-- End: Input Field For D4-->


			<!-- Start: Input Field For ADC1-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Adc1</label>
				<input type="number" placeholder="Please enter ADC1 ..." class="w3-input form-control" name="ADC1" id="ADC1"  />
			</div>
			<!-- End: Input Field For ADC1-->


			<!-- Start: Input Field For ADC2-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Adc2</label>
				<input type="number" placeholder="Please enter ADC2 ..." class="w3-input form-control" name="ADC2" id="ADC2"  />
			</div>
			<!-- End: Input Field For ADC2-->


			<!-- Start: Input Field For ADC3-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Adc3</label>
				<input type="number" placeholder="Please enter ADC3 ..." class="w3-input form-control" name="ADC3" id="ADC3"  />
			</div>
			<!-- End: Input Field For ADC3-->


			<!-- Start: Input Field For ADC4-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Adc4</label>
				<input type="number" placeholder="Please enter ADC4 ..." class="w3-input form-control" name="ADC4" id="ADC4"  />
			</div>
			<!-- End: Input Field For ADC4-->


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


			<!-- Start: Input Field For VOLTR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Voltr</label>
				<input type="text" placeholder="Please enter VOLTR ..." class="w3-input form-control" name="VOLTR" id="VOLTR"  />
			</div>
			<!-- End: Input Field For VOLTR-->


			<!-- Start: Input Field For VOLTB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Voltb</label>
				<input type="text" placeholder="Please enter VOLTB ..." class="w3-input form-control" name="VOLTB" id="VOLTB"  />
			</div>
			<!-- End: Input Field For VOLTB-->


			<!-- Start: Input Field For VOLTY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Volty</label>
				<input type="text" placeholder="Please enter VOLTY ..." class="w3-input form-control" name="VOLTY" id="VOLTY"  />
			</div>
			<!-- End: Input Field For VOLTY-->


			<!-- Start: Input Field For HVR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Hvr</label>
				<input type="text" placeholder="Please enter HVR ..." class="w3-input form-control" name="HVR" id="HVR"  />
			</div>
			<!-- End: Input Field For HVR-->


			<!-- Start: Input Field For HVB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Hvb</label>
				<input type="text" placeholder="Please enter HVB ..." class="w3-input form-control" name="HVB" id="HVB"  />
			</div>
			<!-- End: Input Field For HVB-->


			<!-- Start: Input Field For HBY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Hby</label>
				<input type="text" placeholder="Please enter HBY ..." class="w3-input form-control" name="HBY" id="HBY"  />
			</div>
			<!-- End: Input Field For HBY-->


			<!-- Start: Input Field For LVR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Lvr</label>
				<input type="text" placeholder="Please enter LVR ..." class="w3-input form-control" name="LVR" id="LVR"  />
			</div>
			<!-- End: Input Field For LVR-->


			<!-- Start: Input Field For LVB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Lvb</label>
				<input type="text" placeholder="Please enter LVB ..." class="w3-input form-control" name="LVB" id="LVB"  />
			</div>
			<!-- End: Input Field For LVB-->


			<!-- Start: Input Field For LVY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Lvy</label>
				<input type="text" placeholder="Please enter LVY ..." class="w3-input form-control" name="LVY" id="LVY"  />
			</div>
			<!-- End: Input Field For LVY-->


			<!-- Start: Input Field For CY-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Cy</label>
				<input type="text" placeholder="Please enter CY ..." class="w3-input form-control" name="CY" id="CY"  />
			</div>
			<!-- End: Input Field For CY-->


			<!-- Start: Input Field For CR-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Cr</label>
				<input type="text" placeholder="Please enter CR ..." class="w3-input form-control" name="CR" id="CR"  />
			</div>
			<!-- End: Input Field For CR-->


			<!-- Start: Input Field For CB-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Cb</label>
				<input type="text" placeholder="Please enter CB ..." class="w3-input form-control" name="CB" id="CB"  />
			</div>
			<!-- End: Input Field For CB-->


			<!-- Start: Input Field For PHASE-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Phase</label>
				<input type="number" placeholder="Please enter PHASE ..." class="w3-input form-control" name="PHASE" id="PHASE"  />
			</div>
			<!-- End: Input Field For PHASE-->


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


			<!-- Start: Submit Button-->
			<div class="col-md-12">
				<div class="form-group">
					<button class="w3-btn w3-small w3-round w3-blue" name="submitForm" >Submit</button>
					<a href="EntitySlList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
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

		require_once("EntitySl.php");
		require_once("ModelSl.php");
		require_once("connection.php");
		global $dbc;
		$sl = new EntitySl();
		$slModel = new ModelSl($dbc);

		$sl->ID = $_POST["ID"];
		$sl->SL_ID = $_POST["SL_ID"];
		$sl->SL_PASS = $_POST["SL_PASS"];
		$sl->POWER = $_POST["POWER"];
		$sl->CURRENT = $_POST["CURRENT"];
		$sl->VOLT = $_POST["VOLT"];
		$sl->LOW_VOLT = $_POST["LOW_VOLT"];
		$sl->HIGH_VOLT = $_POST["HIGH_VOLT"];
		$sl->D1 = $_POST["D1"];
		$sl->D2 = $_POST["D2"];
		$sl->D3 = $_POST["D3"];
		$sl->D4 = $_POST["D4"];
		$sl->ADC1 = $_POST["ADC1"];
		$sl->ADC2 = $_POST["ADC2"];
		$sl->ADC3 = $_POST["ADC3"];
		$sl->ADC4 = $_POST["ADC4"];
		$sl->LONGITUDE = $_POST["LONGITUDE"];
		$sl->LATITUDE = $_POST["LATITUDE"];
		$sl->DATE = $_POST["DATE"];
		$sl->TIME = $_POST["TIME"];
		$sl->Internetconnected = $_POST["Internetconnected"];
		$sl->Area = $_POST["Area"];
		$sl->Device_Status = $_POST["Device_Status"];
		$sl->VOLTR = $_POST["VOLTR"];
		$sl->VOLTB = $_POST["VOLTB"];
		$sl->VOLTY = $_POST["VOLTY"];
		$sl->HVR = $_POST["HVR"];
		$sl->HVB = $_POST["HVB"];
		$sl->HBY = $_POST["HBY"];
		$sl->LVR = $_POST["LVR"];
		$sl->LVB = $_POST["LVB"];
		$sl->LVY = $_POST["LVY"];
		$sl->CY = $_POST["CY"];
		$sl->CR = $_POST["CR"];
		$sl->CB = $_POST["CB"];
		$sl->PHASE = $_POST["PHASE"];
		$sl->SMODE = $_POST["SMODE"];
		$sl->MMODE = $_POST["MMODE"];
		$sl->FAULT = $_POST["FAULT"];

		if($slModel -> InsertSl($sl))
		{
			 echo '<script>alert("Sl created successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to create Sl ...");window.location=window.location.href;</script>';
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
