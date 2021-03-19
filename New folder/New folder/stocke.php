
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Stocke 
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?middlepage=stocke">Stocke</a></li	>
      </ol>
    </section>

    <section class="content" style="padding-left: 30px;">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Total Stocke List</h3>
              <hr>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            	<table class="table table-bordered table-hover dataTable" width="100%">
					<thead>			
						<tr>
							<th>Product id</th>
							<th>Product Name</th>
<!--							<th>Product Category</th>-->
							<th>Quantity</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$sql_users = "SELECT * FROM purchases_master";
						$result = mysqli_query($conn, $sql_users);
						$count = mysqli_num_rows($result);
					?>
					<?php if($count == 0) { ?>
						<tr>
							<td colspan="16"><center>No Data Found </center></td>
						</tr>
					<?php } else { ?>
						<?php while($row = mysqli_fetch_object($result)) {
						$users = "SELECT * FROM product_master where product_id = ".$row->product_id;
							$user_query = mysqli_query($conn, $users);
							$user_info = mysqli_fetch_array($user_query);
							//echo "<pre>";print_r($user_query);die;
							if(isset($user_info)){
								$productname = $user_info['product_name'];
								}
								else
								{
								$productname = '';
								} ?>
							<tr>
								<td><?php echo $row->product_id; ?></td>
								<td><?= $productname ?></td> 
								<!--<td><?php echo $row->user_email; ?></td>-->
								<td><?php echo $row->quantity; ?></td>
							</tr>
						<?php } ?>
					<?php } ?>
					</tbody>
				</table>	
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
