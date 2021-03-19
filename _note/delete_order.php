<?php
/*echo "<pre>";
print_r$_POST;
ext;*/
include('../include/config.php');
$order_id=$_GET['order_id'];
$query="DELETE FROM order_master where order_id='$order_id'";
$data=mysqli_query($conn, $query);
if(data)
	{
		header('location:index.php?middlepage=order_list');
	}
	else
	{	
		echo "record is not deleted";
	}
?>