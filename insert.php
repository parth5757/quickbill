<?php
include("include/config.php")
if($number > 1)
{
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["name"][$i] != ''))
		{
			$sql = "INSERT INTO order_master VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";
			mysqli_query($connect, $sql);
		}
	}
	echo "Data Inserted";
}
else
{
	echo "Please Enter Name";
}