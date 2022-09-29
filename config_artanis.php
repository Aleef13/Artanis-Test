<?php

$hostname = "localhost";
$user= "root";
$pass = "123456";
$dbname = "artanis";

$conn = mysqli_connect($hostname, $user, $pass ,$dbname);

if (!$conn) {
	die("<script>alert('Connection Failed.')</script>");
}

?>