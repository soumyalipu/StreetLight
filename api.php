<?php
if ($_GET['SL_ID']!=null) {
	require_once("EntitySl_status.php");
	require_once("ModelSl_status.php");
	require_once("connection.php");
	global $dbc;
	$sl_status = new EntitySl_status();
	$sl_statusModel = new ModelSl_status($dbc);
	$sl_status->ID = nulll;
	$sl_status->SL_ID = $_GET["SL_ID"];
	$sl_status->Internetconnected = $_GET["Internetconnected"];
	if($sl_statusModel -> InsertSl_statusTESTAPI($sl_status))
		{
			 echo '<script>alert("Sl_status created successfully...");</script>';
		}
		else
		{
			 echo '<script>alert("Unable to create Sl_status ...");</script>';
		}


}



?>