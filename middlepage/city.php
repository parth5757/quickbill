
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        City
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?middlepage=city">City</a></li>
      </ol>
    </section>
              
              <h3 class="card-title"> Total City</h3>
              <a href="index.php?middlepage=new_city" style="margin-top: -30px;margin-right: 20px;" class="pull-right">Create New City</a>
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
              <th>City id</th>
              <th>city name</th>
              <th>state id</th>
              <th>city code</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $sql_users = "SELECT * FROM city_master";
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
                <td><?php echo $row->city_id; ?></td>
                <td><?php echo $row->city_name; ?></td>
                <td><?php echo $row->state_name; ?></td>
                <td><?php echo $row->city_code; ?></td>
                <td>
                  
                  <a href="index.php?middlepage=edit_city&id=<?= $row->city_id; ?>">
                    <button class="btn  btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                  </a>
                 <a href="index.php?middlepage=delete_city&city_id=<?= $row->city_id; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn  btn-primary btn-xs"><i class="fa fa-trash-o"></i></button>
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
