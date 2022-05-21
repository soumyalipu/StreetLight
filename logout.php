<?php
ob_start();
  session_start(); //to ensure you are using same session
$_SESSION["user"]=null;
$_SESSION["usertype"]=null;
unset($_SESSION["user"]);
unset($_SESSION["usertype"]);
header("Location:login.php");
    
    //echo "<script>location='index.php'</script>";
?>