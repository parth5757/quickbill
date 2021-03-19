  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quick Bill 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Category</a></li>
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
              <h3 class="box-title"><b>Edit</b> Product Category</h3>
            </div>
            <!-- /.box-header -->
            <?php
            	$sql_users="SELECT * FROM product_category_master where product_category_id =".$_GET['product_category_id'];
          		$result= mysqli_query($conn,$sql_users);
          		$res=mysqli_fetch_object($result);
           	?>
            <div class="box-body">
              <form role="form" name="category_details" action="middlepage/edit_product_category_action.php" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>product category name</label>
                  <input type="text" class="form-control" name="product category name" onkeypress="return blockSpecialChar(event)" value="<?php echo"$res->category_name" ?>" placeholder="Enter Category Name" required>
                  <input type="hidden" name="id" value="<?php echo $_GET['product_category_id']; ?>">
                </div>
                <div class="form-group">
                  <label>product category description</label>
                  <input type="text" class="form-control" name="product category description" value="<?php echo"$res->category_description" ?>" placeholder="Enter Product Description" required>
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


