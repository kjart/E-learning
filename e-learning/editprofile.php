<!Doctype HTML>
<?php

include "Ses.php";
include "contt.php";
?>
<html lang = 'en'>
<head>
<title> E-Learning UDUS </title>
<link rel="stylesheet" type="text/css" href="w3.css">
<link rel="stylesheet" type="text/css" href="extra.css">
</head>
<div class="w3-margin">
<body>
<div class="w3-container w3-teal">
  <h1>E-Learning UDUS. <span id = "slogan"><i>impacting knowledge in a technological era</i></span></h1>
  <a id = "logout" href = "out.php"> Log out </a>
</div>
<nav class="w3-sidenav w3-white w3-card-2" style="display:none" id="mySidenav">
  <a href="javascript:void(0)"
  onclick="w3_close()"
  class="w3-closenav w3-small">Close &times;</a>
  <a href="index.php">Home</a>
        <div class="w3-dropdown-hover">
    <a href="#">Profile <i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-white w3-card-4">
      <a href="#">View Profile</a>
      <a href="#">Edit Profile</a>
    </div>
  <a href="#">Courses</a>
  <a href="#">Departmental Registration</a>
  <a href="#">Course Enrolment</a>
      <div class="w3-dropdown-hover">
    <a href="#">Management <i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-white w3-card-4">
      <a href="#">Add Course</a>
      <a href="#">Add Course Material</a>
      <a href="#">Drop Course</a>
      <a href="#">Drop Course Material</a>
      <a href="#">Edit Course</a>
    </div>
  </div>
</nav>
<div id = "icon1">
<header class="w3-container w3-teal">
  <span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</span>
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
</header>
</div>
<div id = "main">
<h2> Edit Profile.</h2>
<p>Make Changes Where Needed in the fields below!</p>
<form class="w3-container w3-card-4 w3-light-grey">
  <p>
  <label>Admission Number</label>
  <input class="w3-input w3-border w3-round-xlarge" name="first" type="text" value="<?php $select = "SELECT admNo FROM `user` WHERE (uName = '$login_session')"?>"></p>
  <p>
  <label>First Name</label>
  <input class="w3-input w3-border w3-round-xlarge" name="last" type="text"></p>
  <p>
  <label>Last Name</label>
  <input class="w3-input w3-border w3-round-xlarge" name="last" type="text"></p>
  <p>
  <label>Username</label>
  <input class="w3-input w3-border w3-round-xlarge" name="first" type="text"></p>
  <p>
  <label>Email</label>
  <input class="w3-input w3-border w3-round-xlarge" name="last" type="text"></p>
  <p>
  <label>Phone Number</label>
  <input class="w3-input w3-border w3-round-xlarge" name="last" type="text"></p>
  <label>Password</label>
  <input class="w3-input w3-border w3-round-xlarge" name="last" type="text"></p>
  <button class="w3-btn w3-blue-grey"><i class="fa fa-sign-in">UPDATE</i></button>
</form>
</div>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidenav").style.width = "25%";
  document.getElementById("mySidenav").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidenav").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
</body>
</div>
</html>