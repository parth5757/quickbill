<?php
$sql_main_order = "SELECT * FROM main_order where main_order_id = " . $_GET['id'];
$result_main_order = mysqli_query($conn, $sql_main_order);
$data_main_order = mysqli_fetch_array($result_main_order);
$created_on = $data_main_order['created_on'];

$users = "SELECT * FROM user_registration where user_id = " . $data_main_order['user_id'];
$user_query = mysqli_query($conn, $users);
$user_info = mysqli_fetch_array($user_query);
//echo "<pre>";print_r($user_query);die;
if (isset($user_info)) {
    $username = $user_info['user_name'];
    $contact_no = $user_info['user_phone_number'];
    $email = $user_info['user_email'];
    $useraddress = $user_info['user_address'];
} else {
    $username = '';
    $contact_no = '';
    $email = '';
    $useraddress = '';
}

$sql_users = "SELECT * FROM order_master where main_order_id = " . $_GET['id'];
$result = mysqli_query($conn, $sql_users);
$count = mysqli_num_rows($result);
?>
<?php if ($count == 0) { ?>
    <tr>
        <td colspan="16"><center>No Data Found </center></td>
    </tr>
<?php } else { ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Quickbill
          <small class="pull-right">Date: <?php echo date("Y-m-d", strtotime($created_on)); ?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
<strong>Parth</strong><br>
                            tower<br>
                            Phone: 82004884675<br>
                            Email: psthakkar2@gmail.com        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
                            <strong>User Name: <?php echo $username; ?></strong><br>
                            user address: <?php echo $useraddress ?> <br>
                            Phone:  <?php echo $contact_no ?> <br>
                            Email:  <?php echo $email ?> 
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
                        <b>Invoice </b><br>
                        <br>
                        <b>Order ID: </b><?php echo $data_main_order['main_order_id']; ?><br>
                        <b>Payment Due: </b><?php echo $data_main_order['created_on']; ?><br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
                                    <th>user Name</th>
                                    <th>user phone number</th>
                                    <th>user address</th>
                                    <th>product name</th>
                                    <th>quantity</th>
                                    <th>Price</th>
                                    <th>Created date</th>

          </tr>
          </thead>
          <tbody>
                                            <?php
                                $total = 0;
                                while ($row = mysqli_fetch_object($result)) {
                                    $products = "SELECT * FROM product_master where product_id = " . $row->product_id;
                                    $user_query = mysqli_query($conn, $products);
                                    $product_info = mysqli_fetch_array($user_query);
                                    //echo "<pre>";print_r($user_query);die;
                                    if (isset($user_info)) {
                                        $productname = $product_info['product_name'];
                                    } else {
                                        $productname = '';
                                    }
                                    $created_date = date('Y-m-d h:m:s');
                                    $subtotal = $row->quantity * $row->price;
                                    $total = $total + $subtotal;
                                    ?>

          <tr>
                                        <td><?= $username ?></td>
                                        <td><?= $contact_no ?></td>
                                        <td><?= $useraddress ?></td>
                                        <td><?= $productname ?></td>
                                        <td><?= $row->quantity; ?></td>
                                        <td><?= $row->price; ?></td>                
                                        <td><?= $created_date; ?></td>
          </tr>
                                          <?php } ?>
                            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <!-- /.col -->
      <div class="col-xs-6">
        <p class="lead">Amount Due <?php echo date("Y-m-d", strtotime($created_on)); ?></p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
                                <td>Rs. <?= number_format((float) $total, 2, '.', ''); ?></td>
            </tr>
            <tr>
              <th>Shipping:</th>
              <td>Rs. 0.00</td>
            </tr>
            <tr>
              <th>Total:</th>
<td>Rs. <?= number_format((float) $total, 2, '.', ''); ?></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>