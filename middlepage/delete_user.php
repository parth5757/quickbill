<?php
/*echo "<pre>";
print_r$_POST;
ext;*/
include('../include/config.php');
$user_id=$_GET['user_id'];
$query="DELETE FROM user_registration where user_id='$user_id'";
$data=mysqli_query($conn, $query);
if(data)
	{
		header('location:index.php?middlepage=user_list');
	}
	else
	{	
		echo "record is not deleted";
	}
?>