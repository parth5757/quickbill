<?php 

include('include/config.php');

if(!empty($_GET['product_id'])){
	$select_query=  "Select * from product_master where product_id = ".$_GET['product_id'];
	$select_query_run =     mysqli_query($conn, $select_query);
	$result = mysqli_fetch_array($select_query_run);
	$price = $result['product_price'];
}else{
	$price = '200';
}
echo $price;
?>