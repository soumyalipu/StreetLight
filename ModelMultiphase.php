
<?php
	class ModelMultiphase{
	/********************** [Start : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Multiphase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/
	function InsertMultiphase($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO multiphase (ID,SL_ID,POWERR,POWERY,POWERB,CURRENTR,CURRENTY,CURRENTB,VOLTR,VOLTY,VOLTB,LOW_VOLTR,LOW_VOLTY,LOW_VOLTB,HIGH_VOLTR,HIGH_VOLTY,HIGH_VOLTB,PFR,PFY,PFB,HCR,HCY,HCB,LCR,LCY,LCB,A_M_TIME,A_E_TIME,LONGITUDE,LATITUDE,DATE,TIME,Internetconnected,Area,Device_Status,FREQUENCY,SMODE,MMODE,FAULT,R_WATT,ENERGY,PHONE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isiiiiiiiiiiiiiiiiiiiiiiiissssssisiiiiiiii",$multiphase->ID,$multiphase->SL_ID,$multiphase->POWERR,$multiphase->POWERY,$multiphase->POWERB,$multiphase->CURRENTR,$multiphase->CURRENTY,$multiphase->CURRENTB,$multiphase->VOLTR,$multiphase->VOLTY,$multiphase->VOLTB,$multiphase->LOW_VOLTR,$multiphase->LOW_VOLTY,$multiphase->LOW_VOLTB,$multiphase->HIGH_VOLTR,$multiphase->HIGH_VOLTY,$multiphase->HIGH_VOLTB,$multiphase->PFR,$multiphase->PFY,$multiphase->PFB,$multiphase->HCR,$multiphase->HCY,$multiphase->HCB,$multiphase->LCR,$multiphase->LCY,$multiphase->LCB,$multiphase->A_M_TIME,$multiphase->A_E_TIME,$multiphase->LONGITUDE,$multiphase->LATITUDE,$multiphase->DATE,$multiphase->TIME,$multiphase->Internetconnected,$multiphase->Area,$multiphase->Device_Status,$multiphase->FREQUENCY,$multiphase->SMODE,$multiphase->MMODE,$multiphase->FAULT,$multiphase->R_WATT,$multiphase->ENERGY,$multiphase->PHONE);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			die($stmt->error);
			$stmt ->close();
			return false;
		}
	}
	function Insert1Multiphase($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO multiphase (ID,SL_ID,LONGITUDE,LATITUDE,DATE,TIME,Area,R_WATT) VALUES (?,?,?,?,?,?,?,?)");
		$stmt->bind_param("issssssi",$multiphase->ID,$multiphase->SL_ID,$multiphase->LONGITUDE,$multiphase->LATITUDE,$multiphase->DATE,$multiphase->TIME,$multiphase->Area,$multiphase->R_WATT);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			die($stmt->error);
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : Insert Multiphase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : GetAllMultiphase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/
	function GetAllMultiphase()
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByMultiphase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetMultiphaseById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/
	function GetMultiphaseById($ID)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `ID` = ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : GetMultiphaseBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetMultiphaseBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `SL_ID` = ? ");
		$stmt->bind_param("s",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByPowerr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetMultiphaseByPowerr($POWERR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `POWERR` = ? ");
		$stmt->bind_param("i",$POWERR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByPowerr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByPowery, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetMultiphaseByPowery($POWERY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `POWERY` = ? ");
		$stmt->bind_param("i",$POWERY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByPowery, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByPowerb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetMultiphaseByPowerb($POWERB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `POWERB` = ? ");
		$stmt->bind_param("i",$POWERB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByPowerb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByCurrentr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function GetMultiphaseByCurrentr($CURRENTR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `CURRENTR` = ? ");
		$stmt->bind_param("i",$CURRENTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByCurrentr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByCurrenty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function GetMultiphaseByCurrenty($CURRENTY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `CURRENTY` = ? ");
		$stmt->bind_param("i",$CURRENTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByCurrenty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByCurrentb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function GetMultiphaseByCurrentb($CURRENTB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `CURRENTB` = ? ");
		$stmt->bind_param("i",$CURRENTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByCurrentb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByVoltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetMultiphaseByVoltr($VOLTR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `VOLTR` = ? ");
		$stmt->bind_param("i",$VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByVoltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByVolty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetMultiphaseByVolty($VOLTY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `VOLTY` = ? ");
		$stmt->bind_param("i",$VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByVolty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByVoltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetMultiphaseByVoltb($VOLTB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `VOLTB` = ? ");
		$stmt->bind_param("i",$VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByVoltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByLow_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetMultiphaseByLow_voltr($LOW_VOLTR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LOW_VOLTR` = ? ");
		$stmt->bind_param("i",$LOW_VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByLow_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByLow_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetMultiphaseByLow_volty($LOW_VOLTY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LOW_VOLTY` = ? ");
		$stmt->bind_param("i",$LOW_VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByLow_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByLow_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetMultiphaseByLow_voltb($LOW_VOLTB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LOW_VOLTB` = ? ");
		$stmt->bind_param("i",$LOW_VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByLow_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByHigh_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetMultiphaseByHigh_voltr($HIGH_VOLTR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `HIGH_VOLTR` = ? ");
		$stmt->bind_param("i",$HIGH_VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByHigh_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByHigh_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetMultiphaseByHigh_volty($HIGH_VOLTY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `HIGH_VOLTY` = ? ");
		$stmt->bind_param("i",$HIGH_VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByHigh_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByHigh_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetMultiphaseByHigh_voltb($HIGH_VOLTB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `HIGH_VOLTB` = ? ");
		$stmt->bind_param("i",$HIGH_VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByHigh_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByPfr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetMultiphaseByPfr($PFR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `PFR` = ? ");
		$stmt->bind_param("i",$PFR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByPfr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetMultiphaseByPfy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetMultiphaseByPfy($PFY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `PFY` = ? ");
		$stmt->bind_param("i",$PFY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByPfy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetMultiphaseByPfb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetMultiphaseByPfb($PFB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `PFB` = ? ");
		$stmt->bind_param("i",$PFB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByPfb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetMultiphaseByHcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetMultiphaseByHcr($HCR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `HCR` = ? ");
		$stmt->bind_param("i",$HCR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByHcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetMultiphaseByHcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetMultiphaseByHcy($HCY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `HCY` = ? ");
		$stmt->bind_param("i",$HCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByHcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetMultiphaseByHcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetMultiphaseByHcb($HCB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `HCB` = ? ");
		$stmt->bind_param("i",$HCB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByHcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetMultiphaseByLcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetMultiphaseByLcr($LCR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LCR` = ? ");
		$stmt->bind_param("i",$LCR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByLcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetMultiphaseByLcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetMultiphaseByLcy($LCY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LCY` = ? ");
		$stmt->bind_param("i",$LCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByLcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetMultiphaseByLcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetMultiphaseByLcb($LCB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LCB` = ? ");
		$stmt->bind_param("i",$LCB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByLcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetMultiphaseByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function GetMultiphaseByA_m_time($A_M_TIME)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `A_M_TIME` = ? ");
		$stmt->bind_param("s",$A_M_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function GetMultiphaseByA_e_time($A_E_TIME)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `A_E_TIME` = ? ");
		$stmt->bind_param("s",$A_E_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetMultiphaseByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LONGITUDE` = ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function GetMultiphaseByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LATITUDE` = ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/
	function GetMultiphaseByDate($DATE)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `DATE` = ? ");
		$stmt->bind_param("s",$DATE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/
	function GetMultiphaseByTime($TIME)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `TIME` = ? ");
		$stmt->bind_param("s",$TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function GetMultiphaseByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `Internetconnected` = ? ");
		$stmt->bind_param("i",$Internetconnected);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/
	function GetMultiphaseByArea($Area)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `Area` = ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function GetMultiphaseByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `Device_Status` = ? ");
		$stmt->bind_param("i",$Device_Status);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetMultiphaseByFrequency($FREQUENCY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `FREQUENCY` = ? ");
		$stmt->bind_param("i",$FREQUENCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetMultiphaseBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetMultiphaseBySmode($SMODE)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `SMODE` = ? ");
		$stmt->bind_param("i",$SMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetMultiphaseByMmode($MMODE)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `MMODE` = ? ");
		$stmt->bind_param("i",$MMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetMultiphaseByFault($FAULT)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `FAULT` = ? ");
		$stmt->bind_param("i",$FAULT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetMultiphaseByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `R_WATT` = ? ");
		$stmt->bind_param("i",$R_WATT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetMultiphaseByEnergy($ENERGY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `ENERGY` = ? ");
		$stmt->bind_param("i",$ENERGY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetMultiphaseByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetMultiphaseByPhone($PHONE)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `PHONE` = ? ");
		$stmt->bind_param("i",$PHONE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : GetMultiphaseByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/


	/********************** [Start : SearchMultiphaseById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function SearchMultiphaseById($ID)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `ID` like ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchMultiphaseBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `SL_ID` like ? ");
		$stmt->bind_param("s",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByPowerr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchMultiphaseByPowerr($POWERR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `POWERR` like ? ");
		$stmt->bind_param("i",$POWERR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByPowerr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByPowery, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchMultiphaseByPowery($POWERY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `POWERY` like ? ");
		$stmt->bind_param("i",$POWERY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByPowery, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByPowerb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchMultiphaseByPowerb($POWERB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `POWERB` like ? ");
		$stmt->bind_param("i",$POWERB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByPowerb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByCurrentr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function SearchMultiphaseByCurrentr($CURRENTR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `CURRENTR` like ? ");
		$stmt->bind_param("i",$CURRENTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByCurrentr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByCurrenty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function SearchMultiphaseByCurrenty($CURRENTY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `CURRENTY` like ? ");
		$stmt->bind_param("i",$CURRENTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByCurrenty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByCurrentb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function SearchMultiphaseByCurrentb($CURRENTB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `CURRENTB` like ? ");
		$stmt->bind_param("i",$CURRENTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByCurrentb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByVoltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchMultiphaseByVoltr($VOLTR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `VOLTR` like ? ");
		$stmt->bind_param("i",$VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByVoltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByVolty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchMultiphaseByVolty($VOLTY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `VOLTY` like ? ");
		$stmt->bind_param("i",$VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByVolty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByVoltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchMultiphaseByVoltb($VOLTB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `VOLTB` like ? ");
		$stmt->bind_param("i",$VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByVoltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByLow_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchMultiphaseByLow_voltr($LOW_VOLTR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LOW_VOLTR` like ? ");
		$stmt->bind_param("i",$LOW_VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByLow_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByLow_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchMultiphaseByLow_volty($LOW_VOLTY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LOW_VOLTY` like ? ");
		$stmt->bind_param("i",$LOW_VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByLow_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByLow_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchMultiphaseByLow_voltb($LOW_VOLTB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LOW_VOLTB` like ? ");
		$stmt->bind_param("i",$LOW_VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByLow_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByHigh_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchMultiphaseByHigh_voltr($HIGH_VOLTR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `HIGH_VOLTR` like ? ");
		$stmt->bind_param("i",$HIGH_VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByHigh_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByHigh_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchMultiphaseByHigh_volty($HIGH_VOLTY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `HIGH_VOLTY` like ? ");
		$stmt->bind_param("i",$HIGH_VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByHigh_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByHigh_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchMultiphaseByHigh_voltb($HIGH_VOLTB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `HIGH_VOLTB` like ? ");
		$stmt->bind_param("i",$HIGH_VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByHigh_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByPfr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchMultiphaseByPfr($PFR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `PFR` like ? ");
		$stmt->bind_param("i",$PFR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByPfr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByPfy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchMultiphaseByPfy($PFY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `PFY` like ? ");
		$stmt->bind_param("i",$PFY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByPfy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByPfb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchMultiphaseByPfb($PFB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `PFB` like ? ");
		$stmt->bind_param("i",$PFB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByPfb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByHcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchMultiphaseByHcr($HCR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `HCR` like ? ");
		$stmt->bind_param("i",$HCR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByHcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByHcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchMultiphaseByHcy($HCY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `HCY` like ? ");
		$stmt->bind_param("i",$HCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByHcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByHcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchMultiphaseByHcb($HCB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `HCB` like ? ");
		$stmt->bind_param("i",$HCB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByHcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByLcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchMultiphaseByLcr($LCR)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LCR` like ? ");
		$stmt->bind_param("i",$LCR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByLcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByLcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchMultiphaseByLcy($LCY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LCY` like ? ");
		$stmt->bind_param("i",$LCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByLcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByLcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchMultiphaseByLcb($LCB)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LCB` like ? ");
		$stmt->bind_param("i",$LCB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByLcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function SearchMultiphaseByA_m_time($A_M_TIME)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `A_M_TIME` like ? ");
		$stmt->bind_param("s",$A_M_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function SearchMultiphaseByA_e_time($A_E_TIME)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `A_E_TIME` like ? ");
		$stmt->bind_param("s",$A_E_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchMultiphaseByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LONGITUDE` like ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function SearchMultiphaseByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `LATITUDE` like ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchMultiphaseByDate($DATE)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `DATE` like ? ");
		$stmt->bind_param("s",$DATE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchMultiphaseByTime($TIME)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `TIME` like ? ");
		$stmt->bind_param("s",$TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function SearchMultiphaseByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `Internetconnected` like ? ");
		$stmt->bind_param("i",$Internetconnected);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchMultiphaseByArea($Area)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `Area` like ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function SearchMultiphaseByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `Device_Status` like ? ");
		$stmt->bind_param("i",$Device_Status);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchMultiphaseByFrequency($FREQUENCY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `FREQUENCY` like ? ");
		$stmt->bind_param("i",$FREQUENCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchMultiphaseBySmode($SMODE)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `SMODE` like ? ");
		$stmt->bind_param("i",$SMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchMultiphaseByMmode($MMODE)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `MMODE` like ? ");
		$stmt->bind_param("i",$MMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchMultiphaseByFault($FAULT)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `FAULT` like ? ");
		$stmt->bind_param("i",$FAULT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchMultiphaseByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `R_WATT` like ? ");
		$stmt->bind_param("i",$R_WATT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchMultiphaseByEnergy($ENERGY)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `ENERGY` like ? ");
		$stmt->bind_param("i",$ENERGY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchMultiphaseByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchMultiphaseByPhone($PHONE)
	{
		$conn = $this -> conn;
		$multiphaseArrayList = array();
		$stmt = $conn->prepare("select * from multiphase where `PHONE` like ? ");
		$stmt->bind_param("i",$PHONE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphaseArrayList;
	}
	/********************** [End : SearchMultiphaseByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/


	/********************** [Start : DeleteMultiphaseById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function DeleteMultiphaseById($ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `ID` = ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteMultiphaseBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `SL_ID` = ? ");
		$stmt->bind_param("s",$SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByPowerr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteMultiphaseByPowerr($POWERR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `POWERR` = ? ");
		$stmt->bind_param("i",$POWERR);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByPowerr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByPowery, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteMultiphaseByPowery($POWERY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `POWERY` = ? ");
		$stmt->bind_param("i",$POWERY);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByPowery, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByPowerb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteMultiphaseByPowerb($POWERB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `POWERB` = ? ");
		$stmt->bind_param("i",$POWERB);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByPowerb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByCurrentr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function DeleteMultiphaseByCurrentr($CURRENTR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `CURRENTR` = ? ");
		$stmt->bind_param("i",$CURRENTR);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByCurrentr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByCurrenty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function DeleteMultiphaseByCurrenty($CURRENTY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `CURRENTY` = ? ");
		$stmt->bind_param("i",$CURRENTY);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByCurrenty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByCurrentb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function DeleteMultiphaseByCurrentb($CURRENTB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `CURRENTB` = ? ");
		$stmt->bind_param("i",$CURRENTB);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByCurrentb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByVoltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteMultiphaseByVoltr($VOLTR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `VOLTR` = ? ");
		$stmt->bind_param("i",$VOLTR);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByVoltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByVolty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteMultiphaseByVolty($VOLTY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `VOLTY` = ? ");
		$stmt->bind_param("i",$VOLTY);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByVolty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByVoltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteMultiphaseByVoltb($VOLTB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `VOLTB` = ? ");
		$stmt->bind_param("i",$VOLTB);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByVoltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByLow_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteMultiphaseByLow_voltr($LOW_VOLTR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `LOW_VOLTR` = ? ");
		$stmt->bind_param("i",$LOW_VOLTR);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByLow_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByLow_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteMultiphaseByLow_volty($LOW_VOLTY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `LOW_VOLTY` = ? ");
		$stmt->bind_param("i",$LOW_VOLTY);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByLow_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByLow_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteMultiphaseByLow_voltb($LOW_VOLTB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `LOW_VOLTB` = ? ");
		$stmt->bind_param("i",$LOW_VOLTB);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByLow_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByHigh_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteMultiphaseByHigh_voltr($HIGH_VOLTR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `HIGH_VOLTR` = ? ");
		$stmt->bind_param("i",$HIGH_VOLTR);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByHigh_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByHigh_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteMultiphaseByHigh_volty($HIGH_VOLTY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `HIGH_VOLTY` = ? ");
		$stmt->bind_param("i",$HIGH_VOLTY);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByHigh_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByHigh_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteMultiphaseByHigh_voltb($HIGH_VOLTB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `HIGH_VOLTB` = ? ");
		$stmt->bind_param("i",$HIGH_VOLTB);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByHigh_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByPfr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteMultiphaseByPfr($PFR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `PFR` = ? ");
		$stmt->bind_param("i",$PFR);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByPfr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByPfy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteMultiphaseByPfy($PFY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `PFY` = ? ");
		$stmt->bind_param("i",$PFY);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByPfy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByPfb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteMultiphaseByPfb($PFB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `PFB` = ? ");
		$stmt->bind_param("i",$PFB);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByPfb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByHcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteMultiphaseByHcr($HCR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `HCR` = ? ");
		$stmt->bind_param("i",$HCR);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByHcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByHcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteMultiphaseByHcy($HCY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `HCY` = ? ");
		$stmt->bind_param("i",$HCY);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByHcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByHcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteMultiphaseByHcb($HCB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `HCB` = ? ");
		$stmt->bind_param("i",$HCB);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByHcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByLcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteMultiphaseByLcr($LCR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `LCR` = ? ");
		$stmt->bind_param("i",$LCR);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByLcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByLcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteMultiphaseByLcy($LCY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `LCY` = ? ");
		$stmt->bind_param("i",$LCY);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByLcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByLcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteMultiphaseByLcb($LCB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `LCB` = ? ");
		$stmt->bind_param("i",$LCB);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByLcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function DeleteMultiphaseByA_m_time($A_M_TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `A_M_TIME` = ? ");
		$stmt->bind_param("s",$A_M_TIME);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function DeleteMultiphaseByA_e_time($A_E_TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `A_E_TIME` = ? ");
		$stmt->bind_param("s",$A_E_TIME);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteMultiphaseByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `LONGITUDE` = ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function DeleteMultiphaseByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `LATITUDE` = ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteMultiphaseByDate($DATE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `DATE` = ? ");
		$stmt->bind_param("s",$DATE);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteMultiphaseByTime($TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `TIME` = ? ");
		$stmt->bind_param("s",$TIME);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function DeleteMultiphaseByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `Internetconnected` = ? ");
		$stmt->bind_param("i",$Internetconnected);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteMultiphaseByArea($Area)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `Area` = ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function DeleteMultiphaseByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `Device_Status` = ? ");
		$stmt->bind_param("i",$Device_Status);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteMultiphaseByFrequency($FREQUENCY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `FREQUENCY` = ? ");
		$stmt->bind_param("i",$FREQUENCY);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteMultiphaseBySmode($SMODE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `SMODE` = ? ");
		$stmt->bind_param("i",$SMODE);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteMultiphaseByMmode($MMODE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `MMODE` = ? ");
		$stmt->bind_param("i",$MMODE);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteMultiphaseByFault($FAULT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `FAULT` = ? ");
		$stmt->bind_param("i",$FAULT);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteMultiphaseByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `R_WATT` = ? ");
		$stmt->bind_param("i",$R_WATT);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteMultiphaseByEnergy($ENERGY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `ENERGY` = ? ");
		$stmt->bind_param("i",$ENERGY);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteMultiphaseByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteMultiphaseByPhone($PHONE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase where `PHONE` = ? ");
		$stmt->bind_param("i",$PHONE);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteMultiphaseByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : Update Multiphase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/
	function UpdateMultiphase($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set ID = ? ,SL_ID = ? ,POWERR = ? ,POWERY = ? ,POWERB = ? ,CURRENTR = ? ,CURRENTY = ? ,CURRENTB = ? ,VOLTR = ? ,VOLTY = ? ,VOLTB = ? ,LOW_VOLTR = ? ,LOW_VOLTY = ? ,LOW_VOLTB = ? ,HIGH_VOLTR = ? ,HIGH_VOLTY = ? ,HIGH_VOLTB = ? ,PFR = ? ,PFY = ? ,PFB = ? ,HCR = ? ,HCY = ? ,HCB = ? ,LCR = ? ,LCY = ? ,LCB = ? ,A_M_TIME = ? ,A_E_TIME = ? ,LONGITUDE = ? ,LATITUDE = ? ,DATE = ? ,TIME = ? ,Internetconnected = ? ,Area = ? ,Device_Status = ? ,FREQUENCY = ? ,SMODE = ? ,MMODE = ? ,FAULT = ? ,R_WATT = ? ,ENERGY = ? ,PHONE = ? where ID = ? ");
		$stmt->bind_param("isiiiiiiiiiiiiiiiiiiiiiiiissssssisiiiiiiiii",$multiphase->ID,$multiphase->SL_ID,$multiphase->POWERR,$multiphase->POWERY,$multiphase->POWERB,$multiphase->CURRENTR,$multiphase->CURRENTY,$multiphase->CURRENTB,$multiphase->VOLTR,$multiphase->VOLTY,$multiphase->VOLTB,$multiphase->LOW_VOLTR,$multiphase->LOW_VOLTY,$multiphase->LOW_VOLTB,$multiphase->HIGH_VOLTR,$multiphase->HIGH_VOLTY,$multiphase->HIGH_VOLTB,$multiphase->PFR,$multiphase->PFY,$multiphase->PFB,$multiphase->HCR,$multiphase->HCY,$multiphase->HCB,$multiphase->LCR,$multiphase->LCY,$multiphase->LCB,$multiphase->A_M_TIME,$multiphase->A_E_TIME,$multiphase->LONGITUDE,$multiphase->LATITUDE,$multiphase->DATE,$multiphase->TIME,$multiphase->Internetconnected,$multiphase->Area,$multiphase->Device_Status,$multiphase->FREQUENCY,$multiphase->SMODE,$multiphase->MMODE,$multiphase->FAULT,$multiphase->R_WATT,$multiphase->ENERGY,$multiphase->PHONE,$multiphase->ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdateMultiphasedata($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set POWERR = ? ,POWERY = ? ,POWERB = ? ,CURRENTR = ? ,CURRENTY = ? ,CURRENTB = ? ,VOLTR = ? ,VOLTY = ? ,VOLTB = ? ,PFR = ? ,PFY = ? ,PFB = ? ,A_M_TIME = ? ,A_E_TIME = ? ,DATE = ? ,TIME = ? ,Device_Status = ? ,FREQUENCY = ? ,SMODE = ? ,MMODE = ? ,FAULT = ? ,ENERGY = ? where SL_ID = ? ");
		$stmt->bind_param("ddddddddddddssssidiiids",$multiphase->POWERR,$multiphase->POWERY,$multiphase->POWERB,$multiphase->CURRENTR,$multiphase->CURRENTY,$multiphase->CURRENTB,$multiphase->VOLTR,$multiphase->VOLTY,$multiphase->VOLTB,$multiphase->PFR,$multiphase->PFY,$multiphase->PFB,$multiphase->A_M_TIME,$multiphase->A_E_TIME,$multiphase->DATE,$multiphase->TIME,$multiphase->Device_Status,$multiphase->FREQUENCY,$multiphase->SMODE,$multiphase->MMODE,$multiphase->FAULT,$multiphase->ENERGY,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdateMultiphaseeic($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set Internetconnected = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->Internetconnected,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdatempHVR($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set HIGH_VOLTR = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->HIGH_VOLTR,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdatempHVY($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set HIGH_VOLTY = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->HIGH_VOLTY,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdatempHVB($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set HIGH_VOLTB = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->HIGH_VOLTB,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdatempLVR($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set LOW_VOLTR = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->LOW_VOLTR,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdatempLVY($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set LOW_VOLTY = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->LOW_VOLTY,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdatempLVB($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set LOW_VOLTB = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->LOW_VOLTB,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdatempHCR($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set HCR = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->HCR,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdatempHCY($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set HCY = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->HCY,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdatempHCB($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set HCB = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->HCB,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdatempLCR($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set LCR = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->LCR,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdatempLCY($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set LCY = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->LCY,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdatempLCB($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set LCB = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->LCB,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function AdminUpdateSl($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set Area = ? ,LONGITUDE = ? ,LATITUDE = ? where SL_ID = ? ");
		$stmt->bind_param("ssss",$multiphase->Area,$multiphase->LONGITUDE,$multiphase->LATITUDE,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdateSlSMODE($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set SMODE = ? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->SMODE,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function UpdateSlMMODE($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set MMODE = ?,Device_Status=? where SL_ID = ? ");
		$stmt->bind_param("iis",$multiphase->MMODE,$multiphase->Device_Status,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function AdminUpdatePH($multiphase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase set PHONE=? where SL_ID = ? ");
		$stmt->bind_param("is",$multiphase->PHONE,$multiphase->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}

		function smtp_mailer($to,$subject, $msg){
		    $mail = new PHPMailer(); 
		    //$mail->SMTPDebug  = 3;
		    $mail->IsSMTP(); 
		    $mail->SMTPAuth = true; 
		    $mail->SMTPSecure = 'tls'; 
		    $mail->Host = "mail.ironmanpro.in";
		    $mail->Port = 587; 
		    $mail->IsHTML(true);
		    $mail->CharSet = 'UTF-8';
		    $mail->Username = "official@ironmanpro.in";
		    $mail->Password = "Soumya@1234";
		    $mail->SetFrom("official@ironmanpro.in");
		    $mail->Subject = $subject;
		    $mail->Body =$msg;
		    $mail->AddAddress($to);
		    $mail->SMTPOptions=array('ssl'=>array(
		        'verify_peer'=>false,
		        'verify_peer_name'=>false,
		        'allow_self_signed'=>false
		    ));
		    if(!$mail->Send()){
		        echo $mail->ErrorInfo;
		    }
		}
			
	/********************** [End : Update Multiphase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************/

}
?>
