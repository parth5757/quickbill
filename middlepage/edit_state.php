  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quick Bill 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">State</a></li>
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
              <h3 class="box-title"><b>Edit</b> State</h3>
            </div>
            <!-- /.box-header -->
            <?php
              $sql_users="SELECT * FROM state_master where state_id =".$_GET['id'];
              $result= mysqli_query($conn,$sql_users);
              $res=mysqli_fetch_object($result);
            ?>
            <div class="box-body">
              <form role="form" name="category_details" action="middlepage/edit_state_action.php" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>State Name</label>
                  <input type="text" class="form-control" name="state name" onkeypress="return blockSpecialChar(event)" value="<?php echo"$res->state_name" ?>" placeholder="Enter Category Name" required>
                  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                </div>
                <div class="form-group">
                  <label>State</label>
                  <input type="text" class="form-control" name="state_code" value="<?php echo"$res->state_code" ?>" placeholder="Enter Product Description" required>
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


