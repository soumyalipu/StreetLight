<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntitySl_statusList");?>
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

	require_once("EntitySl_status.php");
	require_once("ModelSl_status.php");
	require_once("connection.php");
	global $dbc;
	$sl_status = new EntitySl_status();
	$sl_statusModel = new ModelSl_status($dbc);

	$sl_statusArrayList = $sl_statusModel -> GetAllSl_status();
?>
<!-- End: Retrive Data-->

<!-- Start: List HTML-->
<div class="container">

	<h3 class="w3-padding w3-blue">Sl_status List<a href="EntitySl_statusCreate.php"><button class="w3-btn w3-green w3-right w3-small">NEW</button></a></h3>
	<div class="w3-container w3-padding w3-card-2" style="margin-top:-12px;overflow-x:scroll">
		<table class="w3-table-all display" id="example">
			<!-- Start: Table Head Details -->
			<thead>
				<tr>
					<th>Id</th>
					<th>Sl_id</th>
					<th>Sl_pass</th>
					<th>Power</th>
					<th>Current</th>
					<th>Volt</th>
					<th>Low_volt</th>
					<th>High_volt</th>
					<th>D1</th>
					<th>D2</th>
					<th>D3</th>
					<th>D4</th>
					<th>Adc1</th>
					<th>Adc2</th>
					<th>Adc3</th>
					<th>Adc4</th>
					<th>Longitude</th>
					<th>Latitude</th>
					<th>Date</th>
					<th>Time</th>
					<th>Internetconnected</th>
					<th>Area</th>
					<th>Device_status</th>
					<th>Voltr</th>
					<th>Voltb</th>
					<th>Volty</th>
					<th>Hvr</th>
					<th>Hvb</th>
					<th>Hby</th>
					<th>Lvr</th>
					<th>Lvb</th>
					<th>Lvy</th>
					<th>Cy</th>
					<th>Cr</th>
					<th>Cb</th>
					<th>Phase</th>
					<th>Smode</th>
					<th>Mmode</th>
					<th>Fault</th>
					<th>OPP</th>
				<tr>
			</thead>
			<!-- End: Table Head Details -->

			<!-- Start: Table Body Details -->
			<tbody>
				<?php
				foreach($sl_statusArrayList as $row)
				{
					?>
					<tr>
							<td><?php echo $row->ID;?></td>
							<td><?php echo $row->SL_ID;?></td>
							<td><?php echo $row->SL_PASS;?></td>
							<td><?php echo $row->POWER;?></td>
							<td><?php echo $row->CURRENT;?></td>
							<td><?php echo $row->VOLT;?></td>
							<td><?php echo $row->LOW_VOLT;?></td>
							<td><?php echo $row->HIGH_VOLT;?></td>
							<td><?php echo $row->D1;?></td>
							<td><?php echo $row->D2;?></td>
							<td><?php echo $row->D3;?></td>
							<td><?php echo $row->D4;?></td>
							<td><?php echo $row->ADC1;?></td>
							<td><?php echo $row->ADC2;?></td>
							<td><?php echo $row->ADC3;?></td>
							<td><?php echo $row->ADC4;?></td>
							<td><?php echo $row->LONGITUDE;?></td>
							<td><?php echo $row->LATITUDE;?></td>
							<td><?php echo $row->DATE;?></td>
							<td><?php echo $row->TIME;?></td>
							<td><?php echo $row->Internetconnected;?></td>
							<td><?php echo $row->Area;?></td>
							<td><?php echo $row->Device_Status;?></td>
							<td><?php echo $row->VOLTR;?></td>
							<td><?php echo $row->VOLTB;?></td>
							<td><?php echo $row->VOLTY;?></td>
							<td><?php echo $row->HVR;?></td>
							<td><?php echo $row->HVB;?></td>
							<td><?php echo $row->HBY;?></td>
							<td><?php echo $row->LVR;?></td>
							<td><?php echo $row->LVB;?></td>
							<td><?php echo $row->LVY;?></td>
							<td><?php echo $row->CY;?></td>
							<td><?php echo $row->CR;?></td>
							<td><?php echo $row->CB;?></td>
							<td><?php echo $row->PHASE;?></td>
							<td><?php echo $row->SMODE;?></td>
							<td><?php echo $row->MMODE;?></td>
							<td><?php echo $row->FAULT;?></td>
							<td>
								<a href="EntitySl_statusDelete.php?ID=<?php echo $row->ID;?>" class="w3-btn w3-red w3-small w3-round">Delete</a>
								<a href="EntitySl_statusEdit.php?ID=<?php echo $row->ID;?>" class="w3-btn w3-green w3-small w3-round">Edit</a>
							</td>
					</tr>
					<?php
				}
				?>
			</tbody>
			<!-- End: Table body Details -->
		</table>
	</div>

</div>
<!-- End: List HTML-->


	   
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
