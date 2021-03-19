<?php
include('include/config.php');
            $sql_update = "UPDATE user_registration SET user_name = '".$_POST['user_name']."',user_email = '".$_POST['user_email']."',user_phone_number = '".$_POST['user_phone_number']."',user_type = '".$_POST['user_type']."',user_email = '".$_POST['user_email']."',organize_name = '".$_POST['organize_name']."',password = '".$_POST['password']."',city_id = '".$_POST['city_id']."',state_id = '".$_POST['state_id']."',country_id = '".$_POST['country_id']."',gst_no= '".$_POST['gst_no']."',pan_no = '".$_POST['pan_no']."',id_proof = '".$_POST['id_proof']."' where user_id = ".$_POST['id'];

            $row = mysqli_query($conn, $sql_update);
            if($row) 
            {
                $_SESSION['success'] = "Data is updated";
                header('location:index.php?middlepage=user_list');
            } 
            else 
            {
                header('location:index.php?middlepage=edit_user&user_id='.$_POST['id']);
            }
?>