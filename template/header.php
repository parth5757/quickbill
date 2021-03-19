<header class="main-header">
    <!-- Logo -->
      <link rel="shortcut icon" href="img/uickbill.png" />
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Q</b>B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Quick </b> Bill</span>
    </a>
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/quickbill.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Quick bill</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/quickbill.png" class="img-circle" alt="User Image">

                <p>
                  Quick bill
                  <small><?php echo $_SESSION['username']; ?></small> 
                            <?php
            $sql_users = "SELECT * FROM user_registration where user_email='".$_SESSION['username']."'";
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
          ?>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body"> -->
                <!-- <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> -->
                <!-- /.row -->
              <!-- </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="index.php?middlepage=profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat" onclick="return confirm('Are you sure to sign-out');">Sign out</a>
                                
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>