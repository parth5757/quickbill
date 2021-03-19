<?php 
include('../include/config.php');
if($_POST['submit']){

	$sql_for_duplication = "SELECT * FROM product_master WHERE product_name = '".$_POST['name']."'";
		
	$query_for_duplication = mysqli_query($conn, $sql_for_duplication);
	$duplicate_count = mysqli_num_rows($query_for_duplication);

	if($duplicate_count > 0) {
		$_SESSION['error'] = "Product exists.";
    	header('location:../index.php?middlepage=add_product');
    	exit;
	}

  $sql_insert = "INSERT INTO product_master (product_name, product_category_id,product_price, product_description, Quntity) VALUE ('".$_POST['name']."', '".$_POST['product_category_name']."', '".$_POST['price']."','".$_POST['description']."', '".$_POST['quantity']."')";
  $row = mysqli_query($conn, $sql_insert);
  if($row) {
    $_SESSION['success'] = "Product saved successfully.";
    header('location:../index.php?middlepage=product');
  } else {
    header('location:../index.php');
  }
}
?>