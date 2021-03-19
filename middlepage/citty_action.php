<?php 
// echo "<pre>";
// print_r ($_POST);
// exit;
include('../include/config.php');
if($_POST['submit']){

$sql_for_duplication = "SELECT * FROM city_master WHERE city_name = '".$_POST['city_name']."'";
		
	$query_for_duplication = mysqli_query($conn, $sql_for_duplication);
	$duplicate_count = mysqli_num_rows($query_for_duplication);
echo "<pre>";
print_r($_POST);
exit;
	if($duplicate_count > 0) {
		$_SESSION['error'] = "city exists.";
    	header('location:../index.php?middlepage=new_city');

	}    
  $sql_insert = "INSERT INTO city_master(city_name, state_id, city_code) VALUEs ('".$_POST['city_name']."','".$_POST['state_name']."','".$_POST['citycode']."')";

  $row = mysqli_query($conn, $sql_insert);
  if($row) {
    $_SESSION['success'] = "Categoy saved successfully.";
    header('location:../index.php?middlepage=city');
  } else {
    header('location:../index.php?middlepage=new_city');
  }
}
?>