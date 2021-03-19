<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
include('../include/config.php');
// echo "<pre>";print_r($_POST);die;
if(isset($_POST['submit'])) {
			$sql_update = "UPDATE product_category_master SET category_name = '".$_POST['product_category_name']."',category_description = '".$_POST['product_category_description']."' where product_category_id = ".$_get['id'];
			
			$row = mysqli_query($conn, $sql_update);
			if($row) {
				$_SESSION['success'] = "Data is updated";
				header('location:../index.php?middlepage=Category');
			} else {
				header('location:../index.php?middlepage=edit_product_category&prouct_category_id='.$_POST['id']);
			}
			
		}
?>