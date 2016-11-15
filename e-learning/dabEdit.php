<?php
include "contt.php";
$user = "CREATE TABLE User(
admNo varchar(255) NOT NULL PRIMARY KEY,
lName varchar(255) NOT NULL,
uName varchar(255) NOT NULL,
fName varchar(255)NOT NULL,
eMail varchar(255)NOT NULL,
phoneNo varchar(255) NOT NULL,
Password varchar(255) NOT NULL,
Role  varchar(255) NOT NULL
)";
if($con->query($user) === TRUE){
	echo "user added succesfully";
}
else{
	echo "user not added succesfully" .$con->error;
}
/* table for users */
$lect = "CREATE TABLE Lecturers(
RegID varchar(255) NOT NULL PRIMARY KEY,
lName varchar(255) NOT NULL,
uName varchar(255) NOT NULL,
fName varchar(255)NOT NULL,
eMail varchar(255)NOT NULL,
phoneNo varchar(255) NOT NULL,
Password varchar(255) NOT NULL,
Role  varchar(255) NOT NULL
)";
if($con->query($lect) === TRUE){
	echo "Lecturers Table added succesfully";
}
else{
	echo "Lecturers Table not added succesfully" .$con->error;
}
/* table for lecturer */
$cat="CREATE TABLE Category(
cId varchar(255) NOT NULL PRIMARY KEY ,
cName varchar(255) NOT NULL,
cDesc varchar(255) NOT NULL
)";
/* table for category */
if($con->query($cat) === TRUE){
	echo "category added succesfully";
}
else{
	echo "category not added succesfully" .$con->error;
}
$course = "CREATE TABLE Course(
Ccode varchar(255) NOT NULL PRIMARY KEY,
Ctitle varchar(255) NOT NULL,
Cdescr varchar(255) NOT NULL,
Ccategory varchar(255)NOT NULL REFERENCES Category(cId)
)";
/* table for course */
if($con->query($course) === TRUE){
	echo "course added succesfully";
}
else{
	echo "course  not added succesfully" .$con->error;
}

$Cmat = "CREATE TABLE Cmaterial(
Cmat varchar(255) NOT NULL PRIMARY KEY ,
Ctopic varchar(255) NOT NULL,
Cnote varchar(255) NOT NULL,
Ccode varchar(255) NOT NULL REFERENCES Course(Ccode)
)";
/* table for category */
if($con->query($Cmat) === TRUE){
	echo "material added succesfully";
}
else{
	echo "materials not added succesfully" .$con->error;
}

$enrol = "CREATE TABLE Enrolement(
Access varchar(255) NOT NULL PRIMARY KEY,
Ccode varchar(255) NOT NULL,
User_id varchar(255) NOT NULL REFERENCES User(admNo),
Enrol_id varchar(255) NOT NULL REFERENCES Course(Ccode)
)";
/* table for category */
if($con->query($enrol) === TRUE){
	echo "enrolment added succesfully";
}
else{
	echo "enrolement not added succesfully" .$con->error;
}
?>