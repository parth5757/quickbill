<?php 
include('include/config.php');

if (isset($_SESSION['feedback_errors']))
{
	unset($_SESSION['feedback_errors']);
}
if(isset($_POST['feedback']) && $_POST['feedback'] == 'Submit') 
	if(!isset($_POST['user_name']) || $_POST['user_name'] == '')
	{
	$_SESSION['feedback_errors']['user_name_error'] = "user Name can not be blank";
	}	
	if(!isset($_POST['user_email']) || $_POST['user_email'] == '')
	{
	 	$_SESSION['feedback_errors']['email_error'] ="Email is not exists";
	}
    if(!isset($_POST['user_email']) || $_POST['user_ratting'] == '')
	{
	$_SESSION['feedback_errors']['email_error'] ="Email is not exists";
	}
	else
	$sql_insert = "INSERT INTO feedback_master (feedback_id,subject,user_name ,user_email, message) VALUE ('".$id."','".$_POST['subject']."','".$_POST['username']."','".$_POST['email']."','".$_POST['message']."')";
	else {
		$_SESSION['error'] = "Wrong email id or password";	
		header('location:add_feedback.php');
	}
	else 
	{
		header('location:index.php'); 	
	}
?>