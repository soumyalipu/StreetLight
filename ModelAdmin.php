
<?php
	class ModelAdmin{
	/********************** [Start : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Admin, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************/
	function InsertAdmin($admin)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO admin (ID,ADMINID,ADMINPASS,ADMINEMAIL,ADMINMOBILE,ADMINSTATUS) VALUES (?,?,?,?,?,?)");
		$stmt->bind_param("issssi",$admin->ID,$admin->ADMINID,$admin->ADMINPASS,$admin->ADMINEMAIL,$admin->ADMINMOBILE,$admin->ADMINSTATUS);
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
	/********************** [End : Insert Admin, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : GetAllAdmin, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************/
	function GetAllAdmin()
	{
		$conn = $this -> conn;
		$adminArrayList = array();
		$stmt = $conn->prepare("select * from admin ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityAdmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($adminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $adminArrayList;
	}
	/********************** [End : GetAdminByAdmin, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : GetAdminById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************/
	function GetAdminById($ID)
	{
		$conn = $this -> conn;
		$adminArrayList = array();
		$stmt = $conn->prepare("select * from admin where `ID` = ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityAdmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($adminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $adminArrayList;
	}
	/********************** [End : GetAdminById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************/

	/********************** [Start : GetAdminByAdminid, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/
	function GetAdminByAdminid($ADMINID)
	{
		$conn = $this -> conn;
		$adminArrayList = array();
		$stmt = $conn->prepare("select * from admin where `ADMINID` = ? ");
		$stmt->bind_param("s",$ADMINID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityAdmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($adminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $adminArrayList;
	}
	/********************** [End : GetAdminByAdminid, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : GetAdminByAdminpass, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/
	function GetAdminByAdminpass($ADMINPASS)
	{
		$conn = $this -> conn;
		$adminArrayList = array();
		$stmt = $conn->prepare("select * from admin where `ADMINPASS` = ? ");
		$stmt->bind_param("s",$ADMINPASS);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityAdmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($adminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $adminArrayList;
	}
	/********************** [End : GetAdminByAdminpass, Auto Generated Code Fri Mar 25 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetAdminByAdminemail, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function GetAdminByAdminemail($ADMINEMAIL)
	{
		$conn = $this -> conn;
		$adminArrayList = array();
		$stmt = $conn->prepare("select * from admin where `ADMINEMAIL` = ? ");
		$stmt->bind_param("s",$ADMINEMAIL);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityAdmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($adminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $adminArrayList;
	}
	/********************** [End : GetAdminByAdminemail, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetAdminByAdminmobile, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetAdminByAdminmobile($ADMINMOBILE)
	{
		$conn = $this -> conn;
		$adminArrayList = array();
		$stmt = $conn->prepare("select * from admin where `ADMINMOBILE` = ? ");
		$stmt->bind_param("s",$ADMINMOBILE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityAdmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($adminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $adminArrayList;
	}
	/********************** [End : GetAdminByAdminmobile, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetAdminByAdminstatus, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/
	function GetAdminByAdminstatus($ADMINSTATUS)
	{
		$conn = $this -> conn;
		$adminArrayList = array();
		$stmt = $conn->prepare("select * from admin where `ADMINSTATUS` = ? ");
		$stmt->bind_param("i",$ADMINSTATUS);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityAdmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($adminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $adminArrayList;
	}
	/********************** [End : GetAdminByAdminstatus, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**************************************************************************************************************************/


	/********************** [Start : SearchAdminById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************/
	function SearchAdminById($ID)
	{
		$conn = $this -> conn;
		$adminArrayList = array();
		$stmt = $conn->prepare("select * from admin where `ID` like ? ");
		$stmt->bind_param("i",$ID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityAdmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($adminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $adminArrayList;
	}
	/********************** [End : SearchAdminById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : SearchAdminByAdminid, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function SearchAdminByAdminid($ADMINID)
	{
		$conn = $this -> conn;
		$adminArrayList = array();
		$stmt = $conn->prepare("select * from admin where `ADMINID` like ? ");
		$stmt->bind_param("s",$ADMINID);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityAdmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($adminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $adminArrayList;
	}
	/********************** [End : SearchAdminByAdminid, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : SearchAdminByAdminpass, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchAdminByAdminpass($ADMINPASS)
	{
		$conn = $this -> conn;
		$adminArrayList = array();
		$stmt = $conn->prepare("select * from admin where `ADMINPASS` like ? ");
		$stmt->bind_param("s",$ADMINPASS);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityAdmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($adminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $adminArrayList;
	}
	/********************** [End : SearchAdminByAdminpass, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchAdminByAdminemail, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchAdminByAdminemail($ADMINEMAIL)
	{
		$conn = $this -> conn;
		$adminArrayList = array();
		$stmt = $conn->prepare("select * from admin where `ADMINEMAIL` like ? ");
		$stmt->bind_param("s",$ADMINEMAIL);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityAdmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($adminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $adminArrayList;
	}
	/********************** [End : SearchAdminByAdminemail, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchAdminByAdminmobile, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchAdminByAdminmobile($ADMINMOBILE)
	{
		$conn = $this -> conn;
		$adminArrayList = array();
		$stmt = $conn->prepare("select * from admin where `ADMINMOBILE` like ? ");
		$stmt->bind_param("s",$ADMINMOBILE);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityAdmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($adminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $adminArrayList;
	}
	/********************** [End : SearchAdminByAdminmobile, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchAdminByAdminstatus, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchAdminByAdminstatus($ADMINSTATUS)
	{
		$conn = $this -> conn;
		$adminArrayList = array();
		$stmt = $conn->prepare("select * from admin where `ADMINSTATUS` like ? ");
		$stmt->bind_param("i",$ADMINSTATUS);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityAdmin();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($adminArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $adminArrayList;
	}
	/********************** [End : SearchAdminByAdminstatus, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/


	/********************** [Start : DeleteAdminById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/**********************************************************************************************************************/
	function DeleteAdminById($ID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from admin where `ID` = ? ");
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
	/********************** [End : DeleteAdminById, Auto Generated Code Fri Mar 25 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : DeleteAdminByAdminid, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/
	function DeleteAdminByAdminid($ADMINID)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from admin where `ADMINID` = ? ");
		$stmt->bind_param("s",$ADMINID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteAdminByAdminid, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : DeleteAdminByAdminpass, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteAdminByAdminpass($ADMINPASS)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from admin where `ADMINPASS` = ? ");
		$stmt->bind_param("s",$ADMINPASS);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteAdminByAdminpass, Auto Generated Code Fri Mar 25 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteAdminByAdminemail, Auto Generated Code Fri Mar 25 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteAdminByAdminemail($ADMINEMAIL)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from admin where `ADMINEMAIL` = ? ");
		$stmt->bind_param("s",$ADMINEMAIL);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteAdminByAdminemail, Auto Generated Code Fri Mar 25 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteAdminByAdminmobile, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteAdminByAdminmobile($ADMINMOBILE)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from admin where `ADMINMOBILE` = ? ");
		$stmt->bind_param("s",$ADMINMOBILE);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteAdminByAdminmobile, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteAdminByAdminstatus, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteAdminByAdminstatus($ADMINSTATUS)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from admin where `ADMINSTATUS` = ? ");
		$stmt->bind_param("i",$ADMINSTATUS);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteAdminByAdminstatus, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : Update Admin, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*******************************************************************************************************************/
	function UpdateAdmin($admin)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update admin set ID = ? ,ADMINID = ? ,ADMINPASS = ? ,ADMINEMAIL = ? ,ADMINMOBILE = ? ,ADMINSTATUS = ? where ID = ? ");
		$stmt->bind_param("issssii",$admin->ID,$admin->ADMINID,$admin->ADMINPASS,$admin->ADMINEMAIL,$admin->ADMINMOBILE,$admin->ADMINSTATUS,$admin->ID);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : Update Admin, Auto Generated Code Fri Mar 25 2022] ****************************/
	/*****************************************************************************************************************/
function UpdateAdminstatus($userdata)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update admin set ADMINSTATUS = ? where ADMINEMAIL = ? ");
		$s=1;
		$stmt->bind_param("is",$s,$userdata);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	function ApproveAdminstatus($userdata)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update admin set ADMINSTATUS = ? where ADMINEMAIL = ? ");
		$s=2;
		$stmt->bind_param("is",$s,$userdata);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
}
?>
