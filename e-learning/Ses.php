<?php
include "contt.php";
session_start();
	// sets the value of the session from sql_login.php to a variable
  $user_check = $_SESSION['login_user'];
   // check if the name mayches the one in the database
   $ses_sql = "select uName from user where uName = '$user_check' ";
   $result = $con->query($ses_sql);
   // fetch the array into a variable
   $row = $result->fetch_assoc();
   // save the name into a variable
   $login_session = $row['uName'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }


?>