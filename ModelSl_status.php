<?php
	class ModelSl_status{
	/********************** [Start : Cunstructer, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Sl_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/
	function InsertSl_status($sl_status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO sl_status (ID,SL_ID,SL_PASS,POWER,CURRENT,VOLT,LOW_VOLT,HIGH_VOLT,D1,D2,D3,D4,ADC1,ADC2,ADC3,ADC4,LONGITUDE,LATITUDE,DATE,TIME,Internetconnected,Area,Device_Status,VOLTR,VOLTB,VOLTY,HVR,HVB,HBY,LVR,LVB,LVY,CY,CR,CB,PHASE,SMODE,MMODE,FAULT) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("iisiiiiiiiiiiiiissssisissssssssssssiiii",$sl_status->ID,$sl_status->SL_ID,$sl_status->SL_PASS,$sl_status->POWER,$sl_status->CURRENT,$sl_status->VOLT,$sl_status->LOW_VOLT,$sl_status->HIGH_VOLT,$sl_status->D1,$sl_status->D2,$sl_status->D3,$sl_status->D4,$sl_status->ADC1,$sl_status->ADC2,$sl_status->ADC3,$sl_status->ADC4,$sl_status->LONGITUDE,$sl_status->LATITUDE,$sl_status->DATE,$sl_status->TIME,$sl_status->Internetconnected,$sl_status->Area,$sl_status->Device_Status,$sl_status->VOLTR,$sl_status->VOLTB,$sl_status->VOLTY,$sl_status->HVR,$sl_status->HVB,$sl_status->HBY,$sl_status->LVR,$sl_status->LVB,$sl_status->LVY,$sl_status->CY,$sl_status->CR,$sl_status->CB,$sl_status->PHASE,$sl_status->SMODE,$sl_status->MMODE,$sl_status->FAULT);
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
	function InsertSl_statusTESTAPI($sl_status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO sl_status (ID,SL_ID,Internetconnected) VALUES (?,?,?)");
		$stmt->bind_param("iii",$sl_status->ID,$sl_status->SL_ID,$sl_status->Internetconnected);
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
	
	/********************** [End : Insert Sl_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/

	/********************** [Start : GetAllSl_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function GetAllSl_status()
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusBySl_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : GetSl_statusById, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/
	function GetSl_statusById($ID)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `ID` = ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusById, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/

	/********************** [Start : GetSl_statusBySl_id, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function GetSl_statusBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `SL_ID` = ? ");
		$stmt->bind_param("i",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusBySl_id, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetSl_statusBySl_pass, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function GetSl_statusBySl_pass($SL_PASS)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `SL_PASS` = ? ");
		$stmt->bind_param("s",$SL_PASS);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusBySl_pass, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetSl_statusByPower, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function GetSl_statusByPower($POWER)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `POWER` = ? ");
		$stmt->bind_param("i",$POWER);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByPower, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetSl_statusByCurrent, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function GetSl_statusByCurrent($CURRENT)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `CURRENT` = ? ");
		$stmt->bind_param("i",$CURRENT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByCurrent, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetSl_statusByVolt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/
	function GetSl_statusByVolt($VOLT)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `VOLT` = ? ");
		$stmt->bind_param("i",$VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByVolt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetSl_statusByLow_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function GetSl_statusByLow_volt($LOW_VOLT)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `LOW_VOLT` = ? ");
		$stmt->bind_param("i",$LOW_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByLow_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : GetSl_statusByHigh_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************************/
	function GetSl_statusByHigh_volt($HIGH_VOLT)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `HIGH_VOLT` = ? ");
		$stmt->bind_param("i",$HIGH_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByHigh_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : GetSl_statusByD1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/
	function GetSl_statusByD1($D1)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `D1` = ? ");
		$stmt->bind_param("i",$D1);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByD1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/

	/********************** [Start : GetSl_statusByD2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/
	function GetSl_statusByD2($D2)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `D2` = ? ");
		$stmt->bind_param("i",$D2);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByD2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/

	/********************** [Start : GetSl_statusByD3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/
	function GetSl_statusByD3($D3)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `D3` = ? ");
		$stmt->bind_param("i",$D3);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByD3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/

	/********************** [Start : GetSl_statusByD4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/
	function GetSl_statusByD4($D4)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `D4` = ? ");
		$stmt->bind_param("i",$D4);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByD4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/

	/********************** [Start : GetSl_statusByAdc1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/
	function GetSl_statusByAdc1($ADC1)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `ADC1` = ? ");
		$stmt->bind_param("i",$ADC1);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByAdc1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetSl_statusByAdc2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/
	function GetSl_statusByAdc2($ADC2)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `ADC2` = ? ");
		$stmt->bind_param("i",$ADC2);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByAdc2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetSl_statusByAdc3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/
	function GetSl_statusByAdc3($ADC3)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `ADC3` = ? ");
		$stmt->bind_param("i",$ADC3);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByAdc3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetSl_statusByAdc4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/
	function GetSl_statusByAdc4($ADC4)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `ADC4` = ? ");
		$stmt->bind_param("i",$ADC4);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByAdc4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetSl_statusByLongitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************************/
	function GetSl_statusByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `LONGITUDE` = ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByLongitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : GetSl_statusByLatitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function GetSl_statusByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `LATITUDE` = ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByLatitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : GetSl_statusByDate, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/
	function GetSl_statusByDate($DATE)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `DATE` = ? ");
		$stmt->bind_param("s",$DATE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByDate, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetSl_statusByTime, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/
	function GetSl_statusByTime($TIME)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `TIME` = ? ");
		$stmt->bind_param("s",$TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByTime, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetSl_statusByInternetconnected, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************************/
	function GetSl_statusByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `Internetconnected` = ? ");
		$stmt->bind_param("i",$Internetconnected);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByInternetconnected, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : GetSl_statusByArea, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/
	function GetSl_statusByArea($Area)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `Area` = ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByArea, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetSl_statusByDevice_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetSl_statusByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `Device_Status` = ? ");
		$stmt->bind_param("i",$Device_Status);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByDevice_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetSl_statusByVoltr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function GetSl_statusByVoltr($VOLTR)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `VOLTR` = ? ");
		$stmt->bind_param("s",$VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByVoltr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetSl_statusByVoltb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function GetSl_statusByVoltb($VOLTB)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `VOLTB` = ? ");
		$stmt->bind_param("s",$VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByVoltb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetSl_statusByVolty, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function GetSl_statusByVolty($VOLTY)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `VOLTY` = ? ");
		$stmt->bind_param("s",$VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByVolty, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetSl_statusByHvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/
	function GetSl_statusByHvr($HVR)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `HVR` = ? ");
		$stmt->bind_param("s",$HVR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByHvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : GetSl_statusByHvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/
	function GetSl_statusByHvb($HVB)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `HVB` = ? ");
		$stmt->bind_param("s",$HVB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByHvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : GetSl_statusByHby, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/
	function GetSl_statusByHby($HBY)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `HBY` = ? ");
		$stmt->bind_param("s",$HBY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByHby, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : GetSl_statusByLvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/
	function GetSl_statusByLvr($LVR)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `LVR` = ? ");
		$stmt->bind_param("s",$LVR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByLvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : GetSl_statusByLvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/
	function GetSl_statusByLvb($LVB)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `LVB` = ? ");
		$stmt->bind_param("s",$LVB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByLvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : GetSl_statusByLvy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/
	function GetSl_statusByLvy($LVY)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `LVY` = ? ");
		$stmt->bind_param("s",$LVY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByLvy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : GetSl_statusByCy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/
	function GetSl_statusByCy($CY)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `CY` = ? ");
		$stmt->bind_param("s",$CY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByCy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/

	/********************** [Start : GetSl_statusByCr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/
	function GetSl_statusByCr($CR)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `CR` = ? ");
		$stmt->bind_param("s",$CR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByCr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/

	/********************** [Start : GetSl_statusByCb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/
	function GetSl_statusByCb($CB)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `CB` = ? ");
		$stmt->bind_param("s",$CB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByCb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/

	/********************** [Start : GetSl_statusByPhase, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function GetSl_statusByPhase($PHASE)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `PHASE` = ? ");
		$stmt->bind_param("i",$PHASE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByPhase, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetSl_statusBySmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function GetSl_statusBySmode($SMODE)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `SMODE` = ? ");
		$stmt->bind_param("i",$SMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusBySmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetSl_statusByMmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function GetSl_statusByMmode($MMODE)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `MMODE` = ? ");
		$stmt->bind_param("i",$MMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByMmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetSl_statusByFault, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function GetSl_statusByFault($FAULT)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `FAULT` = ? ");
		$stmt->bind_param("i",$FAULT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : GetSl_statusByFault, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/


	/********************** [Start : SearchSl_statusById, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function SearchSl_statusById($ID)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `ID` like ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusById, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : SearchSl_statusBySl_id, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchSl_statusBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `SL_ID` like ? ");
		$stmt->bind_param("i",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusBySl_id, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchSl_statusBySl_pass, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchSl_statusBySl_pass($SL_PASS)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `SL_PASS` like ? ");
		$stmt->bind_param("s",$SL_PASS);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusBySl_pass, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByPower, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchSl_statusByPower($POWER)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `POWER` like ? ");
		$stmt->bind_param("i",$POWER);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByPower, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByCurrent, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchSl_statusByCurrent($CURRENT)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `CURRENT` like ? ");
		$stmt->bind_param("i",$CURRENT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByCurrent, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByVolt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchSl_statusByVolt($VOLT)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `VOLT` like ? ");
		$stmt->bind_param("i",$VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByVolt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByLow_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************************/
	function SearchSl_statusByLow_volt($LOW_VOLT)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `LOW_VOLT` like ? ");
		$stmt->bind_param("i",$LOW_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByLow_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByHigh_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************************/
	function SearchSl_statusByHigh_volt($HIGH_VOLT)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `HIGH_VOLT` like ? ");
		$stmt->bind_param("i",$HIGH_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByHigh_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByD1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function SearchSl_statusByD1($D1)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `D1` like ? ");
		$stmt->bind_param("i",$D1);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByD1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByD2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function SearchSl_statusByD2($D2)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `D2` like ? ");
		$stmt->bind_param("i",$D2);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByD2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByD3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function SearchSl_statusByD3($D3)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `D3` like ? ");
		$stmt->bind_param("i",$D3);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByD3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByD4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function SearchSl_statusByD4($D4)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `D4` like ? ");
		$stmt->bind_param("i",$D4);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByD4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByAdc1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchSl_statusByAdc1($ADC1)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `ADC1` like ? ");
		$stmt->bind_param("i",$ADC1);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByAdc1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByAdc2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchSl_statusByAdc2($ADC2)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `ADC2` like ? ");
		$stmt->bind_param("i",$ADC2);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByAdc2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByAdc3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchSl_statusByAdc3($ADC3)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `ADC3` like ? ");
		$stmt->bind_param("i",$ADC3);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByAdc3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByAdc4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchSl_statusByAdc4($ADC4)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `ADC4` like ? ");
		$stmt->bind_param("i",$ADC4);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByAdc4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByLongitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************************/
	function SearchSl_statusByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `LONGITUDE` like ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByLongitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByLatitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************************/
	function SearchSl_statusByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `LATITUDE` like ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByLatitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByDate, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchSl_statusByDate($DATE)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `DATE` like ? ");
		$stmt->bind_param("s",$DATE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByDate, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByTime, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchSl_statusByTime($TIME)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `TIME` like ? ");
		$stmt->bind_param("s",$TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByTime, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByInternetconnected, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************************/
	function SearchSl_statusByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `Internetconnected` like ? ");
		$stmt->bind_param("i",$Internetconnected);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByInternetconnected, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByArea, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchSl_statusByArea($Area)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `Area` like ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByArea, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByDevice_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchSl_statusByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `Device_Status` like ? ");
		$stmt->bind_param("i",$Device_Status);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByDevice_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByVoltr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchSl_statusByVoltr($VOLTR)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `VOLTR` like ? ");
		$stmt->bind_param("s",$VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByVoltr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByVoltb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchSl_statusByVoltb($VOLTB)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `VOLTB` like ? ");
		$stmt->bind_param("s",$VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByVoltb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByVolty, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchSl_statusByVolty($VOLTY)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `VOLTY` like ? ");
		$stmt->bind_param("s",$VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByVolty, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByHvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/
	function SearchSl_statusByHvr($HVR)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `HVR` like ? ");
		$stmt->bind_param("s",$HVR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByHvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByHvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/
	function SearchSl_statusByHvb($HVB)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `HVB` like ? ");
		$stmt->bind_param("s",$HVB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByHvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByHby, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/
	function SearchSl_statusByHby($HBY)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `HBY` like ? ");
		$stmt->bind_param("s",$HBY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByHby, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByLvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/
	function SearchSl_statusByLvr($LVR)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `LVR` like ? ");
		$stmt->bind_param("s",$LVR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByLvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByLvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/
	function SearchSl_statusByLvb($LVB)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `LVB` like ? ");
		$stmt->bind_param("s",$LVB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByLvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByLvy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/
	function SearchSl_statusByLvy($LVY)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `LVY` like ? ");
		$stmt->bind_param("s",$LVY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByLvy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByCy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function SearchSl_statusByCy($CY)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `CY` like ? ");
		$stmt->bind_param("s",$CY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByCy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByCr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function SearchSl_statusByCr($CR)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `CR` like ? ");
		$stmt->bind_param("s",$CR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByCr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByCb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function SearchSl_statusByCb($CB)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `CB` like ? ");
		$stmt->bind_param("s",$CB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByCb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByPhase, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchSl_statusByPhase($PHASE)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `PHASE` like ? ");
		$stmt->bind_param("i",$PHASE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByPhase, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchSl_statusBySmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchSl_statusBySmode($SMODE)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `SMODE` like ? ");
		$stmt->bind_param("i",$SMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusBySmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByMmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchSl_statusByMmode($MMODE)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `MMODE` like ? ");
		$stmt->bind_param("i",$MMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByMmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchSl_statusByFault, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchSl_statusByFault($FAULT)
	{
		$conn = $this -> conn;
		$sl_statusArrayList = array();
		$stmt = $conn->prepare("select * from sl_status where `FAULT` like ? ");
		$stmt->bind_param("i",$FAULT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	/********************** [End : SearchSl_statusByFault, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/


	/********************** [Start : DeleteSl_statusById, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function DeleteSl_statusById($ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `ID` = ? ");
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
	/********************** [End : DeleteSl_statusById, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusBySl_id, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteSl_statusBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `SL_ID` = ? ");
		$stmt->bind_param("i",$SL_ID);
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
	/********************** [End : DeleteSl_statusBySl_id, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusBySl_pass, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteSl_statusBySl_pass($SL_PASS)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `SL_PASS` = ? ");
		$stmt->bind_param("s",$SL_PASS);
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
	/********************** [End : DeleteSl_statusBySl_pass, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByPower, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteSl_statusByPower($POWER)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `POWER` = ? ");
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
	/********************** [End : DeleteSl_statusByPower, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByCurrent, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteSl_statusByCurrent($CURRENT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `CURRENT` = ? ");
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
	/********************** [End : DeleteSl_statusByCurrent, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByVolt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteSl_statusByVolt($VOLT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `VOLT` = ? ");
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
	/********************** [End : DeleteSl_statusByVolt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByLow_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************************/
	function DeleteSl_statusByLow_volt($LOW_VOLT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `LOW_VOLT` = ? ");
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
	/********************** [End : DeleteSl_statusByLow_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByHigh_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************************/
	function DeleteSl_statusByHigh_volt($HIGH_VOLT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `HIGH_VOLT` = ? ");
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
	/********************** [End : DeleteSl_statusByHigh_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByD1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function DeleteSl_statusByD1($D1)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `D1` = ? ");
		$stmt->bind_param("i",$D1);
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
	/********************** [End : DeleteSl_statusByD1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByD2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function DeleteSl_statusByD2($D2)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `D2` = ? ");
		$stmt->bind_param("i",$D2);
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
	/********************** [End : DeleteSl_statusByD2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByD3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function DeleteSl_statusByD3($D3)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `D3` = ? ");
		$stmt->bind_param("i",$D3);
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
	/********************** [End : DeleteSl_statusByD3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByD4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function DeleteSl_statusByD4($D4)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `D4` = ? ");
		$stmt->bind_param("i",$D4);
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
	/********************** [End : DeleteSl_statusByD4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByAdc1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteSl_statusByAdc1($ADC1)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `ADC1` = ? ");
		$stmt->bind_param("i",$ADC1);
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
	/********************** [End : DeleteSl_statusByAdc1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByAdc2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteSl_statusByAdc2($ADC2)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `ADC2` = ? ");
		$stmt->bind_param("i",$ADC2);
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
	/********************** [End : DeleteSl_statusByAdc2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByAdc3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteSl_statusByAdc3($ADC3)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `ADC3` = ? ");
		$stmt->bind_param("i",$ADC3);
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
	/********************** [End : DeleteSl_statusByAdc3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByAdc4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteSl_statusByAdc4($ADC4)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `ADC4` = ? ");
		$stmt->bind_param("i",$ADC4);
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
	/********************** [End : DeleteSl_statusByAdc4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByLongitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************************/
	function DeleteSl_statusByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `LONGITUDE` = ? ");
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
	/********************** [End : DeleteSl_statusByLongitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByLatitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************************/
	function DeleteSl_statusByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `LATITUDE` = ? ");
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
	/********************** [End : DeleteSl_statusByLatitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByDate, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteSl_statusByDate($DATE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `DATE` = ? ");
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
	/********************** [End : DeleteSl_statusByDate, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByTime, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteSl_statusByTime($TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `TIME` = ? ");
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
	/********************** [End : DeleteSl_statusByTime, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByInternetconnected, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************************/
	function DeleteSl_statusByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `Internetconnected` = ? ");
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
	/********************** [End : DeleteSl_statusByInternetconnected, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByArea, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteSl_statusByArea($Area)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `Area` = ? ");
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
	/********************** [End : DeleteSl_statusByArea, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByDevice_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteSl_statusByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `Device_Status` = ? ");
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
	/********************** [End : DeleteSl_statusByDevice_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByVoltr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteSl_statusByVoltr($VOLTR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `VOLTR` = ? ");
		$stmt->bind_param("s",$VOLTR);
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
	/********************** [End : DeleteSl_statusByVoltr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByVoltb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteSl_statusByVoltb($VOLTB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `VOLTB` = ? ");
		$stmt->bind_param("s",$VOLTB);
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
	/********************** [End : DeleteSl_statusByVoltb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByVolty, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteSl_statusByVolty($VOLTY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `VOLTY` = ? ");
		$stmt->bind_param("s",$VOLTY);
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
	/********************** [End : DeleteSl_statusByVolty, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByHvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/
	function DeleteSl_statusByHvr($HVR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `HVR` = ? ");
		$stmt->bind_param("s",$HVR);
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
	/********************** [End : DeleteSl_statusByHvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByHvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/
	function DeleteSl_statusByHvb($HVB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `HVB` = ? ");
		$stmt->bind_param("s",$HVB);
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
	/********************** [End : DeleteSl_statusByHvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByHby, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/
	function DeleteSl_statusByHby($HBY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `HBY` = ? ");
		$stmt->bind_param("s",$HBY);
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
	/********************** [End : DeleteSl_statusByHby, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByLvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/
	function DeleteSl_statusByLvr($LVR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `LVR` = ? ");
		$stmt->bind_param("s",$LVR);
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
	/********************** [End : DeleteSl_statusByLvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByLvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/
	function DeleteSl_statusByLvb($LVB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `LVB` = ? ");
		$stmt->bind_param("s",$LVB);
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
	/********************** [End : DeleteSl_statusByLvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByLvy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/
	function DeleteSl_statusByLvy($LVY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `LVY` = ? ");
		$stmt->bind_param("s",$LVY);
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
	/********************** [End : DeleteSl_statusByLvy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByCy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function DeleteSl_statusByCy($CY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `CY` = ? ");
		$stmt->bind_param("s",$CY);
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
	/********************** [End : DeleteSl_statusByCy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByCr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function DeleteSl_statusByCr($CR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `CR` = ? ");
		$stmt->bind_param("s",$CR);
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
	/********************** [End : DeleteSl_statusByCr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByCb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function DeleteSl_statusByCb($CB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `CB` = ? ");
		$stmt->bind_param("s",$CB);
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
	/********************** [End : DeleteSl_statusByCb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByPhase, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteSl_statusByPhase($PHASE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `PHASE` = ? ");
		$stmt->bind_param("i",$PHASE);
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
	/********************** [End : DeleteSl_statusByPhase, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusBySmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteSl_statusBySmode($SMODE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `SMODE` = ? ");
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
	/********************** [End : DeleteSl_statusBySmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByMmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteSl_statusByMmode($MMODE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `MMODE` = ? ");
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
	/********************** [End : DeleteSl_statusByMmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteSl_statusByFault, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteSl_statusByFault($FAULT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl_status where `FAULT` = ? ");
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
	/********************** [End : DeleteSl_statusByFault, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : Update Sl_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/
	function UpdateSl_status($sl_status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl_status set ID = ? ,SL_ID = ? ,SL_PASS = ? ,POWER = ? ,CURRENT = ? ,VOLT = ? ,LOW_VOLT = ? ,HIGH_VOLT = ? ,D1 = ? ,D2 = ? ,D3 = ? ,D4 = ? ,ADC1 = ? ,ADC2 = ? ,ADC3 = ? ,ADC4 = ? ,LONGITUDE = ? ,LATITUDE = ? ,DATE = ? ,TIME = ? ,Internetconnected = ? ,Area = ? ,Device_Status = ? ,VOLTR = ? ,VOLTB = ? ,VOLTY = ? ,HVR = ? ,HVB = ? ,HBY = ? ,LVR = ? ,LVB = ? ,LVY = ? ,CY = ? ,CR = ? ,CB = ? ,PHASE = ? ,SMODE = ? ,MMODE = ? ,FAULT = ? where ID = ? ");
		$stmt->bind_param("iisiiiiiiiiiiiiissssisissssssssssssiiiii",$sl_status->ID,$sl_status->SL_ID,$sl_status->SL_PASS,$sl_status->POWER,$sl_status->CURRENT,$sl_status->VOLT,$sl_status->LOW_VOLT,$sl_status->HIGH_VOLT,$sl_status->D1,$sl_status->D2,$sl_status->D3,$sl_status->D4,$sl_status->ADC1,$sl_status->ADC2,$sl_status->ADC3,$sl_status->ADC4,$sl_status->LONGITUDE,$sl_status->LATITUDE,$sl_status->DATE,$sl_status->TIME,$sl_status->Internetconnected,$sl_status->Area,$sl_status->Device_Status,$sl_status->VOLTR,$sl_status->VOLTB,$sl_status->VOLTY,$sl_status->HVR,$sl_status->HVB,$sl_status->HBY,$sl_status->LVR,$sl_status->LVB,$sl_status->LVY,$sl_status->CY,$sl_status->CR,$sl_status->CB,$sl_status->PHASE,$sl_status->SMODE,$sl_status->MMODE,$sl_status->FAULT,$sl_status->ID);
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
		$stmt = $conn->prepare("select * from sl_status where DATE between ? and ? and `SL_ID` = ? ");
		$stmt->bind_param("ssi",$fdate,$tdate,$sid);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl_status();
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
	
	/********************** [End : Update Sl_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/

}
?>
