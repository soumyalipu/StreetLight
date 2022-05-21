<?php
	class ModelSinglephase{
	/********************** [Start : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Singlephase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function InsertSinglephase($singlephase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO singlephase (ID,SL_ID,POWER,CURRENT,VOLT,LOW_VOLT,HIGH_VOLT,PF,HC,LC,A_M_TIME,A_E_TIME,LONGITUDE,LATITUDE,DATE,TIME,Internetconnected,Area,Device_Status,FREQUENCY,SMODE,MMODE,FAULT,R_WATT,ENERGY,PHONE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isiiiiiiiissssssisiiiiiiii",$singlephase->ID,$singlephase->SL_ID,$singlephase->POWER,$singlephase->CURRENT,$singlephase->VOLT,$singlephase->LOW_VOLT,$singlephase->HIGH_VOLT,$singlephase->PF,$singlephase->HC,$singlephase->LC,$singlephase->A_M_TIME,$singlephase->A_E_TIME,$singlephase->LONGITUDE,$singlephase->LATITUDE,$singlephase->DATE,$singlephase->TIME,$singlephase->Internetconnected,$singlephase->Area,$singlephase->Device_Status,$singlephase->FREQUENCY,$singlephase->SMODE,$singlephase->MMODE,$singlephase->FAULT,$singlephase->R_WATT,$singlephase->ENERGY,$singlephase->PHONE);
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
	function Insert1Singlephase($singlephase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO singlephase (ID,SL_ID,LONGITUDE,LATITUDE,DATE,TIME,Area,R_WATT) VALUES (?,?,?,?,?,?,?,?)");
		$stmt->bind_param("issssssi",$singlephase->ID,$singlephase->SL_ID,$singlephase->LONGITUDE,$singlephase->LATITUDE,$singlephase->DATE,$singlephase->TIME,$singlephase->Area,$singlephase->R_WATT);
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
	/********************** [End : Insert Singlephase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetAllSinglephase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/
	function GetAllSinglephase()
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseBySinglephase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetSinglephaseById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetSinglephaseById($ID)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `ID` = ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetSinglephaseBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetSinglephaseBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `SL_ID` = ? ");
		$stmt->bind_param("s",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByPower, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetSinglephaseByPower($POWER)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `POWER` = ? ");
		$stmt->bind_param("i",$POWER);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByPower, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByCurrent, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function GetSinglephaseByCurrent($CURRENT)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `CURRENT` = ? ");
		$stmt->bind_param("i",$CURRENT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByCurrent, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByVolt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetSinglephaseByVolt($VOLT)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `VOLT` = ? ");
		$stmt->bind_param("i",$VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByVolt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByLow_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetSinglephaseByLow_volt($LOW_VOLT)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `LOW_VOLT` = ? ");
		$stmt->bind_param("i",$LOW_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByLow_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByHigh_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetSinglephaseByHigh_volt($HIGH_VOLT)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `HIGH_VOLT` = ? ");
		$stmt->bind_param("i",$HIGH_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByHigh_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByPf, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetSinglephaseByPf($PF)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `PF` = ? ");
		$stmt->bind_param("i",$PF);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByPf, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetSinglephaseByHc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetSinglephaseByHc($HC)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `HC` = ? ");
		$stmt->bind_param("i",$HC);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByHc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetSinglephaseByLc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetSinglephaseByLc($LC)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `LC` = ? ");
		$stmt->bind_param("i",$LC);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByLc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetSinglephaseByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetSinglephaseByA_m_time($A_M_TIME)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `A_M_TIME` = ? ");
		$stmt->bind_param("s",$A_M_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetSinglephaseByA_e_time($A_E_TIME)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `A_E_TIME` = ? ");
		$stmt->bind_param("s",$A_E_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetSinglephaseByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `LONGITUDE` = ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetSinglephaseByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `LATITUDE` = ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetSinglephaseByDate($DATE)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `DATE` = ? ");
		$stmt->bind_param("s",$DATE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetSinglephaseByTime($TIME)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `TIME` = ? ");
		$stmt->bind_param("s",$TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************************/
	function GetSinglephaseByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `Internetconnected` = ? ");
		$stmt->bind_param("i",$Internetconnected);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetSinglephaseByArea($Area)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `Area` = ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/
	function GetSinglephaseByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `Device_Status` = ? ");
		$stmt->bind_param("i",$Device_Status);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetSinglephaseByFrequency($FREQUENCY)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `FREQUENCY` = ? ");
		$stmt->bind_param("i",$FREQUENCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetSinglephaseBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetSinglephaseBySmode($SMODE)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `SMODE` = ? ");
		$stmt->bind_param("i",$SMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetSinglephaseByMmode($MMODE)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `MMODE` = ? ");
		$stmt->bind_param("i",$MMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetSinglephaseByFault($FAULT)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `FAULT` = ? ");
		$stmt->bind_param("i",$FAULT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/
	function GetSinglephaseByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `R_WATT` = ? ");
		$stmt->bind_param("i",$R_WATT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/
	function GetSinglephaseByEnergy($ENERGY)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `ENERGY` = ? ");
		$stmt->bind_param("i",$ENERGY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : GetSinglephaseByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetSinglephaseByPhone($PHONE)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `PHONE` = ? ");
		$stmt->bind_param("i",$PHONE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : GetSinglephaseByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/


	/********************** [Start : SearchSinglephaseById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchSinglephaseById($ID)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `ID` like ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchSinglephaseBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `SL_ID` like ? ");
		$stmt->bind_param("s",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByPower, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchSinglephaseByPower($POWER)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `POWER` like ? ");
		$stmt->bind_param("i",$POWER);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByPower, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByCurrent, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function SearchSinglephaseByCurrent($CURRENT)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `CURRENT` like ? ");
		$stmt->bind_param("i",$CURRENT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByCurrent, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByVolt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchSinglephaseByVolt($VOLT)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `VOLT` like ? ");
		$stmt->bind_param("i",$VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByVolt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByLow_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchSinglephaseByLow_volt($LOW_VOLT)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `LOW_VOLT` like ? ");
		$stmt->bind_param("i",$LOW_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByLow_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByHigh_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchSinglephaseByHigh_volt($HIGH_VOLT)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `HIGH_VOLT` like ? ");
		$stmt->bind_param("i",$HIGH_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByHigh_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByPf, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchSinglephaseByPf($PF)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `PF` like ? ");
		$stmt->bind_param("i",$PF);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByPf, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByHc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchSinglephaseByHc($HC)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `HC` like ? ");
		$stmt->bind_param("i",$HC);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByHc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByLc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchSinglephaseByLc($LC)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `LC` like ? ");
		$stmt->bind_param("i",$LC);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByLc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchSinglephaseByA_m_time($A_M_TIME)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `A_M_TIME` like ? ");
		$stmt->bind_param("s",$A_M_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchSinglephaseByA_e_time($A_E_TIME)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `A_E_TIME` like ? ");
		$stmt->bind_param("s",$A_E_TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchSinglephaseByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `LONGITUDE` like ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchSinglephaseByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `LATITUDE` like ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchSinglephaseByDate($DATE)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `DATE` like ? ");
		$stmt->bind_param("s",$DATE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchSinglephaseByTime($TIME)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `TIME` like ? ");
		$stmt->bind_param("s",$TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************************/
	function SearchSinglephaseByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `Internetconnected` like ? ");
		$stmt->bind_param("i",$Internetconnected);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchSinglephaseByArea($Area)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `Area` like ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function SearchSinglephaseByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `Device_Status` like ? ");
		$stmt->bind_param("i",$Device_Status);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchSinglephaseByFrequency($FREQUENCY)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `FREQUENCY` like ? ");
		$stmt->bind_param("i",$FREQUENCY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchSinglephaseBySmode($SMODE)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `SMODE` like ? ");
		$stmt->bind_param("i",$SMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchSinglephaseByMmode($MMODE)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `MMODE` like ? ");
		$stmt->bind_param("i",$MMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchSinglephaseByFault($FAULT)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `FAULT` like ? ");
		$stmt->bind_param("i",$FAULT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function SearchSinglephaseByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `R_WATT` like ? ");
		$stmt->bind_param("i",$R_WATT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function SearchSinglephaseByEnergy($ENERGY)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `ENERGY` like ? ");
		$stmt->bind_param("i",$ENERGY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : SearchSinglephaseByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchSinglephaseByPhone($PHONE)
	{
		$conn = $this -> conn;
		$singlephaseArrayList = array();
		$stmt = $conn->prepare("select * from singlephase where `PHONE` like ? ");
		$stmt->bind_param("i",$PHONE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySinglephase();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($singlephaseArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $singlephaseArrayList;
	}
	/********************** [End : SearchSinglephaseByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/


	/********************** [Start : DeleteSinglephaseById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteSinglephaseById($ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `ID` = ? ");
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
	/********************** [End : DeleteSinglephaseById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteSinglephaseBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `SL_ID` = ? ");
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
	/********************** [End : DeleteSinglephaseBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByPower, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteSinglephaseByPower($POWER)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `POWER` = ? ");
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
	/********************** [End : DeleteSinglephaseByPower, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByCurrent, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/
	function DeleteSinglephaseByCurrent($CURRENT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `CURRENT` = ? ");
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
	/********************** [End : DeleteSinglephaseByCurrent, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByVolt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteSinglephaseByVolt($VOLT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `VOLT` = ? ");
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
	/********************** [End : DeleteSinglephaseByVolt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByLow_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteSinglephaseByLow_volt($LOW_VOLT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `LOW_VOLT` = ? ");
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
	/********************** [End : DeleteSinglephaseByLow_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByHigh_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteSinglephaseByHigh_volt($HIGH_VOLT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `HIGH_VOLT` = ? ");
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
	/********************** [End : DeleteSinglephaseByHigh_volt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByPf, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteSinglephaseByPf($PF)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `PF` = ? ");
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
	/********************** [End : DeleteSinglephaseByPf, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByHc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteSinglephaseByHc($HC)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `HC` = ? ");
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
	/********************** [End : DeleteSinglephaseByHc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByLc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteSinglephaseByLc($LC)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `LC` = ? ");
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
	/********************** [End : DeleteSinglephaseByLc, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteSinglephaseByA_m_time($A_M_TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `A_M_TIME` = ? ");
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
	/********************** [End : DeleteSinglephaseByA_m_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteSinglephaseByA_e_time($A_E_TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `A_E_TIME` = ? ");
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
	/********************** [End : DeleteSinglephaseByA_e_time, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteSinglephaseByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `LONGITUDE` = ? ");
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
	/********************** [End : DeleteSinglephaseByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteSinglephaseByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `LATITUDE` = ? ");
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
	/********************** [End : DeleteSinglephaseByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteSinglephaseByDate($DATE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `DATE` = ? ");
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
	/********************** [End : DeleteSinglephaseByDate, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteSinglephaseByTime($TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `TIME` = ? ");
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
	/********************** [End : DeleteSinglephaseByTime, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************************/
	function DeleteSinglephaseByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `Internetconnected` = ? ");
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
	/********************** [End : DeleteSinglephaseByInternetconnected, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteSinglephaseByArea($Area)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `Area` = ? ");
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
	/********************** [End : DeleteSinglephaseByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function DeleteSinglephaseByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `Device_Status` = ? ");
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
	/********************** [End : DeleteSinglephaseByDevice_status, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteSinglephaseByFrequency($FREQUENCY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `FREQUENCY` = ? ");
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
	/********************** [End : DeleteSinglephaseByFrequency, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteSinglephaseBySmode($SMODE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `SMODE` = ? ");
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
	/********************** [End : DeleteSinglephaseBySmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteSinglephaseByMmode($MMODE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `MMODE` = ? ");
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
	/********************** [End : DeleteSinglephaseByMmode, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteSinglephaseByFault($FAULT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `FAULT` = ? ");
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
	/********************** [End : DeleteSinglephaseByFault, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function DeleteSinglephaseByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `R_WATT` = ? ");
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
	/********************** [End : DeleteSinglephaseByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function DeleteSinglephaseByEnergy($ENERGY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `ENERGY` = ? ");
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
	/********************** [End : DeleteSinglephaseByEnergy, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : DeleteSinglephaseByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteSinglephaseByPhone($PHONE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from singlephase where `PHONE` = ? ");
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
	/********************** [End : DeleteSinglephaseByPhone, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : Update Singlephase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function UpdateSinglephase($singlephase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update singlephase set ID = ? ,SL_ID = ? ,POWER = ? ,CURRENT = ? ,VOLT = ? ,LOW_VOLT = ? ,HIGH_VOLT = ? ,PF = ? ,HC = ? ,LC = ? ,A_M_TIME = ? ,A_E_TIME = ? ,LONGITUDE = ? ,LATITUDE = ? ,DATE = ? ,TIME = ? ,Internetconnected = ? ,Area = ? ,Device_Status = ? ,FREQUENCY = ? ,SMODE = ? ,MMODE = ? ,FAULT = ? ,R_WATT = ? ,ENERGY = ? ,PHONE = ? where ID = ? ");
		$stmt->bind_param("isiiiiiiiissssssisiiiiiiiii",$singlephase->ID,$singlephase->SL_ID,$singlephase->POWER,$singlephase->CURRENT,$singlephase->VOLT,$singlephase->LOW_VOLT,$singlephase->HIGH_VOLT,$singlephase->PF,$singlephase->HC,$singlephase->LC,$singlephase->A_M_TIME,$singlephase->A_E_TIME,$singlephase->LONGITUDE,$singlephase->LATITUDE,$singlephase->DATE,$singlephase->TIME,$singlephase->Internetconnected,$singlephase->Area,$singlephase->Device_Status,$singlephase->FREQUENCY,$singlephase->SMODE,$singlephase->MMODE,$singlephase->FAULT,$singlephase->R_WATT,$singlephase->ENERGY,$singlephase->PHONE,$singlephase->ID);
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
	function UpdateSinglephasedata($singlephase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update singlephase set POWER = ? ,CURRENT = ? ,VOLT = ? ,PF = ? ,A_M_TIME = ? ,A_E_TIME = ? ,DATE = ? ,TIME = ? ,Device_Status = ? ,FREQUENCY = ? ,SMODE = ? ,MMODE = ?,FAULT = ? ,ENERGY = ?  where SL_ID = ? ");
		$stmt->bind_param("ddddssssidiiids",$singlephase->POWER,$singlephase->CURRENT,$singlephase->VOLT,$singlephase->PF,$singlephase->A_M_TIME,$singlephase->A_E_TIME,$singlephase->DATE,$singlephase->TIME,$singlephase->Device_Status,$singlephase->FREQUENCY,$singlephase->SMODE,$singlephase->MMODE,$singlephase->FAULT,$singlephase->ENERGY,$singlephase->SL_ID);
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
	function UpdateSinglephaseic($singlephase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update singlephase set Internetconnected = ? where SL_ID = ? ");
		$stmt->bind_param("is",$singlephase->Internetconnected,$singlephase->SL_ID);
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
	function updateSiglephasehighvolt($singlephase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update singlephase set HIGH_VOLT = ? where SL_ID = ? ");
		$stmt->bind_param("is",$singlephase->HIGH_VOLT,$singlephase->SL_ID);
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
	function updateSiglephaselowvolt($singlephase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update singlephase set LOW_VOLT = ? where SL_ID = ? ");
		$stmt->bind_param("is",$singlephase->LOW_VOLT,$singlephase->SL_ID);
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
	function updateSiglephasehC($singlephase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update singlephase set HC = ? where SL_ID = ? ");
		$stmt->bind_param("is",$singlephase->HC,$singlephase->SL_ID);
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
	function updateSiglephaselC($singlephase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update singlephase set LC = ? where SL_ID = ? ");
		$stmt->bind_param("is",$singlephase->LC,$singlephase->SL_ID);
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
	function UpdateSlSMODE($singlephase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update singlephase set SMODE = ? where SL_ID = ? ");
		$stmt->bind_param("is",$singlephase->SMODE,$singlephase->SL_ID);
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
	function UpdateSlMMODE($singlephase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update singlephase set MMODE = ? ,Device_Status=? where SL_ID = ? ");
		$stmt->bind_param("iis",$singlephase->MMODE,$singlephase->Device_Status,$singlephase->SL_ID);
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
	function AdminUpdateSl($singlephase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update singlephase set Area = ? ,LONGITUDE = ? ,LATITUDE = ? where SL_ID = ? ");
		$stmt->bind_param("ssss",$singlephase->Area,$singlephase->LONGITUDE,$singlephase->LATITUDE,$singlephase->SL_ID);
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
	function AdminUpdatePH($singlephase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update singlephase set PHONE = ? where SL_ID = ? ");
		$stmt->bind_param("is",$singlephase->PHONE,$singlephase->SL_ID);
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
	/********************** [End : Update Singlephase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

}
?>
