<?php
/*echo "<pre>";
print_r$_POST;
ext;*/
include('../include/config.php');
$area_id=$_GET['area_id'];
$query="DELETE FROM area_master where area_id='$area_id'";
$data=mysqli_query($conn, $query);
if(data)
	{
		header('location:index.php?middlepage=area');
	}
	else
	{	
		header('location:index.php?middlepage=state');
	}
?>