<?php
ob_start();
    include("connection.php");
  include("function.php");
  if(!isset($_SESSION['user']))
{
    header("Location:login.php");
}

if(isset($_POST["updatephone"]))
	{
		require_once("EntityStreetlight.php");
		require_once("ModelStreetlight.php");
		require_once("EntitySinglephase.php");
		require_once("ModelSinglephase.php");
		require_once("EntityMultiphase.php");
		require_once("ModelMultiphase.php");
		require_once("connection.php");
		global $dbc;
		$streetlight = new EntityStreetlight();
		$streetlightModel = new ModelStreetlight($dbc);
		$singlephase = new EntitySinglephase();
		$singlephaseModel = new ModelSinglephase($dbc);
		$multiphase = new EntityMultiphase();
		$multiphaseModel = new ModelMultiphase($dbc);
		$id=$_POST['SL_ID'];
		$slphase=$streetlightModel->GetStreetlightBySl_id($id)[0];
		if ($slphase->PHASE==1) {
			
			
			//End Of Streetlight.....................................
			//Start For SinglePhase......................................
			$singlephase->SL_ID=$id;
			$singlephase->PHONE=$_POST['PHONE'];
			
			//End For SinglePhase......................................
			
			
			if ($singlephaseModel->AdminUpdatePH($singlephase)) {
				if ($_SESSION['usertype']=="Admin") {
					echo '<script>alert("Mobile Number Updated Successfully...");window.location="adminllupdate.php";</script>';
				}
				elseif ($_SESSION['usertype']=="Sadmin") {
					echo '<script>alert("Mobile Number Updated Successfully...");window.location="viewstreetlightdetail.php?SL_ID='.$id.'&&Phase=1";</script>';
				}
			}

		}
		elseif ($slphase->PHASE==3) {
			
			//Start For SinglePhase......................................
			$multiphase->SL_ID=$id;
			$multiphase->PHONE=$_POST['PHONE'];
		
			//End For SinglePhase......................................
			if ($multiphaseModel->AdminUpdatePH($multiphase)) {
				if ($_SESSION['usertype']=="Admin") {
					echo '<script>alert("Phone Number Updated Successfully...");window.location="adminllupdate.php";</script>';
				}
				elseif ($_SESSION['usertype']=="Sadmin") {
					echo '<script>alert("Phone Number Updated Successfully...");window.location="viewstreetlightdetail.php?SL_ID='.$id.'&&Phase=3";</script>';
				}
			}
			
		}
		

		
		// $sl_status->SL_ID = $id;
		// $sl_status->SL_PASS = "pass";
		// $sl_status->POWER = 0;
		// $sl_status->CURRENT = 0;
		// $sl_status->VOLT = 0;
		// $sl_status->LOW_VOLT = 0;
		// $sl_status->HIGH_VOLT = 0;
		// $sl_status->D1 = 0;
		// $sl_status->D2 = 0;
		// $sl_status->D3 = 0;
		// $sl_status->D4 = 0;
		// $sl_status->ADC1 = 0;
		// $sl_status->ADC2 = 0;
		// $sl_status->ADC3 = 0;
		// $sl_status->ADC4 = 0;
		// $sl_status->LONGITUDE = $_POST['longitude'];
		// $sl_status->LATITUDE = $_POST['latitude'];
		// date_default_timezone_set('Asia/Kolkata');
		// $sl_status->DATE = date("Y-m-d");
		// $sl_status->TIME = date("h:i:sa");
		// $sl_status->Internetconnected = 0;
		// $sl_status->Area = $_POST['selectarea'];
		// $sl_status->Device_Status = 0;

		if($slModel -> AdminUpdateSl($sl))
		{
			if ($_SESSION['usertype']=="Admin") {
				echo '<script>alert("Sl Updated Successfully...");window.location="adminllupdate.php";</script>';
			}
			elseif ($_SESSION['usertype']=="Sadmin") {
				echo '<script>alert("Sl Updated Successfully...");window.location="viewstreetlightdetail.php?SL_ID='.$id.'&&Phase='.$_GET['Phase'].'";</script>';
			}
			
			// if ($sl_statusModel -> InsertSl_status($sl_status)) {
			// 	echo '<script>alert("Sl Updated Successfully...");window.location="adminllupdate.php";</script>';
			// }
			 
		}
		else
		{
			 echo '<script>alert("Unable to update Sl ...");window.location="adminllupdate.php";</script>';
		}
	}
?>