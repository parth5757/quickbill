<?php
include('../include/config.php');
if(isset($_POST['submit'])) 
	{
		// echo "<pre>";print_r($_POST);die;
		$sql_for_duplication = "SELECT * FROM city_master WHERE city_name = '".$_POST['city_name']."' AND city_id != '".$_POST['id']."' and state_name = '".$_POST['state_name']."'";
		$query_for_duplication = mysqli_query($conn, $sql_for_duplication);
		$duplicate_count = mysqli_num_rows($query_for_duplication);
		if($duplicate_count > 0) 
		{
			$_SESSION['error'] = "Product exists.";
			header('location:../index.php?middlepage=edit_city&id='.$_POST['id']);
			exit;
		}
		$sql_update = "UPDATE city_master SET city_name = '".$_POST['city_name']."',state_name = '".$_POST['state_name']."' ,city_code = '".$_POST['city_code']."' where city_id= ".$_POST['id'];
			
		$row = mysqli_query($conn, $sql_update);
		if($row)
		 {
				$_SESSION['success'] = "Data is updated";
				header('location:../index.php?middlepage=city');
		}
		else 
		{
				header('location:../index.php?middlepage=edit_city&city_id='.$_POST['id']);
		}			
	}
?>