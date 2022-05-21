<?php
ob_start();
   	require_once("EntityAdmin.php");
	require_once("ModelAdmin.php");
	require_once("connection.php");
	global $dbc;
	$admin = new EntityAdmin();
	$adminModel = new ModelAdmin($dbc);
	$userdat=$_GET['email'];
	if($adminModel -> ApproveAdminstatus($userdat))
		{
			 echo '<script>alert("Your Admin Is Verified..");window.location="approveadmin.php";</script>';
		}
		else
		{
			 echo '<script>alert("Unable to verify");window.location="approveadmin.php";</script>';
		}
?>