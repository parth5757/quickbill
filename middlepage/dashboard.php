      <?php if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 2) { ?>
<div class="content-wrapper">
  <link rel="shortcut icon" href="img/quickbill.png" />
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
<!--        Dashboard-->
      </h1>
      <ol class="breadcrumb">

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
          <?php
            $sql_users = "SELECT * FROM main_order";
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
            echo $count;
          ?>
               </h3>
              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a  class="small-box-footer"> order </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->  
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                     <?php
            $sql_users = "SELECT * FROM product_master";;
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
            echo $count;
          ?>
              </h3>

              <p>New Product</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
                     <a  class="small-box-footer"> product </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>      <?php
            $sql_users = "SELECT * FROM user_registration where user_type != 2";
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
            echo $count;
          ?>
</h3>

              <p>Register New User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          <a  class="small-box-footer"> user </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>     <?php
            $sql_users = "SELECT * FROM main_purchase";;
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
            echo $count;
          ?></h3>

              <p>New Purhcess</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          <a  class="small-box-footer"> purchess </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <!-- code here for latest order and latest products -->
      </div>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-b  ox-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                                <th>order id</th>
              <th>user id</th>
              <th>user Name</th>
<!--              <th>purchess id</th> -->
                <th>user phone number</th>
                              <th>user address</th>
              <th>product name</th>
              <th>quantity</th>
              <th>Price</th>
              <!-- <th>disscount</th>           -->
              <th>Created date</th>

                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                            <?php
            $sql_users = "SELECT * FROM order_master order by order_id DESC";
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
          ?>
    <?php if($count == 0) { ?>
            <tr>
              <td colspan="16"><center>No Data Found </center></td>
            </tr>
          <?php } else { ?>
            <?php while($row = mysqli_fetch_object($result)) { 
              // echo "<pre>";print_r($row);die;
              $users = "SELECT * FROM user_registration where user_id = ".$row->user_id;
              $user_query = mysqli_query($conn, $users);
              $user_info = mysqli_fetch_array($user_query);
              //echo "<pre>";print_r($user_query);die;
              if(isset($user_info)){
                $username = $user_info['user_name'];
                $contact_no = $user_info['user_phone_number'];
                $useraddress = $user_info['user_address'];

              }else{
                $username = '';
                $contact_no = '';
                $useraddress = '';
              }
        $products = "SELECT * FROM product_master where product_id = ".$row->product_id;
              $user_query = mysqli_query($conn, $products);
              $product_info = mysqli_fetch_array($user_query);
              //echo "<pre>";print_r($user_query);die;
              if(isset($user_info)){
                $productname = $product_info['product_name'];
              }else{
                $productname = '';
              }
              $created_date = date('Y-m-d h:m:s');
            ?>
              <tr>
                <td><?= $row->main_order_id; ?></td>
                <td><?= $row->user_id; ?></td>
                <td><?= $username ?></td>
                <td><?= $contact_no ?></td>
                <td><?= $useraddress ?></td>
                <td><?= $productname ?></td>
                <td><?= $row->quantity; ?></td>
                <td><?= $row->price; ?></td>
                <!-- <td><?php // echo $row->disscount; ?></td> -->
                <td><?= $row->created_date; ?></td>
              </tr>
            <?php } ?>
          <?php } ?>
          </tbody>
        </table>  
            <!-- /.box-body -->
            <div class="box-footer clearfix">
            </div>
            <!-- /.box-footer -->
          </div>
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Added Products</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <table class="table table-bordered table-hover dataTable" width="100%">
            <thead>     
            <tr>
              <th>Product id</th>
              <th>Product Name</th>
              <th>Product Category Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Description</th>
            </tr>
          </thead><tbody>
          <?php
            $sql_users = "SELECT * FROM product_master order by product_id DESC";
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
                $productcategoryname = '';
                
              }
            ?>
              <tr>
                <td><?= $row->product_id; ?></td>
                <td><?= $row->product_name; ?></td>
                <td><?= $productcategoryname ?></td>
               <td><?= $row->product_price ?></td>
<td><?= $productname ?></td>                

                <td><?= $row->product_description; ?></td>
      
                              </tr>
            <?php } ?>
          <?php } ?>
          </tbody>
        </table>  

            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="index.php?middlepage=product" class="uppercase">View All Products</a>
            </div>
            <!-- /.box-footer -->
          </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
        <?php } ?>
  <div class="content-wrapper">
      <?php if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 3) { ?>
  <link rel="shortcut icon" href="img/quickbill.png" />
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
<!--        Dashboard-->
      </h1>
      <ol class="breadcrumb">

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
          <?php
            $sql_users = "SELECT * FROM main_order  ";
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
            echo $count;
          ?>
               </h3>
              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a  class="small-box-footer"> order </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->  
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                     <?php
            $sql_users = "SELECT * FROM product_master";;
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
            echo $count;
          ?>
              </h3>

              <p>New Product</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
                     <a  class="small-box-footer"> product </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>      <?php
            $sql_users = "SELECT * FROM product_category_master";;
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
            echo $count;
          ?>
</h3>

              <p>product category</p>
            </div>
            <div class="icon">
<i class="ion ion-stats-bars"></i>
            </div>
          <a  class="small-box-footer"> user </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>     <?php
            $sql_users = "SELECT * FROM feedback_master where feedback_id= 2";
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
            echo $count;
          ?></h3>

              <p>Feedback</p>
            </div>
            <div class="icon">
              
                            <i class="ion ion-person-add"></i>
            </div>
          <a  class="small-box-footer"> purchess </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <!-- code here for latest order and latest products -->
      </div>
          <div class="box box-info">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                        
            <!-- /.box-body -->
            <div class="box-footer clearfix">
            </div>
            <!-- /.box-footer -->
          </div>
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Added Products</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <table class="table table-bordered table-hover dataTable" width="100%">
            <thead>     
            <tr>
              <th>Product id</th>
              <th>Product Name</th>
              <th>Product Category Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Description</th>
            </tr>
          </thead><tbody>
          <?php
            $sql_users = "SELECT * FROM product_master order by product_id DESC";
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
                $productcategoryname = '';
                
              }
            ?>
              <tr>
                <td><?= $row->product_id; ?></td>
                <td><?= $row->product_name; ?></td>
                <td><?= $productcategoryname ?></td>
               <td><?= $row->product_price ?></td>
<td><?= $productname ?></td>                

                <td><?= $row->product_description; ?></td>
      
                              </tr>
            <?php } ?>
          <?php } ?>
          </tbody>
        </table>  

            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="index.php?middlepage=product" class="uppercase">View All Products</a>
            </div>
            <!-- /.box-footer -->
          </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
        <?php } ?>
  </div>