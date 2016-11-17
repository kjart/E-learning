<?php
include "contt.php";
session_start();
// checks if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == "POST"){
$name = mysqli_real_escape_string($con,$_POST['name']);
$password = mysqli_real_escape_string($con,$_POST['password']);
	// collect the values of the column 
	//email,password and Uname into a variable
$name_lent = strlen($name);
//Checking the length of the name variable...
if ($name_lent==10){
$select = "SELECT uName FROM `user` WHERE (admNo = '$name') AND password = '$password'" ; // selecting the values
	// store the query inside a variable named result
$result = $con->query($select);
	// store the values in an array called row
$row = $result->fetch_assoc();
$regname = $row['uName']; // saves the result in the array as $regname
	// store the number of rows in the result set
$count = $result->num_rows;
// if result match $name and $password , table row must be 1
 if($count == 1){
    $_SESSION['login_user'] = $regname;
         header("location: index.php");
	 
 } // end of the if class
 else{
	$_SESSION['error_msg'] = "username or password is Invalid!";
	header("location:login.php");
	
	 
 }// check if count is not equal to 1
}//end of if statement for when the admission number entered is equal to 10.
else{
	$select = "SELECT uName FROM `lecturers` WHERE (RegID = '$name') AND password = '$password'" ; // selecting the values
	// store the query inside a variable named result
$result = $con->query($select);
	// store the values in an array called row
$row = $result->fetch_assoc();
$regname = $row['uName']; // saves the result in the array as $regname
	// store the number of rows in the result set
$count = $result->num_rows;
// if result match $name and $password , table row must be 1
 if($count == 1){
    $_SESSION['login_user'] = $regname;
         header("location: index.php");
	 
 } // end of the if class
 else{
	$_SESSION['error_msg'] = "username or password is Invalid!";
	header("location:login.php");
	
	 
 }// check if count is not equal to 1
} // end of else statement signifying it is a lecturer regid that was entered...
} // end the form submitted field
	


?>