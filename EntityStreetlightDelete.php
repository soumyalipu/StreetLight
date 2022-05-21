<?php
 
	require_once("EntityStreetlight.php");
	require_once("ModelStreetlight.php");
	require_once("connection.php");
	global $dbc;
	$streetlight = new EntityStreetlight();
	$streetlightModel = new ModelStreetlight($dbc);

// 	$streetlight = $streetlightModel -> GetStreetlightById($_GET["ID"])[0];
	$id=$_GET["ID"];
	$Phase=$_GET['Phase'];
	if($streetlightModel -> DeleteStreetlightBySl_id($id))
	{
		echo '<script>alert("Streetlight record deleted successfully.");</script>';
	}
	else
	{
		echo '<script>alert("Unable to delete Streetlight.");</script>';
	}
	
	if ($Phase=="1")
	{
	    //echo '<script>alert("Unable.");</script>';
	    require_once("EntitySinglephase.php");
    	require_once("ModelSinglephase.php");
    	require_once("connection.php");
    	global $dbc;
    	$streetlightModelsingle = new ModelSinglephase($dbc);
    	if($streetlightModelsingle -> DeleteSinglephaseBySl_id($id))
    	{
    		echo '<script>alert("Streetlight record deleted successfully.");window.location="viewstreetlight.php";</script>';
    	}
    	else
    	{
    		echo '<script>alert("Unable to delete Streetlight.");window.location="viewstreetlight.php";</script>';
    	}
	}
	else
	{
	    require_once("EntityMultiphase.php");
    	require_once("ModelMultiphase.php");
    	require_once("connection.php");
    	global $dbc;
    	$streetlightModelsingle = new ModelMultiphase($dbc);
    	if($streetlightModelsingle -> DeleteMultiphaseBySl_id($id))
    	{
    		echo '<script>alert("Streetlight record deleted successfully.");window.location="viewstreetlight.php";</script>';
    	}
    	else
    	{
    		echo '<script>alert("Unable to delete Streetlight.");window.location="viewstreetlight.php";</script>';
    	}
	}
?>
<!-- End: Retrive Data-->


