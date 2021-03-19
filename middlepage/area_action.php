<?php 
//echo "<pre>";
//print_r ($_POST);
//exit;
include('../include/config.php');
if($_POST['submit'])
	{
	$sql_for_duplication = "SELECT * FROM area_master WHERE area_name = '".$_POST['area_name']."'";
		
	$query_for_duplication = mysqli_query($conn, $sql_for_duplication);
	$duplicate_count = mysqli_num_rows($query_for_duplication);

	if($duplicate_count > 0) {
		$_SESSION['error'] = "Product exists.";
    	header('location:../index.php?middlepage=new_area');
    	exit;
	}  
	$sql_insert = "INSERT INTO area_master(area_name, area_code, state_name) VALUEs ('".$_POST['area_name']."','".$_POST['area_code']."','".$_POST['state_name']."'	)";

    $row = mysqli_query($conn, $sql_insert);
	if($row) 
	{
	    $_SESSION['success'] = "Categoy saved successfully.";
	    header('location:../index.php?middlepage=area');
	  } 
	  else 
	  {
	    header('location:../index.php?middlepage=new_area');
	  }
	}
?>