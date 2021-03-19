<?php 
// echo "<pre>";
// print_r ($_POST);
include('../include/config.php');

if($_POST['submit']){

	$purchase_query = mysqli_query($conn,"INSERT INTO main_purchase (total_order_amount, payment_type) VALUES (".$_POST['total_order_amount'].", '".$_POST['payment']."')");
	$last_id = mysqli_insert_id($conn);

	$products = array_combine($_POST['product'], $_POST['quantity']);
	
	$purchases_data = [];

	foreach ($_POST['product'] as $key => $product_data) {
		array_push($purchases_data, array(
			"user_id"=>$_POST['user_id'],
			"main_purchase_id"=>$last_id,
			"product_id"=>$_POST['product'][$key],
			"quantity"=>$_POST['quantity'][$key],
			"qty_type"=>$_POST['qty_type'][$key],
			"price"=>$_POST['price'][$key],
			"total_amount" => $_POST['total_order_amount'],
			"payment_type" => $_POST['payment'],
		));
	}
// print_r($purchases_data);
// exit;
	if($purchases_data){
		$sql_insert = "INSERT INTO purchases_master (user_id, main_purchase_id, product_id, quantity, qty_type, price, total_amount, payment_type) VALUES ";
		$numItems = count($purchases_data);
		$i = 0;
		foreach ($purchases_data as $key => $purchases) {
			$sql_insert .= "('".$purchases['user_id']."','".$purchases['main_purchase_id']."','".$purchases['product_id']."','".$purchases['quantity']."','".$purchases['qty_type']."','".$purchases['price']."','".$purchases['total_amount']."','".$purchases['payment_type']."')";
			if(++$i === $numItems) {
				// echo "last index!";
			}else{
				$sql_insert .= ",";
			}
		}
	}
	// echo "<pre>";print_r($sql_insert);die;
  $row = mysqli_query($conn, $sql_insert);
  if($row) {
    $_SESSION['success'] = "purchases saved successfully.";
    header('location:../index.php?middlepage=purchess');
  } else {
  	print_r(mysqli_error($conn));die;
    header('location:../index.php?middlepage=purchases_user');
  }
}
?>