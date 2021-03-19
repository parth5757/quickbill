<?php
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
include('../include/config.php');
// echo "<pre>";print_r($_POST);die;
if(isset($_POST['submit'])) {
	// echo "<pre>";print_r($_POST);die;
				// $sql_for_duplication = "SELECT * FROM area_master WHERE area_name = '".$_POST['area_name']."' AND area_id = '".$_POST['area_id'] ;
			$sql_for_duplication = "SELECT * FROM area_master WHERE area_name = '".$_POST["area_name"]."' and area_id != '".$_POST['id']."' and state_name = '".$_POST['state_name']."'";
			$query_for_duplication = mysqli_query($conn, $sql_for_duplication);
			$duplicate_count = mysqli_num_rows($query_for_duplication);
			if($duplicate_count > 0) 
			{	
				$_SESSION['error'] = "area exists.";
				// echo "<pre>";print_r($_SESSION);die;
				header('location:../index.php?middlepage=edit_area&id='.$_POST['id']);
				exit;
			}
			$sql_update = "UPDATE area_master SET area_name = '".$_POST['area_name']."',state_name = '".$_POST['state_name']."' ,area_code = '".$_POST['area_code']."' where area_id= ".$_POST['id'];
			
			$row = mysqli_query($conn, $sql_update);
			if($row) {
				$_SESSION['success'] = "Data is updated";
				header('location:../index.php?middlepage=area');
			} else {
				header('location:../index.php?middlepage=edit_area&area_id='.$_POST['id']);
			}
			
		}
?>