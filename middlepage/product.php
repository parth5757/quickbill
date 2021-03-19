
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products 
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?middlepage=product">Products</a></li>
      </ol>
    </section>

    <section class="content" style="padding-left: 30px;">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Products List</h3>
              <a href="index.php?middlepage=add_product" style="margin-top: -30px;margin-right: 20px;" class="pull-right">Create New Product</a>
              <hr>
            </div>
            <!-- /
              .card-header -->
            <div class="card-body">
              <table class="table table-bordered table-hover dataTable" width="100%">
          <thead>     
            <tr>
              <th>Product id</th>
              <th>Product Name</th>
              <th>Product Category Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
<tbody>
          <?php
            $sql_users = "SELECT * FROM product_master";
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
          ?>
          <?php if($count == 0) { ?>
            <tr>
              <td colspan="16"><center>No Data Found </center></td>
            </tr>
          <?php } else { ?>
            <?php while($row = mysqli_fetch_object($result)) { 
//              echo "<pre>";print_r($row);die;
              $users = "SELECT * FROM product_category_master where product_category_id = ".$row->product_category_id;
              $user_query = mysqli_query($conn, $users);
              $user_info = mysqli_fetch_array($user_query);
//              echo "<pre>";print_r($user_query);die;
              if(isset($user_info)){
                $productcategoryname = $user_info['category_name'];
              }else{
                $productcategoryname = '';
                
              }
              $users = "SELECT * FROM product_master where product_id = ".$row->product_id;
              $user_query = mysqli_query($conn, $users);
              $user_info = mysqli_fetch_array($user_query);
//              echo "<pre>";print_r($user_query);die;
              if(isset($user_info)){
                $productname = $user_info['quntity'];
              }else{
                $productname = '';
                
              }
            ?>
              <tr>
                <td><?= $row->product_id; ?></td>
                <td><?= $row->product_name; ?></td>
                <td><?= $productcategoryname ?></td>
               <td><?= $row->product_price ?></td>
<td><?= $row->quntity; ?></td>                

                <td><?= $row->product_description; ?></td>
      <td>
                  <a href="index.php?middlepage=edit_product&product_id=<?= $row->product_id; ?>"><button class="btn  btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a> 
                  <a href="index.php?middlepage=delete_product&product_id=<?= $row->product_id; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn  btn-primary btn-xs"><i class="fa fa-trash-o"></i></button></a>
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