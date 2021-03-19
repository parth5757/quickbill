<?php
include('../include/config.php');
// echo "<pre>";
// print_r($_POST);
// exit;

            $sql_update = "UPDATE user_registration SET password = '".$_POST['password']."' where user_id = ".$_POST['id'];

            $row = mysqli_query($conn, $sql_update);
            if($row) 
            {
                $_SESSION['success'] = "Data is updated";
                header('location:../index.php?middlepage=profile');
            } 
            else 
            {
                header('location:../index.php?middlepage=edit_user&user_id='.$_POST['id']);
            }
?>