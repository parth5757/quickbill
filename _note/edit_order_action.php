<?php
include('../include/config.php');
if(isset($_POST['submit']))
        {            
            $sql_update = "UPDATE order_master SET user_name = '".$_POST['user_name']."',product_category_name = '".$_POST['product_category_name']."',product_name = '".$_POST['product_name']."',price= '".$_POST['price']."',quantity = '".$_POST['quantity']."',disscount = '".$_POST['disscount']."' where order_id = ".$_POST['id'];

            $row = mysqli_query($conn, $sql_update);
            if($row) {
                $_SESSION['success'] = "Data is updated";
                header('location:index.php?middlepage=order_list');
            } else {
                header('location:index.php?middlepage=edit_order&order_id='.$_POST['id']);
            }
            
        }
?>