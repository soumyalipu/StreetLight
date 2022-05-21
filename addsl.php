<?php
	if(isset($_POST["addsl"]))
	{
		require_once("EntityArea.php");
		require_once("ModelArea.php");
		require_once("EntityStreetlight.php");
		require_once("ModelStreetlight.php");
		require_once("connection.php");
		global $dbc;
		$StreetlightModel = new ModelStreetlight($dbc);
		$StreetlightArrayList = $StreetlightModel -> GetLastSl();
		$streetlight = new EntityStreetlight();
		$area = new EntityArea();
		$areaModel = new ModelArea($dbc);
		if ($StreetlightArrayList!=null) {
			foreach($StreetlightArrayList as $row)
				{
					$id=$row->SL_ID+1;
				}
		}
		else{
			$id=1000;
		}
		

		$areaArrayList = $areaModel -> GetAreaById($_POST['area_name']);
		foreach($areaArrayList as $row1)
				{
					$long=$row1->Longitude;
					$lat=$row1->Latitude;
					$area=$row1->area_name;
				}
		
//Streetlight//
		$streetlight->ID = null;
		$streetlight->SL_ID = $id;
		$streetlight->PHASE = $_POST['Phase'];
		$streetlight->R_WATT = $_POST["WATT"];
		$streetlight->Area = $area;
		$streetlight->LONGITUDE = $long;
		$streetlight->LATITUDE = $lat;
//singlephase//


		require_once("EntitySinglephase.php");
		require_once("ModelSinglephase.php");
		$singlephase = new EntitySinglephase();
		$singlephaseModel = new ModelSinglephase($dbc);

		$singlephase->ID = null;
		$singlephase->SL_ID = $id;
		$singlephase->LONGITUDE = $long;
		$singlephase->LATITUDE = $lat;
		date_default_timezone_set('Asia/Kolkata');
		$singlephase->DATE = date("Y-m-d");
		$singlephase->TIME = date("h:i:sa");
		$singlephase->Area = $area;
		$singlephase->R_WATT = $_POST["WATT"];

//SinglePhase_Status//
		require_once("EntitySinglephase_status.php");
		require_once("ModelSinglephase_status.php");
		$singlephase_status = new EntitySinglephase_status();
		$singlephase_statusModel = new ModelSinglephase_status($dbc);

		$singlephase_status->ID = null;
		$singlephase_status->SL_ID = $id;
		$singlephase_status->LONGITUDE =  $long;
		$singlephase_status->LATITUDE =  $lat;
		$singlephase_status->DATE = date("Y-m-d");
		$singlephase_status->TIME = date("h:i:sa");
		$singlephase_status->Area = $area;
		$singlephase_status->R_WATT = $_POST["WATT"];
//Multiphase//
		require_once("EntityMultiphase.php");
		require_once("ModelMultiphase.php");
		$multiphase = new EntityMultiphase();
		$multiphaseModel = new ModelMultiphase($dbc);

		$multiphase->ID = null;
		$multiphase->SL_ID = $id;
		$multiphase->LONGITUDE = $long;
		$multiphase->LATITUDE = $lat;
		$multiphase->DATE = date("Y-m-d");
		$multiphase->TIME = date("h:i:sa");
		$multiphase->Area = $area;
		$multiphase->R_WATT = $_POST["WATT"];

//Multiphase_Status//

		require_once("EntityMultiphase_status.php");
		require_once("ModelMultiphase_status.php");
		$multiphase_status = new EntityMultiphase_status();
		$multiphase_statusModel = new ModelMultiphase_status($dbc);

		$multiphase_status->ID = null;
		$multiphase_status->SL_ID = $id;
		$multiphase_status->LONGITUDE = $long;
		$multiphase_status->LATITUDE = $lat;
		$multiphase_status->DATE = date("Y-m-d");
		$multiphase_status->TIME = date("h:i:sa");
		$multiphase_status->Area = $area;
		$multiphase_status->R_WATT = $_POST["WATT"];



		// $sl->ID = null;
		// $sl->SL_ID = $id;
		// $sl->SL_PASS = "pass";
		// $sl->POWER = 0;
		// $sl->CURRENT = 0;
		// $sl->VOLT = 0;
		// $sl->LOW_VOLT = 0;
		// $sl->HIGH_VOLT = 0;
		// $sl->D1 = 0;
		// $sl->D2 = 0;
		// $sl->D3 = 0;
		// $sl->D4 = 0;
		// $sl->ADC1 = 0;
		// $sl->ADC2 = 0;
		// $sl->ADC3 = 0;
		// $sl->ADC4 = 0;
		// $sl->LONGITUDE = $long;
		// $sl->LATITUDE = $lat;
		// date_default_timezone_set('Asia/Kolkata');
		// $sl->DATE = date("Y-m-d");
		// $sl->TIME = date("h:i:sa");
		// $sl->Internetconnected = 0;
		// $sl->Area = $area;
		// $sl->Device_Status = 0;
		// $sl->VOLTR = 0;
		// $sl->VOLTB = 0;
		// $sl->VOLTY = 0;
		// $sl->HVR = 0;
		// $sl->HVB = 0;
		// $sl->HBY = 0;
		// $sl->LVR = 0;
		// $sl->LVB = 0;
		// $sl->LVY = 0;
		// $sl->HCR = 0;
		// $sl->HCB = 0;
		// $sl->HCY = 0;
		// $sl->LCR = 0;
		// $sl->LCB = 0;
		// $sl->LCY = 0;
		// $sl->CY = 0;
		// $sl->CR = 0;
		// $sl->CB = 0;
		// $sl->PHASE = $_POST['Phase'];
		// $sl->SMODE = 0;
		// $sl->MMODE = 0;
		// $sl->FAULT = 0;
		// $sl->WATT = $_POST[''];

		if($StreetlightModel -> InsertStreetlight($streetlight))
		{
			if($_POST['Phase']==1){
				if($singlephaseModel -> Insert1Singlephase($singlephase)){
					if($singlephase_statusModel -> Insert1Singlephase_status($singlephase_status)){
						echo '<script>alert("Sl created successfully...");window.location="viewstreetlightdetail.php?SL_ID='.$id.'&&Phase='.$streetlight->PHASE.'";</script>';
					
					}
				}
			 
			}
			elseif($_POST['Phase']==3){
				if($multiphaseModel -> Insert1Multiphase($multiphase)){
					if($multiphase_statusModel -> Insert1Multiphase_status($multiphase_status)){
						echo '<script>alert("Sl created successfully...");window.location="viewstreetlightdetail.php?SL_ID='.$id.'&&Phase='.$streetlight->PHASE.'";</script>';
					
					}
				}
			}
		}
		else
		{
			 echo '<script>alert("Unable to create Sl ...");window.location="viewstreetlight.php";</script>';
		}
	}
?>
