
<?php
	class ModelSuperadmin{
	/********************** [Start : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Superadmin, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/
	function InsertSuperadmin($superadmin)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO superadmin (ID,SADMINUID,SADMINPASSWORD) VALUES (?,?,?)");
		$stmt->bind_param("iss",$superadmin->ID,$superadmin->SADMINUID,$superadmin->SADMINPASSWORD);
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
	/********************** [End : Insert Superadmin, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : GetAllSuperadmin, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***********************************************************************************************************************/
	function GetAllSuperadmin()
	{
		$conn = $this -> conn;
		$superadminArrayList = array();
		$stmt = $conn->prepare("select * from superadmin ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySuperadmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($superadminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $superadminArrayList;
	}
	/********************** [End : GetSuperadminBySuperadmin, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetSuperadminById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/
	function GetSuperadminById($ID)
	{
		$conn = $this -> conn;
		$superadminArrayList = array();
		$stmt = $conn->prepare("select * from superadmin where `ID` = ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySuperadmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($superadminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $superadminArrayList;
	}
	/********************** [End : GetSuperadminById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : GetSuperadminBySadminuid, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetSuperadminBySadminuid($SADMINUID)
	{
		$conn = $this -> conn;
		$superadminArrayList = array();
		$stmt = $conn->prepare("select * from superadmin where `SADMINUID` = ? ");
		$stmt->bind_param("s",$SADMINUID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySuperadmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($superadminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $superadminArrayList;
	}
	/********************** [End : GetSuperadminBySadminuid, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetSuperadminBySadminpassword, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************************/
	function GetSuperadminBySadminpassword($SADMINPASSWORD)
	{
		$conn = $this -> conn;
		$superadminArrayList = array();
		$stmt = $conn->prepare("select * from superadmin where `SADMINPASSWORD` = ? ");
		$stmt->bind_param("s",$SADMINPASSWORD);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySuperadmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($superadminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $superadminArrayList;
	}
	/********************** [End : GetSuperadminBySadminpassword, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/


	/********************** [Start : SearchSuperadminById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function SearchSuperadminById($ID)
	{
		$conn = $this -> conn;
		$superadminArrayList = array();
		$stmt = $conn->prepare("select * from superadmin where `ID` like ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySuperadmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($superadminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $superadminArrayList;
	}
	/********************** [End : SearchSuperadminById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : SearchSuperadminBySadminuid, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchSuperadminBySadminuid($SADMINUID)
	{
		$conn = $this -> conn;
		$superadminArrayList = array();
		$stmt = $conn->prepare("select * from superadmin where `SADMINUID` like ? ");
		$stmt->bind_param("s",$SADMINUID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySuperadmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($superadminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $superadminArrayList;
	}
	/********************** [End : SearchSuperadminBySadminuid, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchSuperadminBySadminpassword, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function SearchSuperadminBySadminpassword($SADMINPASSWORD)
	{
		$conn = $this -> conn;
		$superadminArrayList = array();
		$stmt = $conn->prepare("select * from superadmin where `SADMINPASSWORD` like ? ");
		$stmt->bind_param("s",$SADMINPASSWORD);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntitySuperadmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($superadminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $superadminArrayList;
	}
	/********************** [End : SearchSuperadminBySadminpassword, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/


	/********************** [Start : DeleteSuperadminById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function DeleteSuperadminById($ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from superadmin where `ID` = ? ");
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
	/********************** [End : DeleteSuperadminById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : DeleteSuperadminBySadminuid, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteSuperadminBySadminuid($SADMINUID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from superadmin where `SADMINUID` = ? ");
		$stmt->bind_param("s",$SADMINUID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteSuperadminBySadminuid, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteSuperadminBySadminpassword, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************************/
	function DeleteSuperadminBySadminpassword($SADMINPASSWORD)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from superadmin where `SADMINPASSWORD` = ? ");
		$stmt->bind_param("s",$SADMINPASSWORD);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteSuperadminBySadminpassword, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : Update Superadmin, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/
	function UpdateSuperadmin($superadmin)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update superadmin set ID = ? ,SADMINUID = ? ,SADMINPASSWORD = ? where ID = ? ");
		$stmt->bind_param("issi",$superadmin->ID,$superadmin->SADMINUID,$superadmin->SADMINPASSWORD,$superadmin->ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : Update Superadmin, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************/

}
?>
