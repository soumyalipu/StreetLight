<?php

	require_once("EntityArea.php");
	require_once("ModelArea.php");
	require_once("connection.php");
	global $dbc;
	$area = new EntityArea();
	$areaModel = new ModelArea($dbc);
	if($areaModel -> DeleteAreaById($_GET["ID"]))
	{
		echo '<script>alert("Area record deleted successfully.");window.location="addarea.php";</script>';
	}
	else
	{
		echo '<script>alert("Unable to delete Area.");window.location="addarea.php";</script>';
	}
	
?>
