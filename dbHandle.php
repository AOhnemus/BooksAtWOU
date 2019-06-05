<?php

$servername = "localhost";
$DBUsername = "website";
$DBPassword = "";
$DBName = "loginSystem";

$con = mysqli_connect($servername, $DBUsername, $DBPassword, $DBName);
if(!$con) {
	die("Connection failed".mysqli_connect_error());
}
