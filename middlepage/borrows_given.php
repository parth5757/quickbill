
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Borrrow Given
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?middlepage=purchess">purchess</a></li>
      </ol>
    </section>

    <section class="content" style="padding-left: 30px;">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Total Borrrow Given List</h3>
              <hr>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
<form method="post" action="middlepage/borrow_g.php">
            	<table class="table table-bordered table-hover dataTable" width="100%">
					<thead>				
						<tr>

							<th>purchess id</th>
							<th>user Name</th>
<!--						<th>purchess id</th> -->
							<th>user phone number</th>
							<th>user address</th>
							<th>product name</th>
							<th>quantity</th>
							<th>Total amount</th>			
							<th>Created date</th>		
							<th>Action</th>		
						</tr>
					</thead>
					<tbody>
					<?php
						$sql_users = "SELECT * FROM purchases_master where payment_type=3";
						$result = mysqli_query($conn, $sql_users);
						$count = mysqli_num_rows($result);
					?>
					<?php if($count == 0) { ?>
						<tr>
							<td colspan="16"><center>No Data Found </center></td>
						</tr>
					<?php } else { ?>
						<?php while($row = mysqli_fetch_object($result)) { 
							// echo "<pre>";print_r($row);die;
							$users = "SELECT * FROM user_registration where user_id = ".$row->user_id;
							$user_query = mysqli_query($conn, $users);
							$user_info = mysqli_fetch_array($user_query);
							//echo "<pre>";print_r($user_query);die;
							if(isset($user_info)){
								$username = $user_info['user_name'];
								$contact_no = $user_info['user_phone_number'];
								$useraddress = $user_info['user_address'];

							}else{
								$username = '';
								$contact_no = '';
								$useraddress = '';
							}
				$products = "SELECT * FROM product_master where product_id = ".$row->product_id;
							$user_query = mysqli_query($conn, $products);
							$product_info = mysqli_fetch_array($user_query);
							//echo "<pre>";print_r($user_query);die;
							if(isset($user_info)){
								$productname = $product_info['product_name'];
							}else{
								$productname = '';
							}
							$created_date = date('Y-m-d h:m:s');
						?>
							<tr>
								<td><?= $row->main_purchase_id; ?></td>
								<td><?= $username ?></td>
								<td><?= $contact_no ?></td>
								<td><?= $useraddress ?></td>
								<td><?= $productname ?></td>
								<td><?= $row->quantity; ?></td>
								<td><?= $row->total_amount; ?></td>
								<td><?= $row->created_date; ?></td>	
								<td><a href="index.php?middlepage=borrow_given_action&id=<?= $row->purchases_id; ?>">
										<button class="btn  btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
									</a>
								</td >	
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