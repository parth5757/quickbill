<?php 
include('../include/config.php');
if($_POST['submit']){

/*  $sql_users = "SELECT feedback_id FROM feedback_master";
    $result = mysqli_query($conn, $sql_users);
    $asd = mysqli_fetch_object($result);
    
    if(empty($asd)){
      $id = 1;
    }else{
      $id = $asd->feedback_id + 1;
    }*/
  $sql_insert = "INSERT INTO feedback_master (feedback_id,subject,user_name ,user_email, message) VALUES ('".$_POST['$id']."','".$_POST['subject']."','".$_POST['user_name']."','".$_POST['email']."','".$_POST['message']."')";
  $row = mysqli_query($conn, $sql_insert);
  if($row) {
    $_SESSION['success'] = "Feedback successfully.";
    header('location:../index.php?middlepage=add_feedback');
  } else {
    header('location:../index.php?middlepage=add_feedback');
  }
}
?>