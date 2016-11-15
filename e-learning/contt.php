<?php
// create a connection
$servername = "localhost";
$username = "prynce";
$password = "BINBELLO";
$con = new mysqli($servername,$username,$password);

// check connection
if ($con->connect_error){
	echo " Failed to connect to MySQL: " . $con->connect_error();
}
else{
	echo "Connection succesful!" . "<br>";
}

?>