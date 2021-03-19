  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quick Bill 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">City</a></li>
      </ol>
    </section>
<script type="text/javascript">
    function blockSpecialChar(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }
    </script>
    <!-- Main content -->
    <section>
      <div class="row">
        <div class="col-md-3">
        </div>
        <!-- left column -->
        <div class="col-md-6">
        <!-- right column -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Edit</b>City</h3>
              <p><?php if(isset($_SESSION['error'])){ echo $_SESSION['error']; } ?></p>
            </div>
            <!-- /.box-header -->
            <?php
              // echo "<pre>";print_r($_GET);die;
              $sql_users="SELECT * FROM city_master where city_id =".$_GET['id'];
              $result= mysqli_query($conn,$sql_users);
              $res=mysqli_fetch_object($result);
            ?>
            <div class="box-body">
              <form role="form" name="category_details" action="middlepage/edit_city_action.php" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>City Name</label>
                  <input type="text" class="form-control" name="city_name" onkeypress="return blockSpecialChar(event)" value="<?php echo"$res->city_name" ?>" placeholder="Enter Category Name" required>
                  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                </div>
                <div class="form-group">
                                  <label>State</label>
                  <?php
                    $select_query=          "Select * from  state_master";
                    $select_query_run =     mysqli_query($conn, $select_query);
                  ?>
                  <select class="form-control" name="state_name" value="<?php echo"$res->state_name" ?>" required>
                <?php
                   while ($select_query_array=   mysqli_fetch_array($select_query_run) )
                   {
                      echo "<option value='".$select_query_array['state_id']."'>".htmlspecialchars($select_query_array["state_name"])."</option>";
                   }
               ?>              
               </select>
               </div>
                 <div class="form-group">
                  <label>City code</label>
                  <input type="text" class="form-control" name="city_code" value="<?php echo"$res->city_code" ?>" placeholder="Enter city name" required>
                </div>
                  <br/>
                   <div class="col-xs-4">
                     <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                  </div>
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


