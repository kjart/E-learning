<?php
include "contt.php";
session_start();
	// sets the value of the session from sql_login.php to a variable
  $user_check = $_SESSION['login_user'];
   // check if the name mayches the one in the database
  $user_lent = strlen($user_check);
  //Using lenght of the variable to determine if a regid or admNo was entered...
  if ($user_lent==10) //This indicates that an admission number was entered... Therefore it picks the username from the user table in the database
  {
     $ses_sql = "select uName from user where uName = '$user_check' ";
   $result = $con->query($ses_sql);
   // fetch the array into a variable
   $row = $result->fetch_assoc();
   // save the name into a variable
   $login_session = $row['uName'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }

  } else //indicates that a regid was entered, hence it picks the username from the lecturers table in the database...
  {
   $ses_sql = "select uName from lecturers where uName = '$user_check' ";
   $result = $con->query($ses_sql);
   // fetch the array into a variable
   $row = $result->fetch_assoc();
   // save the name into a variable
   $login_session = $row['uName'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
}

?>