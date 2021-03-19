
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Stock
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="index.php?middlepage=stocke">Stock</a></li	>
        </ol>
    </section>

    <section class="content" style="padding-left: 30px;">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Total Stock List</h3>
                        <hr>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover dataTable" width="100%">
                            <thead>			
                                <tr>
                                    <th>Product id</th>
                                    <th>Product Name</th>
                                    <th>Remaining Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // If distriuter than dispaly all stock, else only those product stock which wholesaler is logged in
                                if($_SESSION['user_type'] == 2) {
                                    $sql_users = "SELECT pm.*, prm.product_name FROM purchases_master pm LEFT JOIN product_master prm ON pm.product_id = prm.product_id";
                                } else {
                                    $sql_users = "SELECT pm.*, prm.product_name FROM purchases_master pm LEFT JOIN product_master prm ON pm.product_id = prm.product_id WHERE pm.user_id = " . $_SESSION['user_id'];
                                }
                                
                                $result = mysqli_query($conn, $sql_users);
                                $count = mysqli_num_rows($result);
                                ?>
                                <?php if ($count == 0) { ?>
                                    <tr>
                                        <td colspan="16"><center>No Data Found </center></td>
                                </tr>
                            <?php } else { ?>
                                <?php
                                while ($row = mysqli_fetch_object($result)) {
                                    /* $users = "SELECT * FROM product_master where product_id = " . $row->product_id;
                                    $user_query = mysqli_query($conn, $users);
                                    $user_info = mysqli_fetch_array($user_query);
                                    //echo "<pre>";print_r($user_query);die;
                                    if (isset($user_info)) {
                                        $productname = $user_info['product_name'];
                                    } else {
                                        $productname = '';
                                    } */
                                    
                                    $ordered_product = "SELECT sum(quantity) AS sold FROM order_master where product_id = " . $row->product_id;
                                    $order_query = mysqli_query($conn, $ordered_product);
                                    $order_info = mysqli_fetch_array($order_query);
                                    
                                    if (!empty($order_info)) {
                                        $used_qty = $order_info['sold'];
                                    } else {
                                        $used_qty = 0;
                                    }
                                    ?>
                                    <tr>
                                        <td><?php echo $row->product_id; ?></td>
                                        <td><?php echo $row->product_name; ?></td>
                                        <td><?php echo $row->quantity - $used_qty; ?></td>
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
