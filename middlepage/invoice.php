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
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Invoice
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="index.php?middlepage=invoice"><i class="active"></i> Invoice</a></li>
            </ol>
        </section>

        <div class="pad margin no-print">
            <!-- Main content -->
            <section class="invoice">
                <!-- title row -->
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="page-header">
                            <i class="fa fa-globe"></i> Quickbill
                            <small class="pull-right">Date: <?php echo date("Y-m-d", strtotime($created_on)); ?></small>
                        </h2>
                    </div>        <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        From
                        <address>
                            <strong>Parth</strong><br>
                            Jzkdn, Jzkxk<br>
                            Phone: 8200984675<br>
                            Email: psthakkar2@gmail.com
                        </address>
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
                        <table class="table table-bordered table-hover dataTable" width="100%">
                            <thead>       
                                <tr>

                                      <!-- <th>order id</th> -->
                                      <!-- <th>user id</th> -->
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
                                      <!-- <td><?= $row->order_id; ?></td> -->
                                      <!-- <td><?= $row->user_id; ?></td> -->
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
                <div class="col-xs-6">
                    <p class="lead">Amount Due 2/22/2014</p>

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

            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <a href="index.php?middlepage=invoice-print&id=<?php echo $_GET['id'] ?>" target="_blank" class="btn btn-default pull-right"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>
        </section>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>