<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
  <h1>
  </h1>
  <ol class="breadcrumb">
  </ol>
</section>
    <section class="content" style="padding-left: 30px;">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">product sell report</h3>
              <hr>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-hover dataTable" width="100%">
          <thead> 
          <tr>
            <th>Order id</th>
            <th>User Name</th>
            <th>user phone number</th>
            <th>user address</th>
            <th>product name</th>
            <th>quantity</th>
            <th>Price</th>
            <th>Total amount</th>     
            <th>Created date</th>
        
          </tr>
        </thead>
        <tbody>
        <?php
            $productid=$_POST['product_id'];
            $sql_users = "SELECT * FROM order_master WHERE product_id = '$productid' ";
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
        ?>
        <?php if($count == 0) { ?>
          <tr>
            <td colspan="16"><center>you have not sell this product </center></td>
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
          ?>
            <tr>
              <td><?= $row->main_order_id; ?></td>
              <td><?= $username ?></td>
              <td><?= $contact_no ?></td>
              <td><?= $useraddress ?></td>
              <td><?= $productname ?></td>
              <td><?= $row->quantity; ?></td>
              <td><?= $row->price; ?></td>
              <td><?= $row->total_amount; ?></td>
              <td><?= $row->created_date; ?></td>
            </tr>
          <?php } ?>
        <?php } ?>
        </tbody>
      </table>  
                  <div>
        <input type="submit" value="print" class="d-print-none" onclick="window.print()">
      </div>
    </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->

  <!-- /.row -->
</section>
    <!-- /.content -->
  </div>