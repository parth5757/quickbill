<?php
include('include/config.php');
if(isset($_POST['login'])) {
		// write the select query for selecting records for given login detail
	$sql = "SELECT * FROM user_registration WHERE user_email = '".$_POST['email']."' and password = '".$_POST['password']."'";

	$query = mysqli_query($conn, $sql);

	if(mysqli_num_rows($query)) {
		$user_data = mysqli_fetch_assoc($query);
		$_SESSION['username'] = $_POST['email'];
		$_SESSION['user_type'] = $user_data['user_type'];
	
		header('location:index.php');
	} else {
		$_SESSION['error'] = "Wrong email id or password";	
		header('location:login.php');
	}

} else {
	header('location:loginphp');
}
?>