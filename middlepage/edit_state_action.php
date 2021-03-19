<?php
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
include('../include/config.php');
// echo "<pre>";print_r($_POST);die;
if(isset($_POST['submit'])) {
			$sql_update = "UPDATE state_master SET state_name = '".$_POST['state_name']."',state_code = '".$_POST['state_code']."' where state_id= ".$_POST['id'];
			
			$row = mysqli_query($conn, $sql_update);
			if($row) {
				$_SESSION['success'] = "Data is updated";
				header('location:../index.php?middlepage=state');
			} else {
				header('location:../index.php?middlepage=edit_state&state_id='.$_POST['id']);
			}
			
		}
?>