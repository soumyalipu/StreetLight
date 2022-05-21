<?php
	class ModelSl{
	/********************** [Start : Cunstructer, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Sl, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/
	function InsertSl($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO sl (ID,SL_ID,SL_PASS,POWER,CURRENT,VOLT,LOW_VOLT,HIGH_VOLT,D1,D2,D3,D4,ADC1,ADC2,ADC3,ADC4,LONGITUDE,LATITUDE,DATE,TIME,Internetconnected,Area,Device_Status,VOLTR,VOLTB,VOLTY,HVR,HVB,HBY,LVR,LVB,LVY,CY,CR,CB,PHASE,SMODE,MMODE,FAULT) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("iisiiiiiiiiiiiiissssisissssssssssssiiii",$sl->ID,$sl->SL_ID,$sl->SL_PASS,$sl->POWER,$sl->CURRENT,$sl->VOLT,$sl->LOW_VOLT,$sl->HIGH_VOLT,$sl->D1,$sl->D2,$sl->D3,$sl->D4,$sl->ADC1,$sl->ADC2,$sl->ADC3,$sl->ADC4,$sl->LONGITUDE,$sl->LATITUDE,$sl->DATE,$sl->TIME,$sl->Internetconnected,$sl->Area,$sl->Device_Status,$sl->VOLTR,$sl->VOLTB,$sl->VOLTY,$sl->HVR,$sl->HVB,$sl->HBY,$sl->LVR,$sl->LVB,$sl->LVY,$sl->CY,$sl->CR,$sl->CB,$sl->PHASE,$sl->SMODE,$sl->MMODE,$sl->FAULT);
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
	/********************** [End : Insert Sl, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************/

	/********************** [Start : GetAllSl, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************/
	function GetAllSl()
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	function GetLastSl(){
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl ORDER BY ID DESC LIMIT 1 ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlBySl, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************/

	/********************** [Start : GetSlById, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/
	function GetSlById($ID)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `ID` = ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlById, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************/

	/********************** [Start : GetSlBySl_id, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function GetSlBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `SL_ID` = ? ");
		$stmt->bind_param("i",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	function GetSlBySl_idAndPhase($SL_ID,$Phase)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `SL_ID` = ? && `PHASE`=?");
		$stmt->bind_param("iS",$SL_ID,$Phase);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlBySl_id, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : GetSlBySl_pass, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function GetSlBySl_pass($SL_PASS)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `SL_PASS` = ? ");
		$stmt->bind_param("s",$SL_PASS);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlBySl_pass, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : GetSlByPower, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function GetSlByPower($POWER)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `POWER` = ? ");
		$stmt->bind_param("i",$POWER);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByPower, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : GetSlByCurrent, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function GetSlByCurrent($CURRENT)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `CURRENT` = ? ");
		$stmt->bind_param("i",$CURRENT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByCurrent, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : GetSlByVolt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/
	function GetSlByVolt($VOLT)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `VOLT` = ? ");
		$stmt->bind_param("i",$VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByVolt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : GetSlByLow_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function GetSlByLow_volt($LOW_VOLT)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `LOW_VOLT` = ? ");
		$stmt->bind_param("i",$LOW_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByLow_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : GetSlByHigh_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/
	function GetSlByHigh_volt($HIGH_VOLT)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `HIGH_VOLT` = ? ");
		$stmt->bind_param("i",$HIGH_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByHigh_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/

	/********************** [Start : GetSlByD1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/
	function GetSlByD1($D1)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `D1` = ? ");
		$stmt->bind_param("i",$D1);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByD1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************/

	/********************** [Start : GetSlByD2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/
	function GetSlByD2($D2)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `D2` = ? ");
		$stmt->bind_param("i",$D2);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByD2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************/

	/********************** [Start : GetSlByD3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/
	function GetSlByD3($D3)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `D3` = ? ");
		$stmt->bind_param("i",$D3);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByD3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************/

	/********************** [Start : GetSlByD4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/
	function GetSlByD4($D4)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `D4` = ? ");
		$stmt->bind_param("i",$D4);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByD4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************/

	/********************** [Start : GetSlByAdc1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/
	function GetSlByAdc1($ADC1)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `ADC1` = ? ");
		$stmt->bind_param("i",$ADC1);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByAdc1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : GetSlByAdc2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/
	function GetSlByAdc2($ADC2)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `ADC2` = ? ");
		$stmt->bind_param("i",$ADC2);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByAdc2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : GetSlByAdc3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/
	function GetSlByAdc3($ADC3)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `ADC3` = ? ");
		$stmt->bind_param("i",$ADC3);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByAdc3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : GetSlByAdc4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/
	function GetSlByAdc4($ADC4)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `ADC4` = ? ");
		$stmt->bind_param("i",$ADC4);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByAdc4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : GetSlByLongitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/
	function GetSlByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `LONGITUDE` = ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByLongitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/

	/********************** [Start : GetSlByLatitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function GetSlByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `LATITUDE` = ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByLatitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : GetSlByDate, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/
	function GetSlByDate($DATE)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `DATE` = ? ");
		$stmt->bind_param("s",$DATE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByDate, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : GetSlByTime, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/
	function GetSlByTime($TIME)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `TIME` = ? ");
		$stmt->bind_param("s",$TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByTime, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : GetSlByInternetconnected, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetSlByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `Internetconnected` = ? ");
		$stmt->bind_param("i",$Internetconnected);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByInternetconnected, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetSlByArea, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/
	function GetSlByArea($Area)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `Area` = ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByArea, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : GetSlByDevice_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************************/
	function GetSlByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `Device_Status` = ? ");
		$stmt->bind_param("i",$Device_Status);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByDevice_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetSlByVoltr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function GetSlByVoltr($VOLTR)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `VOLTR` = ? ");
		$stmt->bind_param("s",$VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByVoltr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : GetSlByVoltb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function GetSlByVoltb($VOLTB)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `VOLTB` = ? ");
		$stmt->bind_param("s",$VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByVoltb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : GetSlByVolty, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function GetSlByVolty($VOLTY)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `VOLTY` = ? ");
		$stmt->bind_param("s",$VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByVolty, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : GetSlByHvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/
	function GetSlByHvr($HVR)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `HVR` = ? ");
		$stmt->bind_param("s",$HVR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByHvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************/

	/********************** [Start : GetSlByHvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/
	function GetSlByHvb($HVB)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `HVB` = ? ");
		$stmt->bind_param("s",$HVB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByHvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************/

	/********************** [Start : GetSlByHby, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/
	function GetSlByHby($HBY)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `HBY` = ? ");
		$stmt->bind_param("s",$HBY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByHby, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************/

	/********************** [Start : GetSlByLvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/
	function GetSlByLvr($LVR)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `LVR` = ? ");
		$stmt->bind_param("s",$LVR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByLvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************/

	/********************** [Start : GetSlByLvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/
	function GetSlByLvb($LVB)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `LVB` = ? ");
		$stmt->bind_param("s",$LVB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByLvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************/

	/********************** [Start : GetSlByLvy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/
	function GetSlByLvy($LVY)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `LVY` = ? ");
		$stmt->bind_param("s",$LVY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByLvy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***************************************************************************************************************/

	/********************** [Start : GetSlByCy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/
	function GetSlByCy($CY)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `CY` = ? ");
		$stmt->bind_param("s",$CY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByCy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************/

	/********************** [Start : GetSlByCr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/
	function GetSlByCr($CR)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `CR` = ? ");
		$stmt->bind_param("s",$CR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByCr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************/

	/********************** [Start : GetSlByCb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/
	function GetSlByCb($CB)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `CB` = ? ");
		$stmt->bind_param("s",$CB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByCb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************/

	/********************** [Start : GetSlByPhase, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function GetSlByPhase($PHASE)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `PHASE` = ? ");
		$stmt->bind_param("i",$PHASE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByPhase, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : GetSlBySmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function GetSlBySmode($SMODE)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `SMODE` = ? ");
		$stmt->bind_param("i",$SMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlBySmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : GetSlByMmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function GetSlByMmode($MMODE)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `MMODE` = ? ");
		$stmt->bind_param("i",$MMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByMmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : GetSlByFault, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function GetSlByFault($FAULT)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `FAULT` = ? ");
		$stmt->bind_param("i",$FAULT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : GetSlByFault, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/


	/********************** [Start : SearchSlById, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function SearchSlById($ID)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `ID` like ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlById, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : SearchSlBySl_id, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function SearchSlBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `SL_ID` like ? ");
		$stmt->bind_param("i",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlBySl_id, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : SearchSlBySl_pass, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/
	function SearchSlBySl_pass($SL_PASS)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `SL_PASS` like ? ");
		$stmt->bind_param("s",$SL_PASS);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlBySl_pass, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : SearchSlByPower, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function SearchSlByPower($POWER)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `POWER` like ? ");
		$stmt->bind_param("i",$POWER);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByPower, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : SearchSlByCurrent, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/
	function SearchSlByCurrent($CURRENT)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `CURRENT` like ? ");
		$stmt->bind_param("i",$CURRENT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByCurrent, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : SearchSlByVolt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function SearchSlByVolt($VOLT)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `VOLT` like ? ");
		$stmt->bind_param("i",$VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByVolt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : SearchSlByLow_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/
	function SearchSlByLow_volt($LOW_VOLT)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `LOW_VOLT` like ? ");
		$stmt->bind_param("i",$LOW_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByLow_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : SearchSlByHigh_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function SearchSlByHigh_volt($HIGH_VOLT)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `HIGH_VOLT` like ? ");
		$stmt->bind_param("i",$HIGH_VOLT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByHigh_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : SearchSlByD1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function SearchSlByD1($D1)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `D1` like ? ");
		$stmt->bind_param("i",$D1);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByD1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : SearchSlByD2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function SearchSlByD2($D2)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `D2` like ? ");
		$stmt->bind_param("i",$D2);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByD2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : SearchSlByD3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function SearchSlByD3($D3)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `D3` like ? ");
		$stmt->bind_param("i",$D3);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByD3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : SearchSlByD4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function SearchSlByD4($D4)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `D4` like ? ");
		$stmt->bind_param("i",$D4);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByD4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : SearchSlByAdc1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function SearchSlByAdc1($ADC1)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `ADC1` like ? ");
		$stmt->bind_param("i",$ADC1);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByAdc1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : SearchSlByAdc2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function SearchSlByAdc2($ADC2)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `ADC2` like ? ");
		$stmt->bind_param("i",$ADC2);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByAdc2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : SearchSlByAdc3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function SearchSlByAdc3($ADC3)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `ADC3` like ? ");
		$stmt->bind_param("i",$ADC3);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByAdc3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : SearchSlByAdc4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function SearchSlByAdc4($ADC4)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `ADC4` like ? ");
		$stmt->bind_param("i",$ADC4);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByAdc4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : SearchSlByLongitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function SearchSlByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `LONGITUDE` like ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByLongitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : SearchSlByLatitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/
	function SearchSlByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `LATITUDE` like ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByLatitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : SearchSlByDate, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function SearchSlByDate($DATE)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `DATE` like ? ");
		$stmt->bind_param("s",$DATE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByDate, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : SearchSlByTime, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function SearchSlByTime($TIME)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `TIME` like ? ");
		$stmt->bind_param("s",$TIME);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByTime, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : SearchSlByInternetconnected, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchSlByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `Internetconnected` like ? ");
		$stmt->bind_param("i",$Internetconnected);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByInternetconnected, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchSlByArea, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function SearchSlByArea($Area)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `Area` like ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByArea, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : SearchSlByDevice_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchSlByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `Device_Status` like ? ");
		$stmt->bind_param("i",$Device_Status);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByDevice_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchSlByVoltr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function SearchSlByVoltr($VOLTR)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `VOLTR` like ? ");
		$stmt->bind_param("s",$VOLTR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByVoltr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : SearchSlByVoltb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function SearchSlByVoltb($VOLTB)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `VOLTB` like ? ");
		$stmt->bind_param("s",$VOLTB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByVoltb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : SearchSlByVolty, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function SearchSlByVolty($VOLTY)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `VOLTY` like ? ");
		$stmt->bind_param("s",$VOLTY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByVolty, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : SearchSlByHvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/
	function SearchSlByHvr($HVR)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `HVR` like ? ");
		$stmt->bind_param("s",$HVR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByHvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/

	/********************** [Start : SearchSlByHvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/
	function SearchSlByHvb($HVB)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `HVB` like ? ");
		$stmt->bind_param("s",$HVB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByHvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/

	/********************** [Start : SearchSlByHby, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/
	function SearchSlByHby($HBY)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `HBY` like ? ");
		$stmt->bind_param("s",$HBY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByHby, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/

	/********************** [Start : SearchSlByLvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/
	function SearchSlByLvr($LVR)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `LVR` like ? ");
		$stmt->bind_param("s",$LVR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByLvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/

	/********************** [Start : SearchSlByLvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/
	function SearchSlByLvb($LVB)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `LVB` like ? ");
		$stmt->bind_param("s",$LVB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByLvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/

	/********************** [Start : SearchSlByLvy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/
	function SearchSlByLvy($LVY)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `LVY` like ? ");
		$stmt->bind_param("s",$LVY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByLvy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/

	/********************** [Start : SearchSlByCy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function SearchSlByCy($CY)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `CY` like ? ");
		$stmt->bind_param("s",$CY);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByCy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : SearchSlByCr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function SearchSlByCr($CR)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `CR` like ? ");
		$stmt->bind_param("s",$CR);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByCr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : SearchSlByCb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function SearchSlByCb($CB)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `CB` like ? ");
		$stmt->bind_param("s",$CB);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByCb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : SearchSlByPhase, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function SearchSlByPhase($PHASE)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `PHASE` like ? ");
		$stmt->bind_param("i",$PHASE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByPhase, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : SearchSlBySmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function SearchSlBySmode($SMODE)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `SMODE` like ? ");
		$stmt->bind_param("i",$SMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlBySmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : SearchSlByMmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function SearchSlByMmode($MMODE)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `MMODE` like ? ");
		$stmt->bind_param("i",$MMODE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByMmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : SearchSlByFault, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function SearchSlByFault($FAULT)
	{
		$conn = $this -> conn;
		$slArrayList = array();
		$stmt = $conn->prepare("select * from sl where `FAULT` like ? ");
		$stmt->bind_param("i",$FAULT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySl();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($slArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $slArrayList;
	}
	/********************** [End : SearchSlByFault, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/


	/********************** [Start : DeleteSlById, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function DeleteSlById($ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `ID` = ? ");
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
	/********************** [End : DeleteSlById, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : DeleteSlBySl_id, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function DeleteSlBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `SL_ID` = ? ");
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
	/********************** [End : DeleteSlBySl_id, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : DeleteSlBySl_pass, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/
	function DeleteSlBySl_pass($SL_PASS)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `SL_PASS` = ? ");
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
	/********************** [End : DeleteSlBySl_pass, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : DeleteSlByPower, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function DeleteSlByPower($POWER)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `POWER` = ? ");
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
	/********************** [End : DeleteSlByPower, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : DeleteSlByCurrent, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/
	function DeleteSlByCurrent($CURRENT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `CURRENT` = ? ");
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
	/********************** [End : DeleteSlByCurrent, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : DeleteSlByVolt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function DeleteSlByVolt($VOLT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `VOLT` = ? ");
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
	/********************** [End : DeleteSlByVolt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : DeleteSlByLow_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/
	function DeleteSlByLow_volt($LOW_VOLT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `LOW_VOLT` = ? ");
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
	/********************** [End : DeleteSlByLow_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : DeleteSlByHigh_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function DeleteSlByHigh_volt($HIGH_VOLT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `HIGH_VOLT` = ? ");
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
	/********************** [End : DeleteSlByHigh_volt, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : DeleteSlByD1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function DeleteSlByD1($D1)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `D1` = ? ");
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
	/********************** [End : DeleteSlByD1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : DeleteSlByD2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function DeleteSlByD2($D2)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `D2` = ? ");
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
	/********************** [End : DeleteSlByD2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : DeleteSlByD3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function DeleteSlByD3($D3)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `D3` = ? ");
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
	/********************** [End : DeleteSlByD3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : DeleteSlByD4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function DeleteSlByD4($D4)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `D4` = ? ");
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
	/********************** [End : DeleteSlByD4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : DeleteSlByAdc1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function DeleteSlByAdc1($ADC1)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `ADC1` = ? ");
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
	/********************** [End : DeleteSlByAdc1, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : DeleteSlByAdc2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function DeleteSlByAdc2($ADC2)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `ADC2` = ? ");
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
	/********************** [End : DeleteSlByAdc2, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : DeleteSlByAdc3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function DeleteSlByAdc3($ADC3)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `ADC3` = ? ");
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
	/********************** [End : DeleteSlByAdc3, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : DeleteSlByAdc4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function DeleteSlByAdc4($ADC4)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `ADC4` = ? ");
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
	/********************** [End : DeleteSlByAdc4, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : DeleteSlByLongitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************************/
	function DeleteSlByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `LONGITUDE` = ? ");
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
	/********************** [End : DeleteSlByLongitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : DeleteSlByLatitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*************************************************************************************************************************/
	function DeleteSlByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `LATITUDE` = ? ");
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
	/********************** [End : DeleteSlByLatitude, Auto Generated Code Thu Mar 17 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : DeleteSlByDate, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function DeleteSlByDate($DATE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `DATE` = ? ");
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
	/********************** [End : DeleteSlByDate, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : DeleteSlByTime, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function DeleteSlByTime($TIME)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `TIME` = ? ");
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
	/********************** [End : DeleteSlByTime, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : DeleteSlByInternetconnected, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteSlByInternetconnected($Internetconnected)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `Internetconnected` = ? ");
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
	/********************** [End : DeleteSlByInternetconnected, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteSlByArea, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*********************************************************************************************************************/
	function DeleteSlByArea($Area)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `Area` = ? ");
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
	/********************** [End : DeleteSlByArea, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : DeleteSlByDevice_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteSlByDevice_status($Device_Status)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `Device_Status` = ? ");
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
	/********************** [End : DeleteSlByDevice_status, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteSlByVoltr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function DeleteSlByVoltr($VOLTR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `VOLTR` = ? ");
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
	/********************** [End : DeleteSlByVoltr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : DeleteSlByVoltb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function DeleteSlByVoltb($VOLTB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `VOLTB` = ? ");
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
	/********************** [End : DeleteSlByVoltb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : DeleteSlByVolty, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function DeleteSlByVolty($VOLTY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `VOLTY` = ? ");
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
	/********************** [End : DeleteSlByVolty, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : DeleteSlByHvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/
	function DeleteSlByHvr($HVR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `HVR` = ? ");
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
	/********************** [End : DeleteSlByHvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/

	/********************** [Start : DeleteSlByHvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/
	function DeleteSlByHvb($HVB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `HVB` = ? ");
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
	/********************** [End : DeleteSlByHvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/

	/********************** [Start : DeleteSlByHby, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/
	function DeleteSlByHby($HBY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `HBY` = ? ");
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
	/********************** [End : DeleteSlByHby, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/

	/********************** [Start : DeleteSlByLvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/
	function DeleteSlByLvr($LVR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `LVR` = ? ");
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
	/********************** [End : DeleteSlByLvr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/

	/********************** [Start : DeleteSlByLvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/
	function DeleteSlByLvb($LVB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `LVB` = ? ");
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
	/********************** [End : DeleteSlByLvb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/

	/********************** [Start : DeleteSlByLvy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/
	function DeleteSlByLvy($LVY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `LVY` = ? ");
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
	/********************** [End : DeleteSlByLvy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/******************************************************************************************************************/

	/********************** [Start : DeleteSlByCy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function DeleteSlByCy($CY)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `CY` = ? ");
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
	/********************** [End : DeleteSlByCy, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : DeleteSlByCr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function DeleteSlByCr($CR)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `CR` = ? ");
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
	/********************** [End : DeleteSlByCr, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : DeleteSlByCb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*******************************************************************************************************************/
	function DeleteSlByCb($CB)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `CB` = ? ");
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
	/********************** [End : DeleteSlByCb, Auto Generated Code Thu Mar 17 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : DeleteSlByPhase, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function DeleteSlByPhase($PHASE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `PHASE` = ? ");
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
	/********************** [End : DeleteSlByPhase, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : DeleteSlBySmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function DeleteSlBySmode($SMODE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `SMODE` = ? ");
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
	/********************** [End : DeleteSlBySmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : DeleteSlByMmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function DeleteSlByMmode($MMODE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `MMODE` = ? ");
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
	/********************** [End : DeleteSlByMmode, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : DeleteSlByFault, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**********************************************************************************************************************/
	function DeleteSlByFault($FAULT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from sl where `FAULT` = ? ");
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
	/********************** [End : DeleteSlByFault, Auto Generated Code Thu Mar 17 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : Update Sl, Auto Generated Code Thu Mar 17 2022] ****************************/
	/****************************************************************************************************************/
	function UpdateSl($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set ID = ? ,SL_ID = ? ,SL_PASS = ? ,POWER = ? ,CURRENT = ? ,VOLT = ? ,LOW_VOLT = ? ,HIGH_VOLT = ? ,D1 = ? ,D2 = ? ,D3 = ? ,D4 = ? ,ADC1 = ? ,ADC2 = ? ,ADC3 = ? ,ADC4 = ? ,LONGITUDE = ? ,LATITUDE = ? ,DATE = ? ,TIME = ? ,Internetconnected = ? ,Area = ? ,Device_Status = ? ,VOLTR = ? ,VOLTB = ? ,VOLTY = ? ,HVR = ? ,HVB = ? ,HBY = ? ,LVR = ? ,LVB = ? ,LVY = ? ,CY = ? ,CR = ? ,CB = ? ,PHASE = ? ,SMODE = ? ,MMODE = ? ,FAULT = ?,BRIGHTNESS=?,ENERGY=? where SL_ID = ? ");
		$stmt->bind_param("iisiiiiiiiiiiiiissssisissssssssssssiiiissi",$sl->ID,$sl->SL_ID,$sl->SL_PASS,$sl->POWER,$sl->CURRENT,$sl->VOLT,$sl->LOW_VOLT,$sl->HIGH_VOLT,$sl->D1,$sl->D2,$sl->D3,$sl->D4,$sl->ADC1,$sl->ADC2,$sl->ADC3,$sl->ADC4,$sl->LONGITUDE,$sl->LATITUDE,$sl->DATE,$sl->TIME,$sl->Internetconnected,$sl->Area,$sl->Device_Status,$sl->VOLTR,$sl->VOLTB,$sl->VOLTY,$sl->HVR,$sl->HVB,$sl->HBY,$sl->LVR,$sl->LVB,$sl->LVY,$sl->CY,$sl->CR,$sl->CB,$sl->PHASE,$sl->SMODE,$sl->MMODE,$sl->FAULT,$sl->BRIGHTNESS,$sl->ENERGY,$sl->ID);
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
	function AdminUpdateSl($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set LONGITUDE = ? ,LATITUDE = ? ,DATE = ? ,TIME = ? ,Area = ?  where SL_ID = ? ");
		$stmt->bind_param("sssssi",$sl->LONGITUDE,$sl->LATITUDE,$sl->DATE,$sl->TIME,$sl->Area,$sl->SL_ID);
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
	function UpdateSlhighvolt($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set HIGH_VOLT=?  where SL_ID = ? ");
		$stmt->bind_param("ii",$sl->HIGH_VOLT,$sl->SL_ID);
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
	function UpdateSllowvolt($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set LOW_VOLT=?  where SL_ID = ? ");
		$stmt->bind_param("ii",$sl->LOW_VOLT,$sl->SL_ID);
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
	function UpdateSlHVR($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set HVR=?  where SL_ID = ? ");
		$stmt->bind_param("si",$sl->HVR,$sl->SL_ID);
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
	function UpdateSlHVB($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set HVB=?  where SL_ID = ? ");
		$stmt->bind_param("si",$sl->HVB,$sl->SL_ID);
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
	function UpdateSlHVY($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set HBY=?  where SL_ID = ? ");
		$stmt->bind_param("si",$sl->HBY,$sl->SL_ID);
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
	function UpdateSlLVR($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set LVR=?  where SL_ID = ? ");
		$stmt->bind_param("si",$sl->LVR,$sl->SL_ID);
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
	function UpdateSlLVB($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set LVB=?  where SL_ID = ? ");
		$stmt->bind_param("si",$sl->LVB,$sl->SL_ID);
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
	function UpdateSlLVY($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set LVY=?  where SL_ID = ? ");
		$stmt->bind_param("si",$sl->LVY,$sl->SL_ID);
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
	function UpdateSlHCR($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set HCR=?  where SL_ID = ? ");
		$stmt->bind_param("si",$sl->HCR,$sl->SL_ID);
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
	function UpdateSlHCB($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set HCB=?  where SL_ID = ? ");
		$stmt->bind_param("si",$sl->HCB,$sl->SL_ID);
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
	function UpdateSlHCY($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set HCY=?  where SL_ID = ? ");
		$stmt->bind_param("si",$sl->HCY,$sl->SL_ID);
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
	function UpdateSlLCR($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set LCR=?  where SL_ID = ? ");
		$stmt->bind_param("si",$sl->LCR,$sl->SL_ID);
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
	function UpdateSlLCB($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set LCB=?  where SL_ID = ? ");
		$stmt->bind_param("si",$sl->LCB,$sl->SL_ID);
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
	function UpdateSlLCY($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set LCY=?  where SL_ID = ? ");
		$stmt->bind_param("si",$sl->LCY,$sl->SL_ID);
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
	function UpdateSlBrightness($sl)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set BRIGHTNESS=?  where SL_ID = ? ");
		$stmt->bind_param("si",$sl->BRIGHTNESS,$sl->SL_ID);
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
	function UpdateSlSMODE($sl){
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set SMODE=?  where SL_ID = ? ");
		$stmt->bind_param("ii",$sl->SMODE,$sl->SL_ID);
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
	function UpdateSlMMODE($sl){
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set MMODE=?  where SL_ID = ? ");
		$stmt->bind_param("ii",$sl->MMODE,$sl->SL_ID);
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
	function UpdateSlPMODE($sl){
		$conn = $this -> conn;
		$stmt = $conn->prepare("update sl set PHASE=?  where SL_ID = ? ");
		$stmt->bind_param("ii",$sl->PHASE,$sl->SL_ID);
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
	/********************** [End : Update Sl, Auto Generated Code Thu Mar 17 2022] ****************************/
	/**************************************************************************************************************/

}
?>
