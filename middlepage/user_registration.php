<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create New User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">New User</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <?php if(isset($_SESSION['registration_errors']) && !empty($_SESSION['registration_errors'])) { ?>
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <ul style="color: red">
                <?php
                 foreach($_SESSION['registration_errors'] AS $key => $value) { ?>
                  <li><?php echo $value; ?> </li>
                <?php } 
                unset($_SESSION['registration_errors']); 
                ?>
              </ul>
            </div>
            <div class="col-md-4"></div>
        <?php } ?>
      </div>
      <div class="row">
        <!-- right column -->
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <form action="registration_user_action.php" method="post">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="user name" name="user_name">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="email" class="form-control" placeholder="Email" name="user_email">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="phone_no" class="form-control" placeholder="phone_no" name="user_phone_number">
              <span class="glyphicon glyphicon-phone form-control-feedback"></span>
            </div>
             <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="Password" name="password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="conform password" name="confirm_password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="Birth_date" class="form-control" placeholder="Birth_date" name="birth_date">
              <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
            </div>
           
            <div class="form-group">
                
                <select class="form-control" name="user_type">
                    <option value="">--user_type--</option>
                    <option value="1">distriuter</option>
                    <option value="2">wholeseler</option>
                </select>
            </div>
            <div class="form-group has-feedback">
              <input type="organize_name" class="form-control" placeholder="organize_name" name="organize_name">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="gst_no" class="form-control" placeholder="gst_no" name="gst_no">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
              <div class="form-group has-feedback">
              <input type="pan_no"class="form-control" placeholder="pan_no" name="pan_no">
              <span class="glyphicon glyphicon-lock form-control-feedback"><sspan>
            </div>
          
              <div class="form-group has-feedback">
              <input type="id_proof"class="form-control" placeholder="id_proof" name="id_proof">
              <span class="glyphicon glyphicon-lock form-control-feedback"><sspan>
            </div>
                 <!-- country -->
            <div class="form-group">
                
                <select class="form-control" name="country_id">
                    <option value="">--select country --</option>
                    <option value="1">india</option>
                </select>
            </div>
            <!-- State -->
            <div class="form-group">
                
                <select class="form-control" name="state_id">
                    <option value="">--select state--</option>
                    <option value="1">Gujarat</option>
                    
                </select>
            </div>
            <div class="form-group">
              
              <select class="form-control" name="city_id">
                <option value="">--select city--</option>
                <option value="1">Ahamedabad</option>
                <option value="2">Surat</option>
                <option value="3">Rajkot</option>
                <option value="4">Vadodra</option>
                <option value="5">Gnadhinagar</option>
                <option value="6">anand</option>
                <option value="7">surat</option>
                <option value="8">bhuj</option>
                <option value="9">dahoad</option>
                <option value="10">jamnagagr</option>
                <option value="11">himatnagar</option>
                <option value="12">valsad</option>
                <option value="13">kutch</option>
              </select>
              <br/>
              <br/>
            </div>
            <div class="row">
              <div class="col-xs-8">
                <div class="checkbox icheck">
                  <label>
                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" name="registration" value="Submit" class="btn btn-primary btn-block btn-flat">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <div class="col-md-4">
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>