<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntityAdminList");?>
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

	require_once("EntityAdmin.php");
	require_once("ModelAdmin.php");
	require_once("connection.php");
	global $dbc;
	$admin = new EntityAdmin();
	$adminModel = new ModelAdmin($dbc);

	$adminArrayList = $adminModel -> GetAllAdmin();
?>
<!-- End: Retrive Data-->

<!-- Start: List HTML-->
<div class="container">

	<h3 class="w3-padding w3-blue">Admin List<a href="EntityAdminCreate.php"><button class="w3-btn w3-green w3-right w3-small">NEW</button></a></h3>
	<div class="w3-container w3-padding w3-card-2" style="margin-top:-12px;overflow-x:scroll">
		<table class="w3-table-all display" id="example">
			<!-- Start: Table Head Details -->
			<thead>
				<tr>
					<th>Id</th>
					<th>Adminid</th>
					<th>Adminpass</th>
					<th>Adminemail</th>
					<th>Adminmobile</th>
					<th>Adminstatus</th>
					<th>OPP</th>
				<tr>
			</thead>
			<!-- End: Table Head Details -->

			<!-- Start: Table Body Details -->
			<tbody>
				<?php
				foreach($adminArrayList as $row)
				{
					?>
					<tr>
							<td><?php echo $row->ID;?></td>
							<td><?php echo $row->ADMINID;?></td>
							<td><?php echo $row->ADMINPASS;?></td>
							<td><?php echo $row->ADMINEMAIL;?></td>
							<td><?php echo $row->ADMINMOBILE;?></td>
							<td><?php echo $row->ADMINSTATUS;?></td>
							<td>
								<a href="EntityAdminDelete.php?ID=<?php echo $row->ID;?>" class="w3-btn w3-red w3-small w3-round">Delete</a>
								<a href="EntityAdminEdit.php?ID=<?php echo $row->ID;?>" class="w3-btn w3-green w3-small w3-round">Edit</a>
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
