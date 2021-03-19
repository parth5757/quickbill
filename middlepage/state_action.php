<?php 
//echo "<pre>";
//print_r ($_POST);
//exit;
include('../include/config.php');
if($_POST['submit']){
$sql_for_duplication = "SELECT * FROM state_master WHERE state_name = '".$_POST['state_name']."'";
		
	$query_for_duplication = mysqli_query($conn, $sql_for_duplication);
	$duplicate_count = mysqli_num_rows($query_for_duplication);

	if($duplicate_count > 0) {
		$_SESSION['error'] = "state exists.";
    	header('location:../index.php?middlepage=new_state');
    	exit;
	}
    
  $sql_insert = "INSERT INTO state_master(state_name, state_code) VALUEs ('".$_POST['state_name']."','".$_POST['state_code']."')";

  $row = mysqli_query($conn, $sql_insert);
  if($row) {
    $_SESSION['success'] = "Categoy saved successfully.";
    header('location:../index.php?middlepage=state');
  } else {
    header('location:../index.php?middlepage=new_state');
  }
}
?>