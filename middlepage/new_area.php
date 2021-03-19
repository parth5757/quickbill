  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quick Bill 
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?middlepage=area">Area</a></li>
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
    <section >
      <div class="row">
        <div class="col-md-3">
        </div>
        <!-- left column -->
        <div class="col-md-6">
        <!-- right column -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Create New Area</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="area" action="middlepage/area_action.php" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>Area name</label>
                  <input type="text" class="form-control" onkeypress="return blockSpecialChar(event)" name="area_name" placeholder="Enter Area name" required>
                </div>
                                  <label>State</label>
                  <?php
                    $select_query=          "Select * from  state_master";
                    $select_query_run =     mysqli_query($conn, $select_query);
                  ?>
                  <select class="form-control" name="state_name" required>
                <?php
                   while ($select_query_array=   mysqli_fetch_array($select_query_run) )
                   {
                      echo "<option value='".$select_query_array['state_id']."'>".htmlspecialchars($select_query_array["state_name"])."</option>";
                   }
               ?>
        </select>
                <div class="form-group">
                  <label>Area code</label>
                  <input type="text" class="form-control" name="area_code" placeholder="Enter area code" required>
                </div>
                  <br/>
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

