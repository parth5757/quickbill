<?php 
//echo "<pre>";
//print_r ($_POST);
//	exit;
include('../include/config.php');

if($_POST['submit']){


	$products = array_combine($_POST['product'], $_POST['quantity']);//($_POST['product'],$_POST['quantity'],$_POST['price']);

	$user_query = "Select * from user_registration where user_id = ".$_POST['user_id'];
	$user_query_run = mysqli_query($conn, $user_query);
	$user_info = mysqli_fetch_array($user_query_run);
		// echo "<pre>";print_r($user_info);die;
	$order_data = [];
	foreach ($products as $key => $product) {
		$select_query = "Select * from product_master where product_id = ".$key;
		$select_query_run = mysqli_query($conn, $select_query);
		$res = mysqli_fetch_array($select_query_run);
		array_push($order_data, array(
			"user_id"=>$_POST['user_id'],
			"product_id"=>$key,
			"price"=>$res['product_price'],
			"quantity"=>$product,
			"discount"=>$_POST['disscount'],
			"payment" => $_POST['payment'],
			"date"=>date('Y-m-d H:i:s'),
		));
	}

	if($order_data){
		$order_query = "Select order_id from order_master order by order_id DESC";
		$order_query_run = mysqli_query($conn, $order_query);
		$order_info = mysqli_fetch_array($order_query_run);
		if($order_info['order_id'] == 0){
			$order_id = 1;
		}else{
			$order_id = $order_info['order_id'] + 1;
		}
		$sql_insert = "INSERT INTO order_master (order_id,user_id, product_id,quantity,price,disscount,payment_type,created_date,modified_date) VALUES";
		$numItems = count($order_data);
		$i = 0;
		foreach ($order_data as $key => $order) {
			$sql_insert .= "('".$order_id."','".$order['user_id']."','".$order['product_id']."','".$order['quantity']."','".$order['price']."','".$order['discount']."','".$order['payment']."','".$order['date']."','".$order['date']."')";
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
    header('location:../index.php?middlepage=new_order');
  } else {
  	print_r(mysqli_error($conn));die;
    header('location:../index.php?middlepage=#');
  }
}
?>