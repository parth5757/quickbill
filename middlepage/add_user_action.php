<?php include('include/config.php');
// exit;

//if (isset($_SESSION['registration_errors']))
//{
	unset($_SESSION['registration_errors']);
//}
if(isset($_POST['registration']) && $_POST['registration'] == 'Submit') 
{
	if(!isset($_POST['user_name']) || $_POST['user_name'] == '')
	{
		$_SESSION['registration_errors']['user_name_error'] = "user Name can not be blank";
	}	
	if(!isset($_POST['user_email']) || $_POST['user_email'] == '')
	{
		$_SESSION['registration_errors']['email_error'] ="Email is not exists";
	}
	if(!isset($_POST['user_phone_number']) || $_POST['user_phone_number'] == '')
	{
	$_SESSION['registration_errors']['user_phone_number_error'] = "User Phone Number can not be blank";
	}
	if(!isset($_POST['birth_date']) || $_POST['birth_date'] == '')
	{
	 	$_SESSION['registration_errors']['birth_date_error'] = "Birth date no can not be blank";
	}
	if(!isset($_POST['user_type']) || $_POST['user_type'] == '')
	{
	 	$_SESSION['registration_errors']['user_type_error'] = "user type no can not be blank";
	}	
	 	if(!isset($_POST['organize_name']) || $_POST['organize_name'] == '')
	{
	 	$_SESSION['registration_errors']['organize_name_error'] = "organize name no can not be blank";
	}
		 	if(!isset($_POST['address']) || $_POST['address'] == '')
	{
	 	$_SESSION['registration_errors']['organize_name_error'] = "address can not be blank";
	}
	 	if(!isset($_POST['gst_no']) || $_POST['gst_no'] == '')
	{
		$_SESSION['registration_errors']['gst_no_error'] = "gstno no can not be blank";
	}	
	
/*	if (!isset($_POST['country'])|| $_POST['country'] =='') 
	{
	 	$_SESSION['registration_errors']['counntry_id_error'] ="country is compoulsory";
	}
	if (!isset($_POST['state'])|| $_POST['state'] =='') 
	{
	 	$_SESSION['registration_errors']['stateid_error'] ="state is compoulsory";
		}
	if (!isset($_POST['city'])|| $_POST['city'] =='') 
	{
	 	$_SESSION['registration_errors']['cityid_error'] ="city is compoulsory";
	}*/

		// INSERT
	
	if(isset($_SESSION['registration_errors'])) 
	{	
		header('location:registration_user.php');
	} 
	else
	{
		$sql_for_duplication = "SELECT * FROM user_registration WHERE user_email = '".$_POST['user_email']."' OR  gst_no = '".$_POST['gst_no']."'";
		
		$query_for_duplication = mysqli_query($conn, $sql_for_duplication);
		$duplicate_count = mysqli_num_rows($query_for_duplication);

		if($duplicate_count > 0) {
			$_SESSION['registration_errors']['user_exists'] = "This user is already exists.";
			header('location:registration_user.php');
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
				$_SESSION['success'] = "You have been registered successfully. Please login to continue.";
				header('location:login.php');
			} 
			else 
			{
				header('location:registration_user.php');
			}
		}
	}
}
?>