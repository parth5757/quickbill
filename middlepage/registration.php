  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quick Bill 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
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
              <h3 class="box-title">Registrartion Form</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" placeholder="Enter First Name.....">
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" placeholder="Enter Last Name.....">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="varchar" class="form-control" placeholder="Enter Email Address.....">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="varchar" class="form-control" placeholder="Enter Password.....">
                </div>

                 <!-- radio -->
                <div class="form-group">
                  <label>Gender</label>
                  <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Male
                      </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Female
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                      Other
                    </label>
                  </div>
                </div>

                <!-- State -->
                <div class="form-group">
                  <label>State</label>
                  <select class="form-control">
                    <option>Gujarat</option>
                    <option>Maharastra</option>
                    <option>Rajesthan</option>
                    <option>Madyaprades</option>
                    <option>goa</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>City</label>
                  <select class="form-control">
                    <option>Ahamedabad</option>
                    <option>Surat</option>
                    <option>Rajkot</option>
                    <option>Vadodra</option>
                    <option>Gnadhinagar</option>
                    <option>Mumbai</option>
                    <option>Pune</option>
                    <option>Nashik</option>
                    <option>Nagpur</option>
                    <option>Ajmer</option>
                    <option>Udaipur</option>
                    <option>Bhalwara</option>
                    <option>Alwar</option>
                  </select>
                  <br/>
                  <br/>
                   <div class="col-xs-4">
                     <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                  </div>
       
                </div>
                <br/>
                <br/>
                <a href="login.php" class="text-center">I have alradey ragister Member</a>
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
  <script type="text/javascript">
      function val() 
      {
        if (frm.phone.value=="") 
        {
          alert("please enter the phone number");
          frm.phone.focus();
          return false;
        }
        if (isNaN(frm.phone.value==""))
        {
          alert("invalid phone number");
          frm.phone.focus();
          return false;
        }
        if ((frm.phone.value).length<10) 
        {
          alert("phone number should be minimum 10 digit");
          frm.phone.focus();
          return false;
        }
        return true;
      }
    </script>