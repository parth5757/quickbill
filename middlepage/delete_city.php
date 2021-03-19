<?php
/*echo "<pre>";
print_r$_POST;
ext;*/
include('../include/config.php');
$city_id=$_GET['city_id'];
$query="DELETE FROM city_master where city_id='$city_id'";
$data=mysqli_query($conn, $query);
if(data)
	{
		header('location:index.php?middlepage=city');
	}
	else
	{	
		header('location:index.php?middlepage=state');
	}
?>