
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        State
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?middlepage=user_list">Users</a></li>
      </ol>
    </section>
              
              <h3 class="card-title"> Total State</h3>
              <a href="index.php?middlepage=new_state" style="margin-top: -30px;margin-right: 20px;" class="pull-right">Create New State</a>
              <hr>
    <section class="content" style="padding-left: 30px;">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-hover dataTable" width="100%">
          <thead>     
            <tr>
              <th>State id</th>
              <th>State name</th>
              <th>Country_name</th>
              <th>State_name</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $sql_users = "SELECT * FROM state_master";
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
                <td><?php echo $row->state_id; ?></td>
                <td><?php echo $row->state_name; ?></td>
                <td><?php echo "india"; ?></td>
                <td><?php echo $row->state_code; ?></td>
                <td>
                  
                  <a href="index.php?middlepage=edit_state&id=<?= $row->state_id; ?>">
                    <button class="btn  btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                  </a>
                 <a href="index.php?middlepage=delete_state&state_id=<?= $row->state_id; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn  btn-primary btn-xs"><i class="fa fa-trash-o"></i></button>
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
