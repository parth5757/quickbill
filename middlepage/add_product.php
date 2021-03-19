
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Quick Bill 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Products</a></li>
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
              <h3 class="box-title">Create Products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="product_details" onkeypress="return blockSpecialChar(event)" action="middlepage/product_detail.php" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Product Name" required>
                </div>
                <div class="form-group">
                  <label>Category</label>
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
        </select>                </div>
                <div class="form-group">
                  <label>Price</label><br>
                    <input type="text" class="form-control" name="price" placeholder="Enter Product Price" maxlength="4" required>
                </div>
                <div class="form-group">
                  <label>Quantity</label><br>
                    <input type="text" name="quantity"  minlength="1" maxlength="2" required>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <input type="text" class="form-control" name="description" placeholder="Enter Product Description" required>
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