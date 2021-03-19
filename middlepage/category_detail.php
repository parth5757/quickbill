<?php 
//echo "<pre>";
//print_r ($_POST);
//exit;
include('../include/config.php');
if($_POST['submit']){

    $sql_for_duplication = "SELECT * FROM product_category_master WHERE category_name = '".$_POST['product_category_name']."'";
		
	$query_for_duplication = mysqli_query($conn, $sql_for_duplication);
	$duplicate_count = mysqli_num_rows($query_for_duplication);

	if($duplicate_count > 0) {
		$_SESSION['error'] = "Product category exists.";
    	header('location:../index.php?middlepage=add_category');
    	exit;
	}

  $sql_insert = "INSERT INTO product_category_master (category_name, category_description) VALUEs ('".$_POST['product_category_name']."','".$_POST['product_category_description']."')";

  $row = mysqli_query($conn, $sql_insert);
  if($row) {
    $_SESSION['success'] = "Categoy saved successfully.";
    header('location:../index.php?middlepage=category');
  } else {
    header('location:../index.php?middlepage=category');
  }
}
?>