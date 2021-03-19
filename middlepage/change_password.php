  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quick Bill 
      </h1>
    </section>
      <?php
                $sql_users="SELECT * FROM user_registration where user_id =".$_GET['id'];
                $result= mysqli_query($conn,$sql_users);
                $res=mysqli_fetch_object($result);
      ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
        </div>
        <!-- left column -->
        <div class="col-md-6">
        <!-- right column -->
          <div class="box box-warning">
        <!-- /.box-header -->
            <div class="box-body">
              <form action="middlepage/change_password_action.php" role="form" method="post">
                <!-- text input -->
                                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" value="<?php echo"$res->user_email" ?>" readonly>
                </div>
                <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                  <label>New Password</label>
                  <input type="password" class="form-control" name="password" minlength="8" maxlength="8" placeholder="Enter New Password....." value="<?php echo"$res->password" ?>" required>
                </div>
                  <div class="col-xs-12">
                     <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                  </div>  
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>    