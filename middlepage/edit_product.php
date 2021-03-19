  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Quick Bill 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Edit Products</a></li>
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
    <section action="feedback_action.php" method="post">
      <div class="row">
        <div class="col-md-3">
        </div>
        <!-- left column -->
        <div class="col-md-6">
        <!-- right column -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><b>EDIT</b>Products</h3>
            </div>
            <!-- /.box-header -->
            <?php
              $sql_users="SELECT * FROM product_master where product_id =".$_GET['product_id'];
              $result= mysqli_query($conn,$sql_users);
              $res=mysqli_fetch_object($result);
            ?>
            <div class="box-body">
              <form role="form" name="product_details" action="index.php?middlepage=edit_product_action" method="post">
                <!-- text input -->
                <div class="form-group">  
                  <label>Name</label>
                  <input type="hidden" class="form-control" name="product_id" value="<?php echo $res->product_id; ?>">
                  <input type="text" class="form-control" name="product_name" onkeypress="return blockSpecialChar(event)"  value="<?php echo $res->product_name; ?>" placeholder="Enter Product Name" required>
                </div>
                <div class="form-group">
                  <label>Product Category Name</label>
                  <?php
                    $select_query=          "Select * from  product_category_master";
                    $select_query_run =     mysqli_query($conn, $select_query);
                  ?>
                  <select class="form-control" name="product_category_name" required>
                <?php
                   while ($select_query_array=   mysqli_fetch_array($select_query_run) )
                   {
                      echo "<option value='".$select_query_array['product_category_id']."'>".htmlspecialchars($select_query_array["category_name"])."</option>";
                   }
               ?>
        </select>
                </div>
                <div class="form-group">
                  <label>Price</label><br>
                    <input type="text" class="form-control" name="product_price" value="<?php echo $res->product_price; ?>" placeholder="Enter Product Price" maxlength="4" required>
                </div>
                <div class="form-group">
                  <label>Quntity</label><br>
                    <input type="text" name="quntity" value="<?php echo $res->quntity; ?>" minlength="1" maxlength="2" required>
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