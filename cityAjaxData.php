<?php
//Include database configuration file
include('include/config.php');

if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
    //Get all state data
    $query = mysqli_query($conn, "SELECT * FROM city_master WHERE state_name = '".$_POST['state_id']."' ORDER BY city_name ASC");
    //Count total number of rows
    $rowCount = mysqli_num_rows($query);

    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = mysqli_fetch_assoc($query)){
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>
