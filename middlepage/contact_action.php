<?php 
/*echo "<pre>";
print_r($_POST);
exit;*/
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
  $sql_insert = "INSERT INTO contact_master (contact_id,user_name ,user_email, comment) VALUES ('".$_POST['$id']."','".$_POST['first_name']."','".$_POST['user_email']."','".$_POST['comment']."')";
  $row = mysqli_query($conn, $sql_insert);
  if($row) {
    $_SESSION['success'] = "contact successfully.";
    header('location:../index.php?middlepage=index');
  } else {
    header('location:../index.php?middlepage=contact');
  }
}
?>