<div class="content-wrapper">
<?php
	include('../include/config.php');
if(isset($_POST['submit'])) {
			

			$sql_for_duplication = "SELECT * FROM product_master WHERE product_name = '".$_POST['product_name']."' AND product_id != ".$_POST['product_id'];
			$query_for_duplication = mysqli_query($conn, $sql_for_duplication);
			$duplicate_count = mysqli_num_rows($query_for_duplication);

			if($duplicate_count > 0) {
				$_SESSION['error'] = "Product exists.";
				header('location:index.php?middlepage=edit_product&product_id='.$_POST['product_id']);
				exit;
			}

			$sql_update = "UPDATE product_master SET product_name = '".$_POST['product_name']."',product_category_id = '".$_POST['product_category_name']."',product_price = '".$_POST['product_price']."',quntity = '".$_POST['quntity']."' where product_id = ".$_POST['product_id'];
			$row = mysqli_query($conn, $sql_update);
			if($row) {
				$_SESSION['success'] = "Data is updated";
				header('location:index.php?middlepage=product');
			} else {
				header('location:index.php?middlepage=edit_product&product_id='.$_POST['product_id']);
			}
			
		}
?>
</div>