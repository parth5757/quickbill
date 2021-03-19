<?php
include('include/config.php');

if(isset($_POST['login'])) {
	// write the select query for selecting records for given login detail
	$sql = "SELECT * FROM user_registration WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'";

	$query = mysqli_query($conn, $sql);

	if(mysqli_num_rows($query)) {
		header('location:index.php');
	} else {
		$_SESSION['error'] = "Wrong email id or password";	
		header('location:login.php');
	}


} else {
	header('location:login.php');
}
?>