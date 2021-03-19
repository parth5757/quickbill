<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
<div class="col-sm-9 col-md-10 mt-5 text-cennter">
  <form action="index.php?middlepage=order_report_action" method="POST" class="d-print-none">
    <div class="form-row">
      <div class="form-group col-md-2">
          <input type="date" class="form-control" id="startdate" name="startdate">     
      </div> 
      <div class="form-group col-md-2">
          <input type="date" class="form-control" id="enddate" name="enddate">     
      </div>
      <div class="form-group">
          <input type="submit" class="btn  btn-primary btn-xs d-print-none" name="searchsubmit" value="search">     
      </div>
    </div>   
  </form>
  <?php
/*  if(isset($_request['searchsubmit']))
  {
    $startdate=$_request['startdate'];
    $enddate=$_request['enddate'];
    $sql = "SELECT * FROM order_master WHERE created_date BETWEEN '$startdate' AND '$enddate'";
    $result= $conn->query($sql);
    if($result->num_rows > 0)
    {

      echo '<p class=" bg-dark text-white p-2 mt-4 "> details </p>';
      echo '<table class="table">';
      echo '<thead>';
      echo '<tr>';
      echo '<th scope="col"> order_id </th>';
      echo '<th scope="col"> user name </th>';     
      echo '<th scope="col"> user phone number </th>';     
      echo '<th scope="col"> user address </th>';     
      echo '<th scope="col"> product name </th>';       
      echo '<th scope="col"> quantity </th>';
      echo '<th scope="col"> price </th>';
      echo '<th scope="col"> Total amount </th>';
      echo '<th scope="col"> created date </th>';      
      echo '</tr>';   
      echo '</thead>';
      echo '<tbody>';
          while ($row = $result->featch_assoc())
            {
                echo '<th<?= $row->main_order_id; ?></th>';
                echo '<th<?= $username ?></th>';     
                echo '<th<?= $contact_no ?></th>';     
                echo '<th <?= $useraddress ?> </th>';     
                echo '<th <?= $productname ?> </th>';       
                echo '<th <?= $productname ?> </th>';
                echo '<th <?= $row->price; ?> </th>';
                echo '<th <?= $row->total_amount; ?> </th>';
                echo '<th <?= $row->created_date; ?> </th>';      
            }
      echo '</tbody>';
      echo "</table>";
    }
    else
    {
      echo "no record found";
    }
  }*/
  ?>
</div>
  <!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->

    <!-- /.content -->
  </div>