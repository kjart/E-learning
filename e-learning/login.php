<!Doctype html>
<?php
session_start();
?>
<html lang = "en">
<head>
<title>e-learning login page</title>
<style>
body{ background-color:#e8e8e8;  }
h1{ 
background-color:#303030;
color:#3300ff;
padding:5px 30px;
  }
  form{  background-color:white;
  border:2px solid white;
  width:50%;height:50%; 
  position:absolute;
  left:400px;top:100px;
  color:#404040; padding:5px 10px; }
</style>
</head>
<body>
<h1>E-learning</h1>
<p> Welcome to Our Login Page!<p>
<?php
if(!empty($_SESSION['error_msg'])){
	echo $_SESSION['error_msg'];
	unset($_SESSION['error_msg']);
}
?>
<form name = "login" action = "sql_login.php" method = "POST">
<h2 style="color:#3366cc;"> Sign In</h2><br>
Username: <input type="text" name="name" size="30px" placeholder="Admission Number or RegID"><br><br>
Password: <input type="password" name="password" value="" size="30px" placeholder="***********"><br><br>
<br><br> <input type="checkbox"> By clicking you have agreed to the terms of use<br><br>
<input type="submit" value="Sign In" style="background-color:#3366cc;color:white;cursor:pointer;"><br><br>
</form>

</body>
</html>
