<?php
include('../include/config.php');
            $sql_users = "SELECT * FROM order_master ";
            $result = mysqli_query($conn, $sql_users);
        
?>
<!DOCTYPE html>
<html>
<head>
	<title>chart</title>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);
      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['order_id', 'main_order_id'],
          <?php
          	if(mysqli_num_rows($result) >0)
          	{
          		while ($row =mysqli_num_rows($result)) 
          		{
          			echo "['".['order_id']."', '".['main_order_id']."']";
          		}
          	}
          ?>
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Chess opening moves',
            subtitle: 'popularity by percentage' },
          axes: {
            x: {
              0: { side: 'top', label: 'White to move'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
</head>
<body>
		<div id="top_x_div" style="width: 800px; height: 600px;"></div>
</body>
</html>