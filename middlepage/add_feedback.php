  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quick Bill 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Feedback</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section action="feedback_action.php" method="post">
      <div class="row">
        <div class="col-md-3">
        </div>
        <!-- left column -->
        <div class="col-md-6">
        <!-- right column -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Feedback Form</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="feedback" action="middlepage/feedback_detail.php" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>user Name</label>
                  <input type="text" class="form-control" onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" name="user_name" placeholder="Enter user Name" required>
                </div>
                <div class="form-group">
                  <label>user email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter user email Address" required>
                </div>
                <div class="form-group">
                  <label>subject</label><br>
                    <input type="text" class="form-control" name="subject" placeholder="Enter user message Address" required>
                </div>
                <div class="form-group">
                  <label>messages</label>
                  <textarea class="form-control" name="message" required=""></textarea>
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