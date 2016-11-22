<!Doctype html>
<?php
session_start();
?>
<html lang = "en">
<head>
<title>e-learning login page</title>
<link rel="stylesheet" type="text/css" href="w3.css">
<link rel="stylesheet" type="text/css" href="extra.css">
</head>
<div class="w3-margin">
<body>
<div class="w3-container w3-teal">
  <h1>E-Learning UDUS. <span id = "slogan"><i>impacting knowledge in a technological era</i></span></h1>
</div>
  <div id = "nav">
<ul class="w3-navbar w3-dark-grey w3-center">
<div class="w3-animate-zoom">
  <li style="width:25%"><a class="w3-padding w3-green" href="#">Home</a></li>
  <li style="width:25%"><a class="w3-padding" href="#">About</a></li>
  <li style="width:25%"><a class="w3-padding" href="#">Contact</a></li>
  <li style="width:25%"><a class="w3-padding" href="#">Sitemap</a></li>
  </div>
</ul>
</div>
<div class="w3-panel w3-green w3-card-8">
<div class="w3-animate-zoom">
	<p>Welcome to our Log In Page!</p>
</div>
</div>
<div class="w3-panel w3-pale-red w3-card-8">
<?php
if(!empty($_SESSION['error_msg'])){
	echo $_SESSION['error_msg'];
	unset($_SESSION['error_msg']);
}
?>
</div>
<br>
<!--<form name = "login" action = "sql_login.php" method = "POST">
<h2 style="color:#3366cc;"> Sign In</h2><br>
Username: <input type="text" name="name" size="30px" placeholder="Enter Your UserID"><br><br>
Password: <input type="password" name="password" value="" size="30px" placeholder="***********"><br><br>
<br><br> <input type="checkbox"> By clicking you have agreed to the terms of use<br><br>
<input type="submit" value="Sign In" style="background-color:#3366cc;color:white;cursor:pointer;"><br><br>
</form>-->
<div id="formbox">
<div class="w3-container w3-teal">
  <h2>Sign In</h2>
</div>

<form class="w3-container" name="login" action="sql_login.php" method="POST">
  <label class="w3-label w3-text-teal"><b>Username</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" name="name" size="30px" placeholder="Enter Your UserID">

  <label class="w3-label w3-text-teal"><b>Password</b></label>
  <input class="w3-input w3-border w3-light-grey" type="password" name="password" value="" size="30px" placeholder="***********">
  <br>
  <button class="w3-btn w3-blue-grey"><i class="fa fa-sign-in">Sign In</i></button>
</form>
</div>
</body>
</div>
</html>
