<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quickbill | Invoice</title>
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
<section class="content-header">
  <h1>
  </h1>
  <ol class="breadcrumb">
    <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="index.php?middlepage=order_list">Order</a></li>
  </ol>
</section>
    <section class="content" style="padding-left: 30px;">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">order report</h3>
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
            $startdate=$_POST['startdate'];
            $enddate=$_POST['enddate'];
            $sql_users = "SELECT * FROM order_master WHERE created_date BETWEEN '$startdate' AND '$enddate'";
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
  
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->

  <!-- /.row -->
</section><!-- ./wrapper -->
</body>
</html>