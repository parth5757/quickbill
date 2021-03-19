<?php
/*echo "<pre>";
print_r$_POST;
ext;*/
include('../include/config.php');
$product_category_id=$_GET['product_category_id'];
$query="DELETE FROM product_category_master where product_category_id='$product_category_id'";
$data=mysqli_query($conn, $query);
if(data)
	{
		header('location:index.php?middlepage=Category');
	}
	else
	{	
		echo "record is not deleted";
	}
?>