
<?php
	class ModelMultiphase_status{
	/********************** [Start : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Multiphase_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function InsertMultiphase_status($multiphase_status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO multiphase_status (ID,SL_ID,POWERR,POWERY,POWERB,CURRENTR,CURRENTY,CURRENTB,VOLTR,VOLTY,VOLTB,LOW_VOLTR,LOW_VOLTY,LOW_VOLTB,HIGH_VOLTR,HIGH_VOLTY,HIGH_VOLTB,PFR,PFY,PFB,HCR,HCY,HCB,LCR,LCY,LCB,A_M_TIME,A_E_TIME,LONGITUDE,LATITUDE,DATE,TIME,Internetconnected,Area,Device_Status,FREQUENCY,SMODE,MMODE,FAULT,R_WATT,ENERGY,PHONE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isdddddddddiiiiiidddiiiiiissssssisidiiiidi",$multiphase_status->ID,$multiphase_status->SL_ID,$multiphase_status->POWERR,$multiphase_status->POWERY,$multiphase_status->POWERB,$multiphase_status->CURRENTR,$multiphase_status->CURRENTY,$multiphase_status->CURRENTB,$multiphase_status->VOLTR,$multiphase_status->VOLTY,$multiphase_status->VOLTB,$multiphase_status->LOW_VOLTR,$multiphase_status->LOW_VOLTY,$multiphase_status->LOW_VOLTB,$multiphase_status->HIGH_VOLTR,$multiphase_status->HIGH_VOLTY,$multiphase_status->HIGH_VOLTB,$multiphase_status->PFR,$multiphase_status->PFY,$multiphase_status->PFB,$multiphase_status->HCR,$multiphase_status->HCY,$multiphase_status->HCB,$multiphase_status->LCR,$multiphase_status->LCY,$multiphase_status->LCB,$multiphase_status->A_M_TIME,$multiphase_status->A_E_TIME,$multiphase_status->LONGITUDE,$multiphase_status->LATITUDE,$multiphase_status->DATE,$multiphase_status->TIME,$multiphase_status->Internetconnected,$multiphase_status->Area,$multiphase_status->Device_Status,$multiphase_status->FREQUENCY,$multiphase_status->SMODE,$multiphase_status->MMODE,$multiphase_status->FAULT,$multiphase_status->R_WATT,$multiphase_status->ENERGY,$multiphase_status->PHONE);
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
	function Insert1Multiphase_status($multiphase_status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO multiphase_status (ID,SL_ID,LONGITUDE,LATITUDE,DATE,TIME,Area,R_WATT) VALUES (?,?,?,?,?,?,?,?)");
		$stmt->bind_param("issssssi",$multiphase_status->ID,$multiphase_status->SL_ID,$multiphase_status->LONGITUDE,$multiphase_status->LATITUDE,$multiphase_status->DATE,$multiphase_status->TIME,$multiphase_status->Area,$multiphase_status->R_WATT);
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
	/********************** [End : Insert Multiphase_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetAllMultiphase_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function GetAllMultiphase_status()
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByMultiphase_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetMultiphase_statusById($ID)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `ID` = ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetMultiphase_statusBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `SL_ID` = ? ");
		$stmt->bind_param("s",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByPowerr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function GetMultiphase_statusByPowerr($POWERR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `POWERR` = ? ");
		$stmt->bind_param("i",$POWERR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByPowerr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByPowery, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function GetMultiphase_statusByPowery($POWERY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `POWERY` = ? ");
		$stmt->bind_param("i",$POWERY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByPowery, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByPowerb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function GetMultiphase_statusByPowerb($POWERB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `POWERB` = ? ");
		$stmt->bind_param("i",$POWERB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByPowerb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByCurrentr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function GetMultiphase_statusByCurrentr($CURRENTR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `CURRENTR` = ? ");
		$stmt->bind_param("i",$CURRENTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByCurrentr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByCurrenty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function GetMultiphase_statusByCurrenty($CURRENTY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `CURRENTY` = ? ");
		$stmt->bind_param("i",$CURRENTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByCurrenty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByCurrentb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function GetMultiphase_statusByCurrentb($CURRENTB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `CURRENTB` = ? ");
		$stmt->bind_param("i",$CURRENTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByCurrentb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByVoltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetMultiphase_statusByVoltr($VOLTR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `VOLTR` = ? ");
		$stmt->bind_param("i",$VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByVoltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByVolty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetMultiphase_statusByVolty($VOLTY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `VOLTY` = ? ");
		$stmt->bind_param("i",$VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByVolty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByVoltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetMultiphase_statusByVoltb($VOLTB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `VOLTB` = ? ");
		$stmt->bind_param("i",$VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByVoltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByLow_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function GetMultiphase_statusByLow_voltr($LOW_VOLTR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LOW_VOLTR` = ? ");
		$stmt->bind_param("i",$LOW_VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByLow_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByLow_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function GetMultiphase_statusByLow_volty($LOW_VOLTY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LOW_VOLTY` = ? ");
		$stmt->bind_param("i",$LOW_VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByLow_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByLow_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function GetMultiphase_statusByLow_voltb($LOW_VOLTB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LOW_VOLTB` = ? ");
		$stmt->bind_param("i",$LOW_VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByLow_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByHigh_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function GetMultiphase_statusByHigh_voltr($HIGH_VOLTR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `HIGH_VOLTR` = ? ");
		$stmt->bind_param("i",$HIGH_VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByHigh_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByHigh_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function GetMultiphase_statusByHigh_volty($HIGH_VOLTY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `HIGH_VOLTY` = ? ");
		$stmt->bind_param("i",$HIGH_VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByHigh_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByHigh_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function GetMultiphase_statusByHigh_voltb($HIGH_VOLTB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `HIGH_VOLTB` = ? ");
		$stmt->bind_param("i",$HIGH_VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByHigh_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByPfr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetMultiphase_statusByPfr($PFR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `PFR` = ? ");
		$stmt->bind_param("i",$PFR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByPfr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByPfy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetMultiphase_statusByPfy($PFY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `PFY` = ? ");
		$stmt->bind_param("i",$PFY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByPfy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByPfb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetMultiphase_statusByPfb($PFB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `PFB` = ? ");
		$stmt->bind_param("i",$PFB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByPfb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByHcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetMultiphase_statusByHcr($HCR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `HCR` = ? ");
		$stmt->bind_param("i",$HCR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByHcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByHcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetMultiphase_statusByHcy($HCY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `HCY` = ? ");
		$stmt->bind_param("i",$HCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByHcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByHcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetMultiphase_statusByHcb($HCB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `HCB` = ? ");
		$stmt->bind_param("i",$HCB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByHcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByLcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetMultiphase_statusByLcr($LCR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LCR` = ? ");
		$stmt->bind_param("i",$LCR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByLcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByLcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetMultiphase_statusByLcy($LCY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LCY` = ? ");
		$stmt->bind_param("i",$LCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByLcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByLcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetMultiphase_statusByLcb($LCB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LCB` = ? ");
		$stmt->bind_param("i",$LCB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByLcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function GetMultiphase_statusByA_m_time($A_M_TIME)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `A_M_TIME` = ? ");
		$stmt->bind_param("s",$A_M_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function GetMultiphase_statusByA_e_time($A_E_TIME)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `A_E_TIME` = ? ");
		$stmt->bind_param("s",$A_E_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function GetMultiphase_statusByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LONGITUDE` = ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function GetMultiphase_statusByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LATITUDE` = ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function GetMultiphase_statusByDate($DATE)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `DATE` = ? ");
		$stmt->bind_param("s",$DATE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function GetMultiphase_statusByTime($TIME)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `TIME` = ? ");
		$stmt->bind_param("s",$TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************************/
	function GetMultiphase_statusByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `Internetconnected` = ? ");
		$stmt->bind_param("i",$Internetconnected);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function GetMultiphase_statusByArea($Area)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `Area` = ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function GetMultiphase_statusByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `Device_Status` = ? ");
		$stmt->bind_param("i",$Device_Status);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function GetMultiphase_statusByFrequency($FREQUENCY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `FREQUENCY` = ? ");
		$stmt->bind_param("i",$FREQUENCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetMultiphase_statusBySmode($SMODE)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `SMODE` = ? ");
		$stmt->bind_param("i",$SMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetMultiphase_statusByMmode($MMODE)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `MMODE` = ? ");
		$stmt->bind_param("i",$MMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetMultiphase_statusByFault($FAULT)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `FAULT` = ? ");
		$stmt->bind_param("i",$FAULT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function GetMultiphase_statusByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `R_WATT` = ? ");
		$stmt->bind_param("i",$R_WATT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function GetMultiphase_statusByEnergy($ENERGY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `ENERGY` = ? ");
		$stmt->bind_param("i",$ENERGY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : GetMultiphase_statusByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetMultiphase_statusByPhone($PHONE)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `PHONE` = ? ");
		$stmt->bind_param("i",$PHONE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : GetMultiphase_statusByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/


	/********************** [Start : SearchMultiphase_statusById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchMultiphase_statusById($ID)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `ID` like ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchMultiphase_statusBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `SL_ID` like ? ");
		$stmt->bind_param("s",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByPowerr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function SearchMultiphase_statusByPowerr($POWERR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `POWERR` like ? ");
		$stmt->bind_param("i",$POWERR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByPowerr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByPowery, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function SearchMultiphase_statusByPowery($POWERY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `POWERY` like ? ");
		$stmt->bind_param("i",$POWERY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByPowery, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByPowerb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function SearchMultiphase_statusByPowerb($POWERB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `POWERB` like ? ");
		$stmt->bind_param("i",$POWERB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByPowerb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByCurrentr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function SearchMultiphase_statusByCurrentr($CURRENTR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `CURRENTR` like ? ");
		$stmt->bind_param("i",$CURRENTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByCurrentr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByCurrenty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function SearchMultiphase_statusByCurrenty($CURRENTY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `CURRENTY` like ? ");
		$stmt->bind_param("i",$CURRENTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByCurrenty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByCurrentb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function SearchMultiphase_statusByCurrentb($CURRENTB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `CURRENTB` like ? ");
		$stmt->bind_param("i",$CURRENTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByCurrentb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByVoltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchMultiphase_statusByVoltr($VOLTR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `VOLTR` like ? ");
		$stmt->bind_param("i",$VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByVoltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByVolty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchMultiphase_statusByVolty($VOLTY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `VOLTY` like ? ");
		$stmt->bind_param("i",$VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByVolty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByVoltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchMultiphase_statusByVoltb($VOLTB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `VOLTB` like ? ");
		$stmt->bind_param("i",$VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByVoltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByLow_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function SearchMultiphase_statusByLow_voltr($LOW_VOLTR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LOW_VOLTR` like ? ");
		$stmt->bind_param("i",$LOW_VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByLow_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByLow_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function SearchMultiphase_statusByLow_volty($LOW_VOLTY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LOW_VOLTY` like ? ");
		$stmt->bind_param("i",$LOW_VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByLow_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByLow_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function SearchMultiphase_statusByLow_voltb($LOW_VOLTB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LOW_VOLTB` like ? ");
		$stmt->bind_param("i",$LOW_VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByLow_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByHigh_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function SearchMultiphase_statusByHigh_voltr($HIGH_VOLTR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `HIGH_VOLTR` like ? ");
		$stmt->bind_param("i",$HIGH_VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByHigh_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByHigh_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function SearchMultiphase_statusByHigh_volty($HIGH_VOLTY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `HIGH_VOLTY` like ? ");
		$stmt->bind_param("i",$HIGH_VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByHigh_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByHigh_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function SearchMultiphase_statusByHigh_voltb($HIGH_VOLTB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `HIGH_VOLTB` like ? ");
		$stmt->bind_param("i",$HIGH_VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByHigh_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByPfr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchMultiphase_statusByPfr($PFR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `PFR` like ? ");
		$stmt->bind_param("i",$PFR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByPfr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByPfy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchMultiphase_statusByPfy($PFY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `PFY` like ? ");
		$stmt->bind_param("i",$PFY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByPfy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByPfb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchMultiphase_statusByPfb($PFB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `PFB` like ? ");
		$stmt->bind_param("i",$PFB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByPfb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByHcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchMultiphase_statusByHcr($HCR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `HCR` like ? ");
		$stmt->bind_param("i",$HCR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByHcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByHcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchMultiphase_statusByHcy($HCY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `HCY` like ? ");
		$stmt->bind_param("i",$HCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByHcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByHcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchMultiphase_statusByHcb($HCB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `HCB` like ? ");
		$stmt->bind_param("i",$HCB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByHcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByLcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchMultiphase_statusByLcr($LCR)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LCR` like ? ");
		$stmt->bind_param("i",$LCR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByLcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByLcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchMultiphase_statusByLcy($LCY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LCY` like ? ");
		$stmt->bind_param("i",$LCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByLcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByLcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchMultiphase_statusByLcb($LCB)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LCB` like ? ");
		$stmt->bind_param("i",$LCB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByLcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function SearchMultiphase_statusByA_m_time($A_M_TIME)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `A_M_TIME` like ? ");
		$stmt->bind_param("s",$A_M_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function SearchMultiphase_statusByA_e_time($A_E_TIME)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `A_E_TIME` like ? ");
		$stmt->bind_param("s",$A_E_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function SearchMultiphase_statusByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LONGITUDE` like ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function SearchMultiphase_statusByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `LATITUDE` like ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/
	function SearchMultiphase_statusByDate($DATE)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `DATE` like ? ");
		$stmt->bind_param("s",$DATE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/
	function SearchMultiphase_statusByTime($TIME)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `TIME` like ? ");
		$stmt->bind_param("s",$TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************************/
	function SearchMultiphase_statusByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `Internetconnected` like ? ");
		$stmt->bind_param("i",$Internetconnected);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/
	function SearchMultiphase_statusByArea($Area)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `Area` like ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************************/
	function SearchMultiphase_statusByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `Device_Status` like ? ");
		$stmt->bind_param("i",$Device_Status);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function SearchMultiphase_statusByFrequency($FREQUENCY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `FREQUENCY` like ? ");
		$stmt->bind_param("i",$FREQUENCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchMultiphase_statusBySmode($SMODE)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `SMODE` like ? ");
		$stmt->bind_param("i",$SMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchMultiphase_statusByMmode($MMODE)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `MMODE` like ? ");
		$stmt->bind_param("i",$MMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchMultiphase_statusByFault($FAULT)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `FAULT` like ? ");
		$stmt->bind_param("i",$FAULT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function SearchMultiphase_statusByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `R_WATT` like ? ");
		$stmt->bind_param("i",$R_WATT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function SearchMultiphase_statusByEnergy($ENERGY)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `ENERGY` like ? ");
		$stmt->bind_param("i",$ENERGY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : SearchMultiphase_statusByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchMultiphase_statusByPhone($PHONE)
	{
		$conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where `PHONE` like ? ");
		$stmt->bind_param("i",$PHONE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;
	}
	/********************** [End : SearchMultiphase_statusByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/


	/********************** [Start : DeleteMultiphase_statusById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteMultiphase_statusById($ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `ID` = ? ");
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
	/********************** [End : DeleteMultiphase_statusById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteMultiphase_statusBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `SL_ID` = ? ");
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
	/********************** [End : DeleteMultiphase_statusBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByPowerr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function DeleteMultiphase_statusByPowerr($POWERR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `POWERR` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByPowerr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByPowery, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function DeleteMultiphase_statusByPowery($POWERY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `POWERY` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByPowery, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByPowerb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function DeleteMultiphase_statusByPowerb($POWERB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `POWERB` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByPowerb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByCurrentr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function DeleteMultiphase_statusByCurrentr($CURRENTR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `CURRENTR` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByCurrentr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByCurrenty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function DeleteMultiphase_statusByCurrenty($CURRENTY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `CURRENTY` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByCurrenty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByCurrentb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function DeleteMultiphase_statusByCurrentb($CURRENTB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `CURRENTB` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByCurrentb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByVoltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteMultiphase_statusByVoltr($VOLTR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `VOLTR` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByVoltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByVolty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteMultiphase_statusByVolty($VOLTY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `VOLTY` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByVolty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByVoltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteMultiphase_statusByVoltb($VOLTB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `VOLTB` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByVoltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByLow_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function DeleteMultiphase_statusByLow_voltr($LOW_VOLTR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `LOW_VOLTR` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByLow_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByLow_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function DeleteMultiphase_statusByLow_volty($LOW_VOLTY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `LOW_VOLTY` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByLow_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByLow_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function DeleteMultiphase_statusByLow_voltb($LOW_VOLTB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `LOW_VOLTB` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByLow_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByHigh_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function DeleteMultiphase_statusByHigh_voltr($HIGH_VOLTR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `HIGH_VOLTR` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByHigh_voltr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByHigh_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function DeleteMultiphase_statusByHigh_volty($HIGH_VOLTY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `HIGH_VOLTY` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByHigh_volty, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByHigh_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function DeleteMultiphase_statusByHigh_voltb($HIGH_VOLTB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `HIGH_VOLTB` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByHigh_voltb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByPfr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteMultiphase_statusByPfr($PFR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `PFR` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByPfr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByPfy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteMultiphase_statusByPfy($PFY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `PFY` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByPfy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByPfb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteMultiphase_statusByPfb($PFB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `PFB` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByPfb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByHcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteMultiphase_statusByHcr($HCR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `HCR` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByHcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByHcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteMultiphase_statusByHcy($HCY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `HCY` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByHcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByHcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteMultiphase_statusByHcb($HCB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `HCB` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByHcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByLcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteMultiphase_statusByLcr($LCR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `LCR` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByLcr, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByLcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteMultiphase_statusByLcy($LCY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `LCY` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByLcy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByLcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteMultiphase_statusByLcb($LCB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `LCB` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByLcb, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function DeleteMultiphase_statusByA_m_time($A_M_TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `A_M_TIME` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function DeleteMultiphase_statusByA_e_time($A_E_TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `A_E_TIME` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function DeleteMultiphase_statusByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `LONGITUDE` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function DeleteMultiphase_statusByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `LATITUDE` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/
	function DeleteMultiphase_statusByDate($DATE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `DATE` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/
	function DeleteMultiphase_statusByTime($TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `TIME` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************************/
	function DeleteMultiphase_statusByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `Internetconnected` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/
	function DeleteMultiphase_statusByArea($Area)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `Area` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************************/
	function DeleteMultiphase_statusByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `Device_Status` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function DeleteMultiphase_statusByFrequency($FREQUENCY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `FREQUENCY` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteMultiphase_statusBySmode($SMODE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `SMODE` = ? ");
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
	/********************** [End : DeleteMultiphase_statusBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteMultiphase_statusByMmode($MMODE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `MMODE` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteMultiphase_statusByFault($FAULT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `FAULT` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function DeleteMultiphase_statusByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `R_WATT` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function DeleteMultiphase_statusByEnergy($ENERGY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `ENERGY` = ? ");
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
	/********************** [End : DeleteMultiphase_statusByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : DeleteMultiphase_statusByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteMultiphase_statusByPhone($PHONE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from multiphase_status where `PHONE` = ? ");
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
	function filtervolt($fdate,$tdate,$sid){
	    
	    
	    $conn = $this -> conn;
		$multiphase_statusArrayList = array();
		$stmt = $conn->prepare("select * from multiphase_status where DATE between ? and ? and `SL_ID` = ? ");
		$stmt->bind_param("sss",$fdate,$tdate,$sid);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMultiphase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($multiphase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $multiphase_statusArrayList;

	}
	/********************** [End : DeleteMultiphase_statusByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : Update Multiphase_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function UpdateMultiphase_status($multiphase_status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update multiphase_status set ID = ? ,SL_ID = ? ,POWERR = ? ,POWERY = ? ,POWERB = ? ,CURRENTR = ? ,CURRENTY = ? ,CURRENTB = ? ,VOLTR = ? ,VOLTY = ? ,VOLTB = ? ,LOW_VOLTR = ? ,LOW_VOLTY = ? ,LOW_VOLTB = ? ,HIGH_VOLTR = ? ,HIGH_VOLTY = ? ,HIGH_VOLTB = ? ,PFR = ? ,PFY = ? ,PFB = ? ,HCR = ? ,HCY = ? ,HCB = ? ,LCR = ? ,LCY = ? ,LCB = ? ,A_M_TIME = ? ,A_E_TIME = ? ,LONGITUDE = ? ,LATITUDE = ? ,DATE = ? ,TIME = ? ,Internetconnected = ? ,Area = ? ,Device_Status = ? ,FREQUENCY = ? ,SMODE = ? ,MMODE = ? ,FAULT = ? ,R_WATT = ? ,ENERGY = ? ,PHONE = ? where ID = ? ");
		$stmt->bind_param("isiiiiiiiiiiiiiiiiiiiiiiiissssssisiiiiiiiii",$multiphase_status->ID,$multiphase_status->SL_ID,$multiphase_status->POWERR,$multiphase_status->POWERY,$multiphase_status->POWERB,$multiphase_status->CURRENTR,$multiphase_status->CURRENTY,$multiphase_status->CURRENTB,$multiphase_status->VOLTR,$multiphase_status->VOLTY,$multiphase_status->VOLTB,$multiphase_status->LOW_VOLTR,$multiphase_status->LOW_VOLTY,$multiphase_status->LOW_VOLTB,$multiphase_status->HIGH_VOLTR,$multiphase_status->HIGH_VOLTY,$multiphase_status->HIGH_VOLTB,$multiphase_status->PFR,$multiphase_status->PFY,$multiphase_status->PFB,$multiphase_status->HCR,$multiphase_status->HCY,$multiphase_status->HCB,$multiphase_status->LCR,$multiphase_status->LCY,$multiphase_status->LCB,$multiphase_status->A_M_TIME,$multiphase_status->A_E_TIME,$multiphase_status->LONGITUDE,$multiphase_status->LATITUDE,$multiphase_status->DATE,$multiphase_status->TIME,$multiphase_status->Internetconnected,$multiphase_status->Area,$multiphase_status->Device_Status,$multiphase_status->FREQUENCY,$multiphase_status->SMODE,$multiphase_status->MMODE,$multiphase_status->FAULT,$multiphase_status->R_WATT,$multiphase_status->ENERGY,$multiphase_status->PHONE,$multiphase_status->ID);
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
	/********************** [End : Update Multiphase_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

}
?>
