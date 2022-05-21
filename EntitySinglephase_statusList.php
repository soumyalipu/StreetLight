<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntitySinglephase_statusList");?>
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

	require_once("EntitySinglephase_status.php");
	require_once("ModelSinglephase_status.php");
	require_once("connection.php");
	global $dbc;
	$singlephase_status = new EntitySinglephase_status();
	$singlephase_statusModel = new ModelSinglephase_status($dbc);

	$singlephase_statusArrayList = $singlephase_statusModel -> GetAllSinglephase_status();
?>
<!-- End: Retrive Data-->

<!-- Start: List HTML-->
<div class="container">

	<h3 class="w3-padding w3-blue">Singlephase_status List<a href="EntitySinglephase_statusCreate.php"><button class="w3-btn w3-green w3-right w3-small">NEW</button></a></h3>
	<div class="w3-container w3-padding w3-card-2" style="margin-top:-12px;overflow-x:scroll">
		<table class="w3-table-all display" id="example">
			<!-- Start: Table Head Details -->
			<thead>
				<tr>
					<th>Id</th>
					<th>Sl_id</th>
					<th>Power</th>
					<th>Current</th>
					<th>Volt</th>
					<th>Low_volt</th>
					<th>High_volt</th>
					<th>Pf</th>
					<th>Hc</th>
					<th>Lc</th>
					<th>A_m_time</th>
					<th>A_e_time</th>
					<th>Longitude</th>
					<th>Latitude</th>
					<th>Date</th>
					<th>Time</th>
					<th>Internetconnected</th>
					<th>Area</th>
					<th>Device_status</th>
					<th>Frequency</th>
					<th>Smode</th>
					<th>Mmode</th>
					<th>Fault</th>
					<th>R_watt</th>
					<th>Energy</th>
					<th>Phone</th>
					<th>OPP</th>
				<tr>
			</thead>
			<!-- End: Table Head Details -->

			<!-- Start: Table Body Details -->
			<tbody>
				<?php
				foreach($singlephase_statusArrayList as $row)
				{
					?>
					<tr>
							<td><?php echo $row->ID;?></td>
							<td><?php echo $row->SL_ID;?></td>
							<td><?php echo $row->POWER;?></td>
							<td><?php echo $row->CURRENT;?></td>
							<td><?php echo $row->VOLT;?></td>
							<td><?php echo $row->LOW_VOLT;?></td>
							<td><?php echo $row->HIGH_VOLT;?></td>
							<td><?php echo $row->PF;?></td>
							<td><?php echo $row->HC;?></td>
							<td><?php echo $row->LC;?></td>
							<td><?php echo $row->A_M_TIME;?></td>
							<td><?php echo $row->A_E_TIME;?></td>
							<td><?php echo $row->LONGITUDE;?></td>
							<td><?php echo $row->LATITUDE;?></td>
							<td><?php echo $row->DATE;?></td>
							<td><?php echo $row->TIME;?></td>
							<td><?php echo $row->Internetconnected;?></td>
							<td><?php echo $row->Area;?></td>
							<td><?php echo $row->Device_Status;?></td>
							<td><?php echo $row->FREQUENCY;?></td>
							<td><?php echo $row->SMODE;?></td>
							<td><?php echo $row->MMODE;?></td>
							<td><?php echo $row->FAULT;?></td>
							<td><?php echo $row->R_WATT;?></td>
							<td><?php echo $row->ENERGY;?></td>
							<td><?php echo $row->PHONE;?></td>
							<td>
								<a href="EntitySinglephase_statusDelete.php?ID=<?php echo $row->ID;?>" class="w3-btn w3-red w3-small w3-round">Delete</a>
								<a href="EntitySinglephase_statusEdit.php?ID=<?php echo $row->ID;?>" class="w3-btn w3-green w3-small w3-round">Edit</a>
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
