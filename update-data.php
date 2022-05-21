<?php
	require_once("EntityStreetlight.php");
	require_once("ModelStreetlight.php");
	require_once("EntitySinglephase.php");
	require_once("ModelSinglephase.php");
	require_once("EntitySinglephase_status.php");
	require_once("ModelSinglephase_status.php");
	require_once("EntityMultiphase.php");
	require_once("ModelMultiphase.php");
	require_once("EntityMultiphase_status.php");
	require_once("ModelMultiphase_status.php");
	require_once("connection.php");
	global $dbc;
	$Streetlight = new EntityStreetlight();
	$StreetlightModel = new ModelStreetlight($dbc);
	$singlephase = new EntitySinglephase();
	$singlephaseModel = new ModelSinglephase($dbc);
	$multiphase = new EntityMultiphase();
	$multiphaseModel = new ModelMultiphase($dbc);
	$singlephase_status = new EntitySinglephase_status();
	$singlephase_statusModel = new ModelSinglephase_status($dbc);
	$multiphase_status = new EntityMultiphase_status();
	$multiphase_statusModel = new ModelMultiphase_status($dbc);

	$Sl_ID=$_POST['Target'];
	//Get Phase of streetlightid//......................................................
	$slphase=$StreetlightModel->GetStreetlightBySl_id($Sl_ID)[0];
	if ($slphase->PHASE==1) {
		$singlephase->HIGH_VOLT=$_POST['value'];
		$singlephase->LOW_VOLT=$_POST['value'];
		$singlephase->HC=$_POST['value'];
		$singlephase->LC=$_POST['value'];
		$singlephase->SL_ID=$Sl_ID;
		$singlephase->SMODE=$_POST['value'];
		$singlephase->MMODE=$_POST['value'];
		$singlephase->Device_Status=$_POST['value'];
		// High Volt..................................................................
		if ($_POST['KeyS']=="HIGH_VOLT") {
			if ($singlephaseModel->updateSiglephasehighvolt($singlephase)) {
				echo "12";
			}
		}
		// Low Volt..................................................................
		if ($_POST['KeyS']=="LOW_VOLT") {
			if ($singlephaseModel->updateSiglephaselowvolt($singlephase)) {
				echo "11";
			}
		}
		if ($_POST['KeyS']=="HC") {
			if ($singlephaseModel->updateSiglephasehC($singlephase)) {
				echo "12";
			}
		}
		// Low Volt..................................................................
		if ($_POST['KeyS']=="LC") {
			if ($singlephaseModel->updateSiglephaselC($singlephase)) {
				echo "11";
			}
		}
		if ($_POST['KeyS']=="SMODE") {
			if($singlephaseModel -> UpdateSlSMODE($singlephase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="MMODE") {
			if($singlephaseModel -> UpdateSlMMODE($singlephase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}



	}
	if ($slphase->PHASE==3) {
		
		$multiphase->LOW_VOLTR = $_POST['value'];
		$multiphase->LOW_VOLTY = $_POST['value'];
		$multiphase->LOW_VOLTB = $_POST['value'];
		$multiphase->HIGH_VOLTR = $_POST['value'];
		$multiphase->HIGH_VOLTY = $_POST['value'];
		$multiphase->HIGH_VOLTB = $_POST['value'];
		$multiphase->HCR = $_POST['value'];
		$multiphase->HCY = $_POST['value'];
		$multiphase->HCB = $_POST['value'];
		$multiphase->LCR = $_POST['value'];
		$multiphase->LCY = $_POST['value'];
		$multiphase->LCB = $_POST['value'];
		$multiphase->SMODE = $_POST['value'];
		$multiphase->MMODE = $_POST['value'];
		$multiphase->Device_Status = $_POST['value'];
		$multiphase->SL_ID=$Sl_ID;
		if ($_POST['KeyS']=="HVR") {
			if($multiphaseModel -> UpdatempHVR($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="HVY") {
			if($multiphaseModel -> UpdatempHVY($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="HVB") {
			if($multiphaseModel -> UpdatempHVB($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="LVR") {
			if($multiphaseModel -> UpdatempLVR($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="LVB") {
			if($multiphaseModel -> UpdatempLVB($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="LVY") {
			if($multiphaseModel -> UpdatempLVY($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="HCR") {
			if($multiphaseModel -> UpdatempHCR($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="HCB") {
			if($multiphaseModel -> UpdatempHCB($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="HCY") {
			if($multiphaseModel -> UpdatempHCY($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="LCR") {
			if($multiphaseModel -> UpdatempLCR($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="LCB") {
			if($multiphaseModel -> UpdatempLCB($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="LCY") {
			if($multiphaseModel -> UpdatempLCY($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="SMODE") {
			if($multiphaseModel -> UpdateSlSMODE($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}
		if ($_POST['KeyS']=="MMODE") {
			if($multiphaseModel -> UpdateSlMMODE($multiphase))
			{
				 echo $_POST['KeyS'];
				 echo $_POST['value'];
				 echo $_POST['Target'];
			}
			else
			{
				 echo '23';
			}
		}


	}
	//Multiphase
	

	
?>