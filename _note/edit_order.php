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
              <h3 class="box-title">Edit order</h3>
            </div>
            <!-- /.box-header -->
               <?php
                $sql_users="SELECT * FROM order_master where order_id =".$_GET['id'];
                $result= mysqli_query($conn,$sql_users);
                $res=mysqli_fetch_object($result);
            ?>
            <div class="box-body">
              <form role="form" name="product_details" action="middlepage/edit_order_action.php" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>user name</label>
                  <?php
                    $select_query=          "Select * from  user_registration";
                    $select_query_run =     mysqli_query($conn, $select_query);
                  ?>
                  <select class="form-control" name="user name" value="<?php echo"$res->user_name" ?>" required>
                <?php
                   while ($select_query_array=   mysqli_fetch_array($select_query_run) )
                   {
                      echo "<option value='".$select_query_array['user_id']."'>".htmlspecialchars($select_query_array["user_name"])."</option>";
                   }
               ?>
        </select>
                </div>
                                <div class="form-group">
                  <label>product Category name</label>
 <?php
                    $select_query=          "Select * from product_category_master";
                    $select_query_run =     mysqli_query($conn, $select_query);
                  ?>
                  <select class="form-control" name="product category name" value="<?php echo"$res->product_category_name" ?>" required>
                <?php
                   while ($select_query_array=   mysqli_fetch_array($select_query_run) )
                   {
                      echo "<option value='".$select_query_array['product_category_id']."'>".htmlspecialchars($select_query_array["category_name"])."</option>";
                   }
               ?>
        </select>
                </div>
                <div class="form-group">

                <div class="form-group">
                  <label>product name</label>
                  <?php
                    $select_query=          "Select * from product_master";
                    $select_query_run =     mysqli_query($conn, $select_query);
                  ?>
                  <select class="form-control" name="product name" value="<?php echo"$res->product_name" ?>" required>
                <?php
                   while ($select_query_array=   mysqli_fetch_array($select_query_run) )
                   {
                      echo "<option value='".$select_query_array['product_id']."'>".htmlspecialchars($select_query_array["product_name"])."</option>";
                   }
               ?>
        </select>
                  </div>
                  <label>Price</label><br>
                    <input type="text" class="form-control" name="price" value="<?php echo"$res->price" ?>" placeholder="Enter Product Price" maxlength="4" required>
                </div>
                <div class="form-group">
                  <label>quantity</label><br>
                    <input type="text" name="quantity" value="<?php echo"$res->quantity" ?>" minlength="1" maxlength="2" required>
                </div>
                <div class="form-group">
                  <label>disscount</label>
                  <input type="number"  class="form-control" name="disscount" value="<?php echo"$res->disscount" ?>" placeholder="Enter Product disscount" required>
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