<?php
//Check Phase//
	

if (isset($_GET['id'])&&isset($_GET['type'])) {///check if there is dat ain api
	require_once("EntityStreetlight.php");
	require_once("ModelStreetlight.php");
	require_once("connection.php");
	include('smtp/PHPMailerAutoload.php');
	global $dbc;
	$streetlight = new EntityStreetlight();
	$streetlightModel = new ModelStreetlight($dbc);
	$streetlight = $streetlightModel -> GetStreetlightBySl_id($_GET["id"])[0];
	$Phase=$streetlight->PHASE;
	//////for 1 phase ................................................................................
	if ($Phase==1) {
		require_once("EntitySinglephase.php");
		require_once("ModelSinglephase.php");
		require_once("EntitySinglephase_status.php");
		require_once("ModelSinglephase_status.php");
		require_once("connection.php");
		global $dbc;
		$singlephase = new EntitySinglephase();
		$singlephaseModel = new ModelSinglephase($dbc);
		$singlephase_status = new EntitySinglephase_status();
		$singlephase_statusModel = new ModelSinglephase_status($dbc);
		///check for internet connection..............................................................
		if ($_GET['type']=="ic") {
			//http://localhost/Street/streetlight.techforfun.in/gpdata.php?id=1004&&type=ic&&ico=1
			$singlephase->SL_ID = $_GET['id'];
		 	$singlephase->Internetconnected = $_GET['ico'];
		 	if($singlephaseModel -> UpdateSinglephaseic($singlephase))
			{
				$sphasephone=$singlephaseModel->GetSinglephaseBySl_id($_GET['id'])[0];

				 echo "#".'11'."#".$sphasephone->PHONE."#";
			}
			else
			{
				 echo '10';
			}
		}
		//END IC........................................................................................
		////check data and update and insert to singlephase DB 
		if ($_GET['type']=="data") {
			//http://localhost/Street/streetlight.techforfun.in/gpdata.php?id=1004&&type=data&&POWER=12&&CURRENT=0.5&&VOLT=230&&PF=.12&&ENERGY=100&&FREQUENCY=50


			//Get data from URL id,POWER,CURRENT,VOLT,PF,ENERGY,FREQUENCY
			$singlephase->SL_ID = $_GET['id'];
			$singlephase->POWER = $_GET["POWER"]*1000;
			$singlephase->CURRENT = $_GET["CURRENT"];
			$singlephase->VOLT = $_GET["VOLT"];
			$singlephase->PF = $_GET["PF"];
			$singlephase->ENERGY = $_GET["ENERGY"];
			$singlephase->FREQUENCY = $_GET["FREQUENCY"];

			//Get data from single phase DB LATTITUDE,LONGITUDE,Device status,SMODE,MMODE....................
			$sphase=$singlephaseModel->GetSinglephaseBySl_id($_GET['id'])[0];
			$LONGITUDE=$sphase->LONGITUDE;
			$LATITUDE=$sphase->LATITUDE;
			$ds=$sphase->Device_Status;
			date_default_timezone_set('Asia/Kolkata'); //set time zone
			$sun_info = date_sun_info(strtotime(date("Y-m-d")), $LATITUDE, $LONGITUDE);//get Astronomical Data
			$MTIME=date("H:i",$sun_info["sunrise"]);
			$ETIME=date("H:i",$sun_info["sunset"]);
			$CurrentTime=date("H:i");

			$singlephase->A_M_TIME = $MTIME;
			$singlephase->A_E_TIME = $ETIME;
			$singlephase->DATE = date("Y-m-d");
			$singlephase->TIME = date("H:i");
			$singlephase->Device_Status = $sphase->Device_Status;
			$singlephase->SMODE = $sphase->SMODE;
			$singlephase->MMODE = $sphase->MMODE;

			///////Single phase status Insert...................................................................
			$singlephase_status->ID = null;
			$singlephase_status->SL_ID = $_GET['id'];
			$singlephase_status->POWER = $_GET["POWER"]*1000;
			$singlephase_status->CURRENT = $_GET["CURRENT"];
			$singlephase_status->VOLT = $_GET["VOLT"];
			$singlephase_status->LOW_VOLT = $sphase->LOW_VOLT;
			$singlephase_status->HIGH_VOLT = $sphase->HIGH_VOLT;
			$singlephase_status->PF = $_GET["PF"];
			$singlephase_status->HC = $sphase->HC;
			$singlephase_status->LC = $sphase->LC;
			$singlephase_status->A_M_TIME = $MTIME;
			$singlephase_status->A_E_TIME = $ETIME;
			$singlephase_status->LONGITUDE = $sphase->LONGITUDE;
			$singlephase_status->LATITUDE = $sphase->LATITUDE;
			$singlephase_status->DATE = date("Y-m-d");
			$singlephase_status->TIME = date("h:i:s");
			$singlephase_status->Internetconnected = 1;
			$singlephase_status->Area = $sphase->Area;
			$singlephase_status->FREQUENCY = $_GET["FREQUENCY"];
			$singlephase_status->SMODE = $sphase->SMODE;
			$singlephase_status->MMODE = $sphase->MMODE;
			$singlephase_status->R_WATT = $sphase->R_WATT;
			$singlephase_status->ENERGY = $_GET["ENERGY"];
			$singlephase_status->PHONE = $sphase->PHONE;
			//........................................................................................................
			//For Fault .............................................................................................

			$HIGH_VOLT=$sphase->HIGH_VOLT;
			$LOW_VOLT=$sphase->LOW_VOLT;
			$HC=$sphase->HC;
			$LC=$sphase->LC;
			$R_WATT=$sphase->R_WATT;
			$POWER=$_GET["POWER"]*1000;
			$VOLT=$_GET["VOLT"];
			$CURRENT=$_GET["CURRENT"];
			$FAULT=$sphase->FAULT;
			$H_Rwatt=$R_WATT+50;
			$L_Rwatt=$R_WATT-50;
			if (($VOLT>$LOW_VOLT && $VOLT<$HIGH_VOLT) && ($CURRENT > $LC && $CURRENT< $HC)) {
                 //&& ($POWER<$H_Rwatt && $POWER>$L_Rwatt)
				$singlephase->FAULT=0;
				$singlephase_status->FAULT=0;
			}
			if($ds==0){
			    if($VOLT<$LOW_VOLT ){
    				
    				$singlephaseModel->smtp_mailer('mossundar@gmail.com','Low Volt', 'Device Fault In '.$_GET["id"]);
			    }
			    if($VOLT>$HIGH_VOLT ){
    				
    				$singlephaseModel->smtp_mailer('mossundar@gmail.com','High Volt ', 'Device Fault In '.$_GET["id"]);
			    }
			    
			    $singlephase->FAULT=1;
    			$singlephase_status->FAULT=1;
			}
			if($ds==1){
			    if($CURRENT < $LC){
    				
    				$singlephaseModel->smtp_mailer('mossundar@gmail.com','Low Current', 'Device Fault In '.$_GET["id"]);
			    }
			    if($CURRENT > $HC ){
    				
    				$singlephaseModel->smtp_mailer('mossundar@gmail.com','High Current ', 'Device Fault In '.$_GET["id"]);
			    }
			    $singlephase->FAULT=1;
    			$singlephase_status->FAULT=1;
			}


			//End Fault...............................................................................................
			if($singlephase->SMODE==1){ //Mannual Mode
				if($singlephase->MMODE==1){ //Manual mode ON
					$singlephase->Device_Status=1;
					if($singlephaseModel -> UpdateSinglephasedata($singlephase))
					{
						$singlephase_status->Device_Status = 1;
						if($singlephase_statusModel -> InsertSinglephase_status($singlephase_status))
						{
							echo "#".'21'."#".$singlephase->FAULT."#";
						}
						else
						{
							 echo "#".'20';
						}
						 
					}
					else
					{
						 echo "#".'10';
					}
				}
				elseif($singlephase->MMODE==0){ //Manual Mode OFF

					$singlephase->Device_Status=0;
					if($singlephaseModel -> UpdateSinglephasedata($singlephase))
					{
						$singlephase_status->Device_Status = 0;
						if($singlephase_statusModel -> InsertSinglephase_status($singlephase_status))
						{
							 echo "#".'22'."#".$singlephase->FAULT."#";
						}
						else
						{
							 echo "#".'20';
						}
					}
					else
					{
						 echo "#".'10';
					}
				}
					
			}
			elseif($singlephase->SMODE==0){ //Auto Mode
				
					if($CurrentTime>$MTIME && $CurrentTime < $ETIME){ //For Morning data
						$singlephase->Device_Status=0;
						if($singlephaseModel -> UpdateSinglephasedata($singlephase))
						{
							$singlephase_status->Device_Status = 0;
							if($singlephase_statusModel -> InsertSinglephase_status($singlephase_status))
							{
								 echo "#".'22'."#".$singlephase->FAULT."#";
							}
							else
							{
								 echo "#".'20';
							}
							 
						}
						else
						{
							 echo "#".'10';
						}
					}
					
						
				
				
					if($CurrentTime>$ETIME || $CurrentTime<$MTIME){//for evening Data
						$singlephase->Device_Status=1;
						if($singlephaseModel -> UpdateSinglephasedata($singlephase))
						{
							$singlephase_status->Device_Status = 1;
							if($singlephase_statusModel -> InsertSinglephase_status($singlephase_status))
							{
								 echo "#".'21'."#".$singlephase->FAULT."#";
							}
							else
							{
								echo "#".'20';
							}
							 
						}
						else
						{
							 echo "#".'10';
						}
					}		
				
			}
		}
		///End Data........................................................................................


		//For Fault..........................................................................................
		// if ($_GET['type']=="fault") {
		// 	//http://localhost/Street/streetlight.techforfun.in/gpdata.php?id=1004&&type=fault
		// 	$sfault=$singlephaseModel->GetSinglephaseBySl_id($_GET['id'])[0];
		// 	$HIGH_VOLT=$sfault->HIGH_VOLT;
		// 	$LOW_VOLT=$sfault->LOW_VOLT;
		// 	$HC=$sfault->HC;
		// 	$LC=$sfault->LC;
		// 	$R_WATT=$sfault->R_WATT;
		// 	$POWER=$sfault->POWER;
		// 	$VOLT=$sfault->VOLT;
		// 	$CURRENT=$sfault->CURRENT;
		// 	$FAULT=$sfault->FAULT;
		// 	$H_Rwatt=$R_WATT+50;
		// 	$L_Rwatt=$R_WATT-50;
		// 	if (($VOLT>$LOW_VOLT && $VOLT<$HIGH_VOLT) && ($CURRENT > $LC && $CURRENT< $HC) && ($POWER<$H_Rwatt && $POWER>$L_Rwatt)) {

		// 		$FaultStatus=0;
		// 	}
		// 	else{
		// 		$FaultStatus=1;
		// 	}	
		// }
		//end Fault...........................................................................................
	}
	//end Single Phase........................................................................................


	//For 3Phase..............................................................................................
	elseif($Phase==3){
		require_once("EntityMultiphase.php");
		require_once("ModelMultiphase.php");
		require_once("EntityMultiphase_status.php");
		require_once("ModelMultiphase_status.php");
		require_once("connection.php");
		global $dbc;
		$multiphase = new EntityMultiphase();
		$multiphaseModel = new ModelMultiphase($dbc);
		$multiphase_status = new EntityMultiphase_status();
		$multiphase_statusModel = new ModelMultiphase_status($dbc);
		if ($_GET['type']=="ic") {
			//http://localhost/Street/streetlight.techforfun.in/gpdata.php?id=1007&&type=ic&&ico=1
			$multiphase->SL_ID = $_GET['id'];
			$multiphase->Internetconnected = $_GET['ico'];
		 	if($multiphaseModel -> UpdateMultiphaseeic($multiphase))
			{
				$mphasephone=$multiphaseModel->GetMultiphaseBySl_id($_GET['id'])[0];

				 echo "#".'41'."#".$mphasephone->PHONE."#";
			}
			else
			{
				 echo "#".'40';
			}		 
		}
		// End Of ICheck...................................................................................
		// Start Of 3Phase Data............................................................................
		if ($_GET['type']=="data") {
			//Get Data from URL..........................................................................
			//http://localhost/Street/streetlight.techforfun.in/gpdata.php?id=1007&&type=data&&POWERR=12&&POWERY=33&&POWERB=53&&CURRENTR=0.5&&CURRENTY=0.5&&CURRENTB=0.5&&VOLTR=230&&VOLTY=230&&VOLTB=230&&PFR=.12&&PFY=.12&&PFB=.12&&ENERGY=100&&FREQUENCY=50
			$multiphase->SL_ID = $_GET["id"];
			$multiphase->POWERR = $_GET["POWERR"]*1000;
			$multiphase->POWERY = $_GET["POWERY"]*1000;
			$multiphase->POWERB = $_GET["POWERB"]*1000;
			$multiphase->CURRENTR = $_GET["CURRENTR"];
			$multiphase->CURRENTY = $_GET["CURRENTY"];
			$multiphase->CURRENTB = $_GET["CURRENTB"];
			$multiphase->VOLTR = $_GET["VOLTR"];
			$multiphase->VOLTY = $_GET["VOLTY"];
			$multiphase->VOLTB = $_GET["VOLTB"];
			$multiphase->PFR = $_GET["PFR"];
			$multiphase->PFY = $_GET["PFY"];
			$multiphase->PFB = $_GET["PFB"];
			$multiphase->ENERGY = $_GET["ENERGY"];
			$multiphase->FREQUENCY = $_GET["FREQUENCY"];
			//End Of Get Data from URL..........................................................................

			$mphase=$multiphaseModel->GetMultiphaseBySl_id($_GET['id'])[0];
			$LONGITUDE=$mphase->LONGITUDE;
			$LATITUDE=$mphase->LATITUDE;
			$ds=$mphase->Device_Status;
			date_default_timezone_set('Asia/Kolkata'); //set time zone
			$sun_info = date_sun_info(strtotime(date("Y-m-d")), $LATITUDE, $LONGITUDE);//get Astronomical Data
			$MTIME=date("H:i",$sun_info["sunrise"]);
			$ETIME=date("H:i",$sun_info["sunset"]);
			$CurrentTime=date("H:i");


			$multiphase->A_M_TIME = $MTIME;
			$multiphase->A_E_TIME = $ETIME;
			$multiphase->DATE = date("Y-m-d");
			$multiphase->TIME = date("h:i:s");
			$multiphase->Device_Status = $mphase->Device_Status;
			$multiphase->SMODE = $mphase->SMODE;
			$multiphase->MMODE = $mphase->MMODE;
			$multiphase->FAULT = $mphase->FAULT;
			$multiphase->R_WATT = $mphase->R_WATT;

			//Insert Into Multiphase..........................................................................
			$multiphase_status->ID = null;
			$multiphase_status->SL_ID = $_GET["id"];
			$multiphase_status->POWERR = $_GET["POWERR"]*1000;
			$multiphase_status->POWERY = $_GET["POWERY"]*1000;
			$multiphase_status->POWERB = $_GET["POWERB"]*1000;
			$multiphase_status->CURRENTR = $_GET["CURRENTR"];
			$multiphase_status->CURRENTY = $_GET["CURRENTY"];
			$multiphase_status->CURRENTB = $_GET["CURRENTB"];
			$multiphase_status->VOLTR = $_GET["VOLTR"];
			$multiphase_status->VOLTY = $_GET["VOLTY"];
			$multiphase_status->VOLTB = $_GET["VOLTB"];
			$multiphase_status->LOW_VOLTR = $mphase->LOW_VOLTR;
			$multiphase_status->LOW_VOLTY = $mphase->LOW_VOLTY;
			$multiphase_status->LOW_VOLTB = $mphase->LOW_VOLTB;
			$multiphase_status->HIGH_VOLTR = $mphase->HIGH_VOLTR;
			$multiphase_status->HIGH_VOLTY = $mphase->HIGH_VOLTY;
			$multiphase_status->HIGH_VOLTB = $mphase->HIGH_VOLTB;
			$multiphase_status->PFR = $_GET["PFR"];
			$multiphase_status->PFY = $_GET["PFY"];
			$multiphase_status->PFB = $_GET["PFB"];
			$multiphase_status->HCR = $mphase->HCR;
			$multiphase_status->HCY = $mphase->HCY;
			$multiphase_status->HCB = $mphase->HCB;
			$multiphase_status->LCR = $mphase->LCR;
			$multiphase_status->LCY = $mphase->LCY;
			$multiphase_status->LCB = $mphase->LCB;
			$multiphase_status->A_M_TIME = $MTIME;
			$multiphase_status->A_E_TIME = $ETIME;
			$multiphase_status->LONGITUDE = $mphase->LONGITUDE;
			$multiphase_status->LATITUDE = $mphase->LATITUDE;
			$multiphase_status->DATE = date("Y-m-d");
			$multiphase_status->TIME = date("h:i:s");
			$multiphase_status->Internetconnected = 1;
			$multiphase_status->Area = $mphase->Area;
			$multiphase_status->FREQUENCY = $_GET["FREQUENCY"];
			$multiphase_status->SMODE = $mphase->SMODE;
			$multiphase_status->MMODE = $mphase->MMODE;
			$multiphase_status->R_WATT = $mphase->R_WATT;
			$multiphase_status->ENERGY = $_GET["ENERGY"];
			$multiphase_status->PHONE = $mphase->PHONE;

			//For Fault .............................................................................................

			$HIGH_VOLTR=$mphase->HIGH_VOLTR;
			$HIGH_VOLTY=$mphase->HIGH_VOLTY;
			$HIGH_VOLTB=$mphase->HIGH_VOLTB;
			$LOW_VOLTR=$mphase->LOW_VOLTR;
			$LOW_VOLTY=$mphase->LOW_VOLTY;
			$LOW_VOLTB=$mphase->LOW_VOLTB;
			$HCR=$mphase->HCR;
			$LCR=$mphase->LCR;
			$HCY=$mphase->HCY;
			$LCY=$mphase->LCY;
			$HCB=$mphase->HCB;
			$LCB=$mphase->LCB;
			$R_WATT=$mphase->R_WATT;
			$POWERR=$_GET["POWERR"]*1000;
			$POWERY=$_GET["POWERY"]*1000;
			$POWERB=$_GET["POWERB"]*1000;
			$VOLTR=$_GET["VOLTR"];
			$VOLTY=$_GET["VOLTY"];
			$VOLTB=$_GET["VOLTB"];
			$CURRENTR=$_GET["CURRENTR"];
			$CURRENTY=$_GET["CURRENTY"];
			$CURRENTB=$_GET["CURRENTB"];
			$FAULT=$mphase->FAULT;
			$H_Rwatt=$R_WATT+50;
			$L_Rwatt=$R_WATT-50;
			$POWER=$POWERR+$POWERB+$POWERY;
			if (( $VOLTR < $HIGH_VOLTR && $VOLTR > $LOW_VOLTR) & ( $VOLTY < $HIGH_VOLTY && $VOLTY > $LOW_VOLTY) && ( $VOLTB < $HIGH_VOLTB && $VOLTB > $LOW_VOLTB) && ($CURRENTR<$HCR && $CURRENTR>$LCR) && ($CURRENTY<$HCY && $CURRENTY>$LCY) && ($CURRENTB<$HCB && $CURRENTB>$LCB) ) {
                //&& ($POWER<$H_Rwatt && $POWER>$L_Rwatt)
				$multiphase->FAULT=0;
				$multiphase_status->FAULT=0;
			}
			if($ds==0){
			    if($VOLTR > $HIGH_VOLTR){
			        $multiphaseModel->smtp_mailer('mossundar@gmail.com','High Volt in R phase', 'Device Fault In '.$_GET["id"]);
			    }
			    if($VOLTR < $LOW_VOLTR){
			        $multiphaseModel->smtp_mailer('mossundar@gmail.com','Low Volt in R phase', 'Device Fault In '.$_GET["id"]);
			    }
			    if($VOLTY > $HIGH_VOLTY){
			        $multiphaseModel->smtp_mailer('mossundar@gmail.com','High Volt in Y phase', 'Device Fault In '.$_GET["id"]);
			    }
			    if($VOLTY < $LOW_VOLTY){
			        $multiphaseModel->smtp_mailer('mossundar@gmail.com','Low Volt in Y phase', 'Device Fault In '.$_GET["id"]);
			    }
			    if($VOLTB > $HIGH_VOLTB){
			        $multiphaseModel->smtp_mailer('mossundar@gmail.com','High Volt in B phase', 'Device Fault In '.$_GET["id"]);
			    }
			    if($VOLTB < $LOW_VOLTB){
			        $multiphaseModel->smtp_mailer('mossundar@gmail.com','Low Volt in B phase', 'Device Fault In '.$_GET["id"]);
			    }
				$multiphase->FAULT=1;
				$multiphase_status->FAULT=1;
				
			}	
			if($ds==1){
			    if($CURRENTR>$HCR){
			        $multiphaseModel->smtp_mailer('mossundar@gmail.com','High Current in R phase', 'Device Fault In '.$_GET["id"]);
			    }
			    if($CURRENTR<$LCR){
			        $multiphaseModel->smtp_mailer('mossundar@gmail.com','Low Current in R phase', 'Device Fault In '.$_GET["id"]);
			    }
			    if($CURRENTB>$HCB){
			        $multiphaseModel->smtp_mailer('mossundar@gmail.com','High Current in B phase', 'Device Fault In '.$_GET["id"]);
			    }
			    if($CURRENTB<$LCB){
			        $multiphaseModel->smtp_mailer('mossundar@gmail.com','Low Current in B phase', 'Device Fault In '.$_GET["id"]);
			    }
			    if($CURRENTY>$HCY){
			        $multiphaseModel->smtp_mailer('mossundar@gmail.com','High Current in Y phase', 'Device Fault In '.$_GET["id"]);
			    }
			    if($CURRENTY<$LCY){
			        $multiphaseModel->smtp_mailer('mossundar@gmail.com','Low Current in Y phase', 'Device Fault In '.$_GET["id"]);
			    }
			    $multiphase->FAULT=1;
				$multiphase_status->FAULT=1;
			}

			if($multiphase->SMODE==1){ //Mannual Mode
				if($multiphase->MMODE==1){ //Manual mode ON
					$multiphase->Device_Status=1;
					if($multiphaseModel -> UpdateMultiphasedata($multiphase))
					{
						$multiphase_status->Device_Status = 1;
						if($multiphase_statusModel -> InsertMultiphase_status($multiphase_status))
						{
							echo "#".'31'."#".$multiphase->FAULT;
						}
						else
						{
							 echo "#".'30';
						}
						 
					}
					else
					{
						 echo "#".'40';
					}
				}
				elseif($multiphase->MMODE==0){ //Manual Mode OFF

					$multiphase->Device_Status=0;
					if($multiphaseModel -> UpdateMultiphasedata($multiphase))
					{
						$multiphase_status->Device_Status = 0;
						if($multiphase_statusModel -> InsertMultiphase_status($multiphase_status))
						{
							 echo "#".'32'."#".$multiphase->FAULT;
						}
						else
						{
							 echo "#".'30';
						}
						 
					}
					else
					{
						 echo "#".'40';
					}
				}
					
			}
			elseif($multiphase->SMODE==0){ //Auto Mode
			
					if($CurrentTime>$MTIME && $CurrentTime < $ETIME){ //For Morning data
						$multiphase->Device_Status=0;
						if($multiphaseModel -> UpdateMultiphasedata($multiphase))
						{
							$multiphase_status->Device_Status = 0;
							if($multiphase_statusModel -> InsertMultiphase_status($multiphase_status))
							{
								 echo "#".'32'."#".$multiphase->FAULT;
							}
							else
							{
								 echo "#".'30';
							}
							 
						}
						else
						{
							 echo "#".'40';
						}
					}
					
						
			
					if($CurrentTime>$ETIME || $CurrentTime<$MTIME){//for evening Data
						$multiphase->Device_Status=1;
						if($multiphaseModel -> UpdateMultiphasedata($multiphase))
						{
							$multiphase_status->Device_Status = 1;
							if($multiphase_statusModel -> InsertMultiphase_status($multiphase_status))
							{
								 echo "#".'31'."#".$multiphase->FAULT;
							}
							else
							{
								echo "#".'30';
							}
							 
						}
						else
						{
							 echo "#".'40';
						}
					}		
				
			}
		}
	}
}
	



?>