
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category 
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?middlepage=Category">Category</a></li>
      </ol>
    </section>

    <section class="content" style="padding-left: 30px;">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Products Category List</h3>          
              <hr>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-hover dataTable" width="100%">
          <thead>     
            <tr>
              <th>Category Id</th>
              <th>Name</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $sql_users = "SELECT * FROM product_category_master";
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
          ?>
          <?php if($count == 0) { ?>
            <tr>
              <td colspan="16"><center>No Data Found </center></td>
            </tr>
          <?php } else { ?>
            <?php while($row = mysqli_fetch_object($result)) { ?>
              <tr>
                <td><?php echo $row->product_category_id; ?></td>
                <td><?php echo $row->category_name; ?></td>
                <td><?php echo $row->category_description; ?></td>
                <td>
                                       <div id="divLoading" class="show">               
                 </div>
                 <style >
                 #divloading
                 {
                    display :none;

                 }
                 #divloading
                 {
                    dispaly: block;
                    position: fixed;
                    z-index: 100;
                    background-color:#666
                    opacity: 0.4;
                    background-repeate: non repeate;
                    backgrund-position: center;
                    left:0;
                    righr: 0;
                    botoom: 0;
                    top: 0;
                  }
                  #loadinggif.show
                  {
                    top: 50;
                    position: absolute;
                    z- index: 101;
                    widthh: 32px;
                    height: 32px;
                    margin-left: -16px;
                    margin-top: -16px;
                  }
                  </style>
                
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
  </div>pro