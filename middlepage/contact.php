  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quick Bill 
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li> <a href="index.php?middlepage=contact"><i class="active"></i> Contact </a> </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
        </div>
        <!-- left column -->
        <div class="col-md-6">
        <!-- right column -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Contact</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="middlepage/contact_action.php" role="form" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"   name="first name" placeholder="Enter First Name....." required>
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" placeholder="Enter Last Name....." required>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="user_email" placeholder="Enter Email Address....." required>
                </div>
                <div class="form-group">
                  <label>Comment</label>
                  <textarea class="form-control" name="comment" required></textarea>
                </div>

                  <br/>
                  <br/>
                  <div class="col-xs-4">
                     <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
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