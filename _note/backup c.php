<?php
include('../include/config.php');
if(isset($_POST['submit']))
	 {
		$sql_for_duplication = "SELECT * FROM product_category_master WHERE category_name = '".$_POST['product_category_name']."'AND product_category_id != ".$_POST['id'];
		
	$query_for_duplication = mysqli_query($conn, $sql_for_duplication);
	$duplicate_count = mysqli_num_rows($query_for_duplication);
// echo "<pre>";
// print_r($_POST);
// exit;
	if($duplicate_count > 0) {
		$_SESSION['error'] = "Product category exists.";
    	header('location:../index.php?middlepage=edit_product_category&prouct_category_id='.$_POST['id']);
    	exit;
	}
				$sql_update = "UPDATE product_category_master SET category_name = '".$_POST['product_category_name']."',category_description = '".$_POST['product_category_description']."' where product_category_id = ".$_POST['id'];
				
				$row = mysqli_query($conn, $sql_update);
				if($row) 
				{
					$_SESSION['success'] = "Data is updated";
					header('location:../index.php?middlepage=Category');
				} else 
				{
					header('location:../index.php?middlepage=edit_product_category&prouct_category_id='.$_POST['product_category_id']);
				}
				
	}
?>