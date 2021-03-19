<?php
ob_start();
session_start();

$server_name = "localhost";
$db_name = "quick_bill";
$username = "root";
$password = "";

$conn = mysqli_connect($server_name, $username, $password, $db_name); 

//echo "<pre>";
//print_r($conn);
//echo "</pre>";
?>