<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntityMultiphase_statusList");?>
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

	$multiphase_statusArrayList = $multiphase_statusModel -> GetAllMultiphase_status();
?>
<!-- End: Retrive Data-->

<!-- Start: List HTML-->
<div class="container">

	<h3 class="w3-padding w3-blue">Multiphase_status List<a href="EntityMultiphase_statusCreate.php"><button class="w3-btn w3-green w3-right w3-small">NEW</button></a></h3>
	<div class="w3-container w3-padding w3-card-2" style="margin-top:-12px;overflow-x:scroll">
		<table class="w3-table-all display" id="example">
			<!-- Start: Table Head Details -->
			<thead>
				<tr>
					<th>Id</th>
					<th>Sl_id</th>
					<th>Powerr</th>
					<th>Powery</th>
					<th>Powerb</th>
					<th>Currentr</th>
					<th>Currenty</th>
					<th>Currentb</th>
					<th>Voltr</th>
					<th>Volty</th>
					<th>Voltb</th>
					<th>Low_voltr</th>
					<th>Low_volty</th>
					<th>Low_voltb</th>
					<th>High_voltr</th>
					<th>High_volty</th>
					<th>High_voltb</th>
					<th>Pfr</th>
					<th>Pfy</th>
					<th>Pfb</th>
					<th>Hcr</th>
					<th>Hcy</th>
					<th>Hcb</th>
					<th>Lcr</th>
					<th>Lcy</th>
					<th>Lcb</th>
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
				foreach($multiphase_statusArrayList as $row)
				{
					?>
					<tr>
							<td><?php echo $row->ID;?></td>
							<td><?php echo $row->SL_ID;?></td>
							<td><?php echo $row->POWERR;?></td>
							<td><?php echo $row->POWERY;?></td>
							<td><?php echo $row->POWERB;?></td>
							<td><?php echo $row->CURRENTR;?></td>
							<td><?php echo $row->CURRENTY;?></td>
							<td><?php echo $row->CURRENTB;?></td>
							<td><?php echo $row->VOLTR;?></td>
							<td><?php echo $row->VOLTY;?></td>
							<td><?php echo $row->VOLTB;?></td>
							<td><?php echo $row->LOW_VOLTR;?></td>
							<td><?php echo $row->LOW_VOLTY;?></td>
							<td><?php echo $row->LOW_VOLTB;?></td>
							<td><?php echo $row->HIGH_VOLTR;?></td>
							<td><?php echo $row->HIGH_VOLTY;?></td>
							<td><?php echo $row->HIGH_VOLTB;?></td>
							<td><?php echo $row->PFR;?></td>
							<td><?php echo $row->PFY;?></td>
							<td><?php echo $row->PFB;?></td>
							<td><?php echo $row->HCR;?></td>
							<td><?php echo $row->HCY;?></td>
							<td><?php echo $row->HCB;?></td>
							<td><?php echo $row->LCR;?></td>
							<td><?php echo $row->LCY;?></td>
							<td><?php echo $row->LCB;?></td>
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
								<a href="EntityMultiphase_statusDelete.php?ID=<?php echo $row->ID;?>" class="w3-btn w3-red w3-small w3-round">Delete</a>
								<a href="EntityMultiphase_statusEdit.php?ID=<?php echo $row->ID;?>" class="w3-btn w3-green w3-small w3-round">Edit</a>
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
