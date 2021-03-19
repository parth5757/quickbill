<?php
/*echo "<pre>";
print_r$_POST;
ext;*/
include('../include/config.php');
$state_id=$_GET['state_id'];
$query="DELETE FROM state_master where state_id='$state_id'";
$data=mysqli_query($conn, $query);
if(data)
	{
		header('location:index.php?middlepage=state');
	}
	else
	{	
		echo "record is not deleted";
	}
?>