<?php 
// echo "<pre>";
// print_r ($_POST);
include('../include/config.php');

if($_POST['submit']){

	$order_query = mysqli_query($conn,"INSERT INTO main_order (total_order_amount, user_id, payment_type) VALUES (".$_POST['total_order_amount'].", '".$_POST['user_id']."' ,'".$_POST['payment']."')");
	$last_id = mysqli_insert_id($conn);

	$products = array_combine($_POST['product'], $_POST['quantity']);
	
	$order_data = [];

	foreach ($_POST['product'] as $key => $product_data) {
		array_push($order_data, array(
			"user_id"=>$_POST['user_id'],
			"main_order_id"=>$last_id,
			"product_id"=>$_POST['product'][$key],
			"quantity"=>$_POST['quantity'][$key],
			"qty_type"=>$_POST['qty_type'][$key],
			"price"=>$_POST['price'][$key],
			"total_amount" => $_POST['total_order_amount'],
			"payment_type" => $_POST['payment'],
		));
	}
// print_r($order_data);
// exit;
	if($order_data){
		$sql_insert = "INSERT INTO order_master (user_id, main_order_id, product_id, quantity, qty_type, price, total_amount, payment_type) VALUES ";
		$numItems = count($order_data);
		$i = 0;
		foreach ($order_data as $key => $purchases) {
			$sql_insert .= "('".$purchases['user_id']."','".$purchases['main_order_id']."','".$purchases['product_id']."','".$purchases['quantity']."','".$purchases['qty_type']."','".$purchases['price']."','".$purchases['total_amount']."','".$purchases['payment_type']."')";
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
    $_SESSION['success'] = "Order saved successfully.";
    header('location:../index.php');
  } else {
  	print_r(mysqli_error($conn));die;
    header('location:../index.php?middlepage=new_order');
  }
}
?>