<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <ol class="breadcrumb">
      </ol>
    </section>

    <section class="content" style="padding-left: 30px;">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">user report</h3>
              <hr>
            </div>
            <!-- /
              .card-header -->
            <div class="card-body">
              <table class="table table-bordered table-hover dataTable" width="100%">
          <thead>     
            <tr>
              <th>User id</th>
              <th>User Name</th>
              <th>Email</th>
              <th>phone no</th>
              <th>Birth date</th>
              <th>User Type </th>
              <th>Organize </th>
              <th>stutus id </th>
            </tr>
          </thead>
<tbody>
          <?php
              $startdate=$_POST['startdate'];
            $enddate=$_POST['enddate'];
            $sql_users = "SELECT * FROM user_registration WHERE created_date BETWEEN '$startdate' AND '$enddate'";
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
          ?>
          <?php if($count == 0) { ?>
            <tr>
              <td colspan="16"><center>No Data Found </center></td>
            </tr>
          <?php } else { ?>
            <?php while($row = mysqli_fetch_object($result)) { 
            ?>
              <tr>
                <td><?= $row->user_id; ?></td>
                <td><?= $row->user_name; ?></td>
                <td><?= $row->user_email ?></td>
               <td><?= $row->user_phone_number ?></td>
                <td><?= $row->birth_date ; ?></td>                
                <td><?= $row->user_type; ?></td>
                <td><?= $row->organize_name ; ?></td>
                <td><?= $row->status_id; ?></td>
                              </tr>
            <?php } ?>
          <?php } ?>
          </tbody>
        </table>  
              <div>
        <input type="submit" class="no-print" name="print" value="print" onclick="window.print()">
      </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>