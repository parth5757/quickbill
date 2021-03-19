<?php
include('include/config.php');

//Code for Forgot Password

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
// require_once('dbconnection.php');
if(isset($_POST) && isset($_POST['email'])) {

	$query = mysqli_query($conn, "SELECT password FROM user_registration WHERE user_email = '". $_POST['email']."'");

	if(mysqli_num_rows($query)) {
		$user_data = mysqli_fetch_assoc($query);
		$mail = new PHPMailer(true);

		$mail->isSMTP();                            // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                     // Enable SMTP authentication
		$mail->Username = 'quickbill1234@gmail.com';          // SMTP username
		$mail->Password = 'Quick bill@1234'; // SMTP password
		$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                          // TCP port to connect to
		// To here. 'cause default secure is TLS.

		$mail->setFrom('psthakkar2@gmail.com', 'Quickbill');

		$mail->Subject = "Forgot Password";
		$mail->msgHTML("Your Passwword is : ".$user_data['password']);
		$mail->addAddress($_POST['email'], "Parth");

		if (!$mail->send()) {
			$mail->ErrorInfo;
		} else {
			header('location:login.php');
		}
	} else {
		$_SESSION['error'] = "Email Id not Found";	
		header('location:login.php');
	}
}
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
  <!-- Font Awesome -->
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
    <p class="login-box-msg">Please enter your email id</p>
    <?php if(isset($_SESSION['error'])) { ?>
      <div class="callout callout-danger">
        <h4>Error!</h4>
        <p><?php echo $_SESSION['error']; ?></p>
        <?php unset($_SESSION['error']); ?>
      </div>
    <?php } ?>
    
    <form action="#" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required>
        
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
          <!-- <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button> -->
          <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-flat">
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
