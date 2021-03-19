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
    <section >
      <div class="row">
        <div class="col-md-3">
        </div>
        <!-- left column -->
        <div class="col-md-6">
        <!-- right column -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Create Product Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="category_details" action="middlepage/category_detail.php" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>product category name</label>
                  <input type="text" class="form-control" onkeypress="return blockSpecialChar(event)" name="product category name" placeholder="Enter product category name" required>
                </div>
                <div class="form-group">
                  <label>product category description</label>
                  <input type="text" class="form-control" name="product category description" placeholder="Enter product category description" required>
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

