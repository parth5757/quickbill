<?php
//Include database configuration file
include('include/config.php');

if(isset($_POST["city_id"]) && !empty($_POST["city_id"])){
    //Get all state data
    $query = mysqli_query($conn, "SELECT * FROM area_master WHERE city_name = '".$_POST['city_id']."' ORDER BY area_name ASC");
    //Count total number of rows
    $rowCount = mysqli_num_rows($query);

    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Area</option>';
        while($row = mysqli_fetch_assoc($query)){
            echo '<option value="'.$row['area_id'].'">'.$row['area_name'].'</option>';
        }
    }else{
        echo '<option value="">Area not available</option>';
    }
}
?>
