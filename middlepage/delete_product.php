<?php
/*echo "<pre>";
print_r$_POST;
ext;*/
include('../include/config.php');
$product_id=$_GET['product_id'];
$query="DELETE FROM product_master where product_id='$product_id'";
$data=mysqli_query($conn, $query);
if(data)
	{
		header('location:index.php?middlepage=product');
	}
	else
	{	
		echo "record is not deleted";
	}
?>