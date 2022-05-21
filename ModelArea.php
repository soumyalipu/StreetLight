
<?php
	class ModelArea{
	/********************** [Start : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Area, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************/
	function InsertArea($area)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO area (ID,area_name,Longitude,Latitude) VALUES (?,?,?,?)");
		$stmt->bind_param("isss",$area->ID,$area->area_name,$area->Longitude,$area->Latitude);
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
	/********************** [End : Insert Area, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : GetAllArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************/
	function GetAllArea()
	{
		$conn = $this -> conn;
		$areaArrayList = array();
		$stmt = $conn->prepare("select * from area ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityArea();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($areaArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $areaArrayList;
	}
	/********************** [End : GetAreaByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************/

	/********************** [Start : GetAreaById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************/
	function GetAreaById($ID)
	{
		$conn = $this -> conn;
		$areaArrayList = array();
		$stmt = $conn->prepare("select * from area where `ID` = ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityArea();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($areaArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $areaArrayList;
	}
	/********************** [End : GetAreaById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : GetAreaByArea_name, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetAreaByArea_name($area_name)
	{
		$conn = $this -> conn;
		$areaArrayList = array();
		$stmt = $conn->prepare("select * from area where `area_name` = ? ");
		$stmt->bind_param("s",$area_name);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityArea();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($areaArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $areaArrayList;
	}
	/********************** [End : GetAreaByArea_name, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetAreaByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetAreaByLongitude($Longitude)
	{
		$conn = $this -> conn;
		$areaArrayList = array();
		$stmt = $conn->prepare("select * from area where `Longitude` = ? ");
		$stmt->bind_param("s",$Longitude);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityArea();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($areaArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $areaArrayList;
	}
	/********************** [End : GetAreaByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetAreaByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/
	function GetAreaByLatitude($Latitude)
	{
		$conn = $this -> conn;
		$areaArrayList = array();
		$stmt = $conn->prepare("select * from area where `Latitude` = ? ");
		$stmt->bind_param("s",$Latitude);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityArea();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($areaArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $areaArrayList;
	}
	/********************** [End : GetAreaByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************/


	/********************** [Start : SearchAreaById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************/
	function SearchAreaById($ID)
	{
		$conn = $this -> conn;
		$areaArrayList = array();
		$stmt = $conn->prepare("select * from area where `ID` like ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityArea();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($areaArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $areaArrayList;
	}
	/********************** [End : SearchAreaById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : SearchAreaByArea_name, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchAreaByArea_name($area_name)
	{
		$conn = $this -> conn;
		$areaArrayList = array();
		$stmt = $conn->prepare("select * from area where `area_name` like ? ");
		$stmt->bind_param("s",$area_name);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityArea();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($areaArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $areaArrayList;
	}
	/********************** [End : SearchAreaByArea_name, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchAreaByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchAreaByLongitude($Longitude)
	{
		$conn = $this -> conn;
		$areaArrayList = array();
		$stmt = $conn->prepare("select * from area where `Longitude` like ? ");
		$stmt->bind_param("s",$Longitude);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityArea();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($areaArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $areaArrayList;
	}
	/********************** [End : SearchAreaByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchAreaByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function SearchAreaByLatitude($Latitude)
	{
		$conn = $this -> conn;
		$areaArrayList = array();
		$stmt = $conn->prepare("select * from area where `Latitude` like ? ");
		$stmt->bind_param("s",$Latitude);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityArea();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($areaArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $areaArrayList;
	}
	/********************** [End : SearchAreaByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/


	/********************** [Start : DeleteAreaById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************/
	function DeleteAreaById($ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from area where `ID` = ? ");
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
	/********************** [End : DeleteAreaById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************/

	/********************** [Start : DeleteAreaByArea_name, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteAreaByArea_name($area_name)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from area where `area_name` = ? ");
		$stmt->bind_param("s",$area_name);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteAreaByArea_name, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteAreaByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteAreaByLongitude($Longitude)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from area where `Longitude` = ? ");
		$stmt->bind_param("s",$Longitude);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteAreaByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteAreaByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function DeleteAreaByLatitude($Latitude)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from area where `Latitude` = ? ");
		$stmt->bind_param("s",$Latitude);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteAreaByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : Update Area, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************/
	function UpdateArea($area)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update area set ID = ? ,area_name = ? ,Longitude = ? ,Latitude = ? where ID = ? ");
		$stmt->bind_param("isssi",$area->ID,$area->area_name,$area->Longitude,$area->Latitude,$area->ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : Update Area, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************/

}
?>
