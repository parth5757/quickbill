<?php
//fetch all country data from database
//Include database configuration file
include('include/config.php');
    $query = mysqli_query($conn, "SELECT * FROM state_master WHERE country_id = '".$_POST['country_id']."' ORDER BY name ASC");

    //Count total number of rows
    $rowCount = mysqli_num_rows($query);

    //Display states list
    if($rowCount > 0)
	{
        echo '<option value="">Select State</option>';// initial message  
        while($row = mysqli_fetch_assoc($query)) {
            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';// select country id & name from country table
        }
    }
	else
	{
        echo '<option value="">State Not Available</option>'; //display when no data!
	}



?>
