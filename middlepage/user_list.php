
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users 
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?middlepage=user_list">Users</a></li>
      </ol>
    </section>

    <section class="content" style="padding-left: 30px;">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Total Users List</h3>
              <hr>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            	<table class="table table-bordered table-hover dataTable" width="100%">
					<thead>			
						<tr>
							<th>User id</th>
							<th>User Name</th>
							<th>Email</th>
							<th>phone_no</th>
							<th>Birth_date</th>
							<th>User Type</th>
							<th>Organize</th>
							<th>stutus id</th>					
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$sql_users = "SELECT * FROM user_registration where user_type != 2 ";
						$result = mysqli_query($conn, $sql_users);
						$count = mysqli_num_rows($result);
					?>
					<?php if($count == 0) { ?>
						<tr>
							<td colspan="16"><center>No Data Found </center></td>
						</tr>
					<?php } else { ?>
						<?php while($row = mysqli_fetch_object($result)) { ?>
							<tr>
								<td><?php echo $row->user_id; ?></td>
								<td><?php echo $row->user_name; ?></td>
								<td><?php echo $row->user_email; ?></td>
								<td><?php echo $row->user_phone_number; ?></td>
								<td><?php echo $row->birth_date; ?></td>
								<td><?php if($row->user_type == 2) {echo "distributer";}elseif($row->user_type == 3) {echo "wholeseller";} else{echo "deler";} ?></td>
								<td><?php echo $row->organize_name; ?></td>
								<td><?php echo $row->status_id; ?></td>
								<td>
									
									<a href="index.php?middlepage=edit_user&id=<?= $row->user_id; ?>">
										<button class="btn  btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
									</a>
							   <a href="index.php?middlepage=delete_user&user_id=<?= $row->user_id; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn  btn-primary btn-xs"><i class="fa fa-trash-o"></i></button>
							   </a>
							   <div id="divLoading" class="show">						   	
							   </div>
								</td>
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
