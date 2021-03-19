<?php
include('../include/config.php');
		$sql_for_duplication = "SELECT * FROM user_registration WHERE user_email = '".$_POST['user_email']."' OR  gst_no = '".$_POST['gst_no']."'";
		
		$query_for_duplication = mysqli_query($conn, $sql_for_duplication);
		$duplicate_count = mysqli_num_rows($query_for_duplication);

		if($duplicate_count > 0) {
			header('location:index.php?middlepage=add_new_user');
		}
		else 
		{
			$sql_insert = "INSERT INTO user_registration (user_name, user_email, user_phone_number, password, birth_date, user_type, organize_name, user_address, gst_no, country_id, state_id, city_id,status_id) VALUE ('".$_POST['user_name']."', '".$_POST['user_email']."', '".$_POST['user_phone_number']."','".$_POST['password']."', '".$_POST['birth_date']."', '".$_POST['user_type']."', '".$_POST['organize_name']."', '".$_POST['address']."', '".$_POST['gst_no']."', '".$_POST['country_id']."', '".$_POST['state_id']."', '".$_POST['city_id']."', 2)";
			$row = mysqli_query($conn, $sql_insert);
			$last_id = mysqli_insert_id($conn);

			if($row) 
			{
				if(isset($_FILES['id_proof']) && isset($_FILES['id_proof']['name']) && $_FILES['id_proof']['name'] != '') {
					$image_name = time().$_FILES['id_proof']['name'];
					move_uploaded_file($_FILES['id_proof']['tmp_name'], "img/id_proofs/".$_FILES['id_proof']['name']);	
					$sql_image = mysqli_query($conn, "UPDATE user_registration SET image = '".$image_name."'");
				}
				header('location:index.php?middlepage=add_new_user');
				echo '<script>alert("Welcome to Quick Bill")</script>'; 
			} 
			else 
			{
				header('location:index.php?middlepage=add_new_user');
			}
		}
?>