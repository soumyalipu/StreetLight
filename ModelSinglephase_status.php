
<?php
	class ModelSinglephase_status{
	/********************** [Start : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Singlephase_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function InsertSinglephase_status($singlephase_status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO singlephase_status (ID,SL_ID,POWER,CURRENT,VOLT,LOW_VOLT,HIGH_VOLT,PF,HC,LC,A_M_TIME,A_E_TIME,LONGITUDE,LATITUDE,DATE,TIME,Internetconnected,Area,Device_Status,FREQUENCY,SMODE,MMODE,FAULT,R_WATT,ENERGY,PHONE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isdddiiiiissssssisidiiiidi",$singlephase_status->ID,$singlephase_status->SL_ID,$singlephase_status->POWER,$singlephase_status->CURRENT,$singlephase_status->VOLT,$singlephase_status->LOW_VOLT,$singlephase_status->HIGH_VOLT,$singlephase_status->PF,$singlephase_status->HC,$singlephase_status->LC,$singlephase_status->A_M_TIME,$singlephase_status->A_E_TIME,$singlephase_status->LONGITUDE,$singlephase_status->LATITUDE,$singlephase_status->DATE,$singlephase_status->TIME,$singlephase_status->Internetconnected,$singlephase_status->Area,$singlephase_status->Device_Status,$singlephase_status->FREQUENCY,$singlephase_status->SMODE,$singlephase_status->MMODE,$singlephase_status->FAULT,$singlephase_status->R_WATT,$singlephase_status->ENERGY,$singlephase_status->PHONE);
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
	function Insert1Singlephase_status($singlephase_status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO singlephase_status (ID,SL_ID,LONGITUDE,LATITUDE,DATE,TIME,Area,R_WATT) VALUES (?,?,?,?,?,?,?,?)");
		$stmt->bind_param("issssssi",$singlephase_status->ID,$singlephase_status->SL_ID,$singlephase_status->LONGITUDE,$singlephase_status->LATITUDE,$singlephase_status->DATE,$singlephase_status->TIME,$singlephase_status->Area,$singlephase_status->R_WATT);
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
	/********************** [End : Insert Singlephase_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetAllSinglephase_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetAllSinglephase_status()
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusBySinglephase_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetSinglephase_statusById($ID)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `ID` = ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function GetSinglephase_statusBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `SL_ID` = ? ");
		$stmt->bind_param("s",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByPower, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function GetSinglephase_statusByPower($POWER)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `POWER` = ? ");
		$stmt->bind_param("i",$POWER);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByPower, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByCurrent, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function GetSinglephase_statusByCurrent($CURRENT)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `CURRENT` = ? ");
		$stmt->bind_param("i",$CURRENT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByCurrent, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByVolt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetSinglephase_statusByVolt($VOLT)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `VOLT` = ? ");
		$stmt->bind_param("i",$VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByVolt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByLow_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function GetSinglephase_statusByLow_volt($LOW_VOLT)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `LOW_VOLT` = ? ");
		$stmt->bind_param("i",$LOW_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByLow_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByHigh_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function GetSinglephase_statusByHigh_volt($HIGH_VOLT)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `HIGH_VOLT` = ? ");
		$stmt->bind_param("i",$HIGH_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByHigh_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByPf, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetSinglephase_statusByPf($PF)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `PF` = ? ");
		$stmt->bind_param("i",$PF);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByPf, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByHc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetSinglephase_statusByHc($HC)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `HC` = ? ");
		$stmt->bind_param("i",$HC);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByHc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByLc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetSinglephase_statusByLc($LC)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `LC` = ? ");
		$stmt->bind_param("i",$LC);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByLc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function GetSinglephase_statusByA_m_time($A_M_TIME)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `A_M_TIME` = ? ");
		$stmt->bind_param("s",$A_M_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function GetSinglephase_statusByA_e_time($A_E_TIME)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `A_E_TIME` = ? ");
		$stmt->bind_param("s",$A_E_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function GetSinglephase_statusByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `LONGITUDE` = ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function GetSinglephase_statusByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `LATITUDE` = ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetSinglephase_statusByDate($DATE)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `DATE` = ? ");
		$stmt->bind_param("s",$DATE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetSinglephase_statusByTime($TIME)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `TIME` = ? ");
		$stmt->bind_param("s",$TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************************/
	function GetSinglephase_statusByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `Internetconnected` = ? ");
		$stmt->bind_param("i",$Internetconnected);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetSinglephase_statusByArea($Area)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `Area` = ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************************/
	function GetSinglephase_statusByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `Device_Status` = ? ");
		$stmt->bind_param("i",$Device_Status);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function GetSinglephase_statusByFrequency($FREQUENCY)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `FREQUENCY` = ? ");
		$stmt->bind_param("i",$FREQUENCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function GetSinglephase_statusBySmode($SMODE)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `SMODE` = ? ");
		$stmt->bind_param("i",$SMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function GetSinglephase_statusByMmode($MMODE)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `MMODE` = ? ");
		$stmt->bind_param("i",$MMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function GetSinglephase_statusByFault($FAULT)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `FAULT` = ? ");
		$stmt->bind_param("i",$FAULT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/
	function GetSinglephase_statusByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `R_WATT` = ? ");
		$stmt->bind_param("i",$R_WATT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/
	function GetSinglephase_statusByEnergy($ENERGY)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `ENERGY` = ? ");
		$stmt->bind_param("i",$ENERGY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/

	/********************** [Start : GetSinglephase_statusByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function GetSinglephase_statusByPhone($PHONE)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `PHONE` = ? ");
		$stmt->bind_param("i",$PHONE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : GetSinglephase_statusByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/


	/********************** [Start : SearchSinglephase_statusById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchSinglephase_statusById($ID)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `ID` like ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function SearchSinglephase_statusBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `SL_ID` like ? ");
		$stmt->bind_param("s",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByPower, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function SearchSinglephase_statusByPower($POWER)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `POWER` like ? ");
		$stmt->bind_param("i",$POWER);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByPower, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByCurrent, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function SearchSinglephase_statusByCurrent($CURRENT)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `CURRENT` like ? ");
		$stmt->bind_param("i",$CURRENT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByCurrent, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByVolt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchSinglephase_statusByVolt($VOLT)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `VOLT` like ? ");
		$stmt->bind_param("i",$VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByVolt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByLow_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function SearchSinglephase_statusByLow_volt($LOW_VOLT)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `LOW_VOLT` like ? ");
		$stmt->bind_param("i",$LOW_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByLow_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByHigh_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function SearchSinglephase_statusByHigh_volt($HIGH_VOLT)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `HIGH_VOLT` like ? ");
		$stmt->bind_param("i",$HIGH_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByHigh_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByPf, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchSinglephase_statusByPf($PF)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `PF` like ? ");
		$stmt->bind_param("i",$PF);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByPf, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByHc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchSinglephase_statusByHc($HC)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `HC` like ? ");
		$stmt->bind_param("i",$HC);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByHc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByLc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchSinglephase_statusByLc($LC)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `LC` like ? ");
		$stmt->bind_param("i",$LC);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByLc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function SearchSinglephase_statusByA_m_time($A_M_TIME)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `A_M_TIME` like ? ");
		$stmt->bind_param("s",$A_M_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function SearchSinglephase_statusByA_e_time($A_E_TIME)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `A_E_TIME` like ? ");
		$stmt->bind_param("s",$A_E_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function SearchSinglephase_statusByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `LONGITUDE` like ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function SearchSinglephase_statusByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `LATITUDE` like ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchSinglephase_statusByDate($DATE)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `DATE` like ? ");
		$stmt->bind_param("s",$DATE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchSinglephase_statusByTime($TIME)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `TIME` like ? ");
		$stmt->bind_param("s",$TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************************/
	function SearchSinglephase_statusByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `Internetconnected` like ? ");
		$stmt->bind_param("i",$Internetconnected);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchSinglephase_statusByArea($Area)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `Area` like ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************************/
	function SearchSinglephase_statusByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `Device_Status` like ? ");
		$stmt->bind_param("i",$Device_Status);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function SearchSinglephase_statusByFrequency($FREQUENCY)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `FREQUENCY` like ? ");
		$stmt->bind_param("i",$FREQUENCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function SearchSinglephase_statusBySmode($SMODE)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `SMODE` like ? ");
		$stmt->bind_param("i",$SMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function SearchSinglephase_statusByMmode($MMODE)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `MMODE` like ? ");
		$stmt->bind_param("i",$MMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function SearchSinglephase_statusByFault($FAULT)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `FAULT` like ? ");
		$stmt->bind_param("i",$FAULT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function SearchSinglephase_statusByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `R_WATT` like ? ");
		$stmt->bind_param("i",$R_WATT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function SearchSinglephase_statusByEnergy($ENERGY)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `ENERGY` like ? ");
		$stmt->bind_param("i",$ENERGY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : SearchSinglephase_statusByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function SearchSinglephase_statusByPhone($PHONE)
	{
		$conn = $this -> conn;
		$singlephase_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where `PHONE` like ? ");
		$stmt->bind_param("i",$PHONE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephase_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephase_statusArrayList;
	}
	/********************** [End : SearchSinglephase_statusByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/


	/********************** [Start : DeleteSinglephase_statusById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteSinglephase_statusById($ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `ID` = ? ");
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
	/********************** [End : DeleteSinglephase_statusById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function DeleteSinglephase_statusBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `SL_ID` = ? ");
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
	/********************** [End : DeleteSinglephase_statusBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByPower, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function DeleteSinglephase_statusByPower($POWER)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `POWER` = ? ");
		$stmt->bind_param("i",$POWER);
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
	/********************** [End : DeleteSinglephase_statusByPower, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByCurrent, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function DeleteSinglephase_statusByCurrent($CURRENT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `CURRENT` = ? ");
		$stmt->bind_param("i",$CURRENT);
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
	/********************** [End : DeleteSinglephase_statusByCurrent, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByVolt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteSinglephase_statusByVolt($VOLT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `VOLT` = ? ");
		$stmt->bind_param("i",$VOLT);
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
	/********************** [End : DeleteSinglephase_statusByVolt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByLow_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function DeleteSinglephase_statusByLow_volt($LOW_VOLT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `LOW_VOLT` = ? ");
		$stmt->bind_param("i",$LOW_VOLT);
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
	/********************** [End : DeleteSinglephase_statusByLow_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByHigh_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function DeleteSinglephase_statusByHigh_volt($HIGH_VOLT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `HIGH_VOLT` = ? ");
		$stmt->bind_param("i",$HIGH_VOLT);
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
	/********************** [End : DeleteSinglephase_statusByHigh_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByPf, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteSinglephase_statusByPf($PF)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `PF` = ? ");
		$stmt->bind_param("i",$PF);
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
	/********************** [End : DeleteSinglephase_statusByPf, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByHc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteSinglephase_statusByHc($HC)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `HC` = ? ");
		$stmt->bind_param("i",$HC);
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
	/********************** [End : DeleteSinglephase_statusByHc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByLc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteSinglephase_statusByLc($LC)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `LC` = ? ");
		$stmt->bind_param("i",$LC);
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
	/********************** [End : DeleteSinglephase_statusByLc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function DeleteSinglephase_statusByA_m_time($A_M_TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `A_M_TIME` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function DeleteSinglephase_statusByA_e_time($A_E_TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `A_E_TIME` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function DeleteSinglephase_statusByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `LONGITUDE` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/
	function DeleteSinglephase_statusByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `LATITUDE` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteSinglephase_statusByDate($DATE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `DATE` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteSinglephase_statusByTime($TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `TIME` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************************/
	function DeleteSinglephase_statusByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `Internetconnected` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteSinglephase_statusByArea($Area)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `Area` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************************/
	function DeleteSinglephase_statusByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `Device_Status` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************************/
	function DeleteSinglephase_statusByFrequency($FREQUENCY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `FREQUENCY` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function DeleteSinglephase_statusBySmode($SMODE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `SMODE` = ? ");
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
	/********************** [End : DeleteSinglephase_statusBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function DeleteSinglephase_statusByMmode($MMODE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `MMODE` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function DeleteSinglephase_statusByFault($FAULT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `FAULT` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function DeleteSinglephase_statusByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `R_WATT` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function DeleteSinglephase_statusByEnergy($ENERGY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `ENERGY` = ? ");
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
	/********************** [End : DeleteSinglephase_statusByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephase_statusByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/
	function DeleteSinglephase_statusByPhone($PHONE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase_status where `PHONE` = ? ");
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
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from singlephase_status where DATE between ? and ? and `SL_ID` = ? ");
		$stmt->bind_param("sss",$fdate,$tdate,$sid);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase_status();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($sl_statusArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $sl_statusArrayList;

	}
	/********************** [End : DeleteSinglephase_statusByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : Update Singlephase_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function UpdateSinglephase_status($singlephase_status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update singlephase_status set ID = ? ,SL_ID = ? ,POWER = ? ,CURRENT = ? ,VOLT = ? ,LOW_VOLT = ? ,HIGH_VOLT = ? ,PF = ? ,HC = ? ,LC = ? ,A_M_TIME = ? ,A_E_TIME = ? ,LONGITUDE = ? ,LATITUDE = ? ,DATE = ? ,TIME = ? ,Internetconnected = ? ,Area = ? ,Device_Status = ? ,FREQUENCY = ? ,SMODE = ? ,MMODE = ? ,FAULT = ? ,R_WATT = ? ,ENERGY = ? ,PHONE = ? where ID = ? ");
		$stmt->bind_param("isiiiiiiiissssssisiiiiiiiii",$singlephase_status->ID,$singlephase_status->SL_ID,$singlephase_status->POWER,$singlephase_status->CURRENT,$singlephase_status->VOLT,$singlephase_status->LOW_VOLT,$singlephase_status->HIGH_VOLT,$singlephase_status->PF,$singlephase_status->HC,$singlephase_status->LC,$singlephase_status->A_M_TIME,$singlephase_status->A_E_TIME,$singlephase_status->LONGITUDE,$singlephase_status->LATITUDE,$singlephase_status->DATE,$singlephase_status->TIME,$singlephase_status->Internetconnected,$singlephase_status->Area,$singlephase_status->Device_Status,$singlephase_status->FREQUENCY,$singlephase_status->SMODE,$singlephase_status->MMODE,$singlephase_status->FAULT,$singlephase_status->R_WATT,$singlephase_status->ENERGY,$singlephase_status->PHONE,$singlephase_status->ID);
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
	/********************** [End : Update Singlephase_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

}
?>
