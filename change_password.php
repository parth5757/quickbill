<?php
  include('include/config.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quick bill | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->  <!-- Content Wrapper. Contains page content -->
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
                  <input type="text" class="form-control" name="first name" placeholder="Enter First Name....." required>
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" placeholder="Enter Last Name....." required>
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
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <link rel="shortcut icon" href="img/quickbill.png" />
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login.php"><b>Quick</b>Bill</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <?php if(isset($_SESSION['error'])) { ?>
      <div class="callout callout-danger">
        <h4>Error!</h4>
        <p><?php echo $_SESSION['error']; ?></p>
        <?php unset($_SESSION['error']); ?>
      </div>
    <?php } ?>
    
    <form action="login_action.php" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required>
        
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        
      </div>
      <div class="row">
        <div class="col-xs-8">
<!--          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>-->
        </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <!-- <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button> -->
          <input type="submit" name="login" value="login" class="btn btn-primary btn-block btn-flat">
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
