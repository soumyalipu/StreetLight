
<?php
	class ModelStreetlight{
	/********************** [Start : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Streetlight, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function InsertStreetlight($streetlight)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO streetlight (ID,SL_ID,PHASE,R_WATT,Area,LONGITUDE,LATITUDE) VALUES (?,?,?,?,?,?,?)");
		$stmt->bind_param("isiisss",$streetlight->ID,$streetlight->SL_ID,$streetlight->PHASE,$streetlight->R_WATT,$streetlight->Area,$streetlight->LONGITUDE,$streetlight->LATITUDE);
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
	/********************** [End : Insert Streetlight, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetAllStreetlight, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/
	function GetAllStreetlight()
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	function GetLastSl(){
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight ORDER BY ID DESC LIMIT 1 ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : GetStreetlightByStreetlight, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetStreetlightById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function GetStreetlightById($ID)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `ID` = ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : GetStreetlightById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetStreetlightBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetStreetlightBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `SL_ID` = ? ");
		$stmt->bind_param("s",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : GetStreetlightBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetStreetlightByPhase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetStreetlightByPhase($PHASE)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `PHASE` = ? ");
		$stmt->bind_param("i",$PHASE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : GetStreetlightByPhase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetStreetlightByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/
	function GetStreetlightByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `R_WATT` = ? ");
		$stmt->bind_param("i",$R_WATT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : GetStreetlightByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : GetStreetlightByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetStreetlightByArea($Area)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `Area` = ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : GetStreetlightByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetStreetlightByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function GetStreetlightByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `LONGITUDE` = ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : GetStreetlightByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetStreetlightByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetStreetlightByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `LATITUDE` = ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : GetStreetlightByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/


	/********************** [Start : SearchStreetlightById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchStreetlightById($ID)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `ID` like ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : SearchStreetlightById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchStreetlightBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchStreetlightBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `SL_ID` like ? ");
		$stmt->bind_param("s",$SL_ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : SearchStreetlightBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchStreetlightByPhase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchStreetlightByPhase($PHASE)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `PHASE` like ? ");
		$stmt->bind_param("i",$PHASE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : SearchStreetlightByPhase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchStreetlightByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function SearchStreetlightByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `R_WATT` like ? ");
		$stmt->bind_param("i",$R_WATT);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : SearchStreetlightByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : SearchStreetlightByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchStreetlightByArea($Area)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `Area` like ? ");
		$stmt->bind_param("s",$Area);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : SearchStreetlightByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchStreetlightByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchStreetlightByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `LONGITUDE` like ? ");
		$stmt->bind_param("s",$LONGITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : SearchStreetlightByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchStreetlightByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchStreetlightByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$streetlightArrayList = array();
		$stmt = $conn->prepare("select * from streetlight where `LATITUDE` like ? ");
		$stmt->bind_param("s",$LATITUDE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityStreetlight();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($streetlightArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $streetlightArrayList;
	}
	/********************** [End : SearchStreetlightByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/


	/********************** [Start : DeleteStreetlightById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteStreetlightById($ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from streetlight where `ID` = ? ");
		$stmt->bind_param("s",$ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteStreetlightById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteStreetlightBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteStreetlightBySl_id($SL_ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from streetlight where `SL_ID` = ? ");
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
	/********************** [End : DeleteStreetlightBySl_id, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteStreetlightByPhase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteStreetlightByPhase($PHASE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from streetlight where `PHASE` = ? ");
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
	/********************** [End : DeleteStreetlightByPhase, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteStreetlightByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/
	function DeleteStreetlightByR_watt($R_WATT)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from streetlight where `R_WATT` = ? ");
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
	/********************** [End : DeleteStreetlightByR_watt, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : DeleteStreetlightByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteStreetlightByArea($Area)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from streetlight where `Area` = ? ");
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
	/********************** [End : DeleteStreetlightByArea, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteStreetlightByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteStreetlightByLongitude($LONGITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from streetlight where `LONGITUDE` = ? ");
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
	/********************** [End : DeleteStreetlightByLongitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteStreetlightByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteStreetlightByLatitude($LATITUDE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from streetlight where `LATITUDE` = ? ");
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
	/********************** [End : DeleteStreetlightByLatitude, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : Update Streetlight, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/
	function UpdateStreetlight($streetlight)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update streetlight set ID = ? ,SL_ID = ? ,PHASE = ? ,R_WATT = ? ,Area = ? ,LONGITUDE = ? ,LATITUDE = ? where ID = ? ");
		$stmt->bind_param("isiisssi",$streetlight->ID,$streetlight->SL_ID,$streetlight->PHASE,$streetlight->R_WATT,$streetlight->Area,$streetlight->LONGITUDE,$streetlight->LATITUDE,$streetlight->ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function AdminUpdateSl($streetlight)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update streetlight set Area = ? ,LONGITUDE = ? ,LATITUDE = ? where SL_ID = ? ");
		$stmt->bind_param("ssss",$streetlight->Area,$streetlight->LONGITUDE,$streetlight->LATITUDE,$streetlight->SL_ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : Update Streetlight, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/

}
?>
