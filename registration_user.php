<?php include('include/config.php'); ?>
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

<body class="hold-transition login-page" style="background:#ccc;">
  
<div class="">  
  <div class="register-logo">
    <a href="registration_user.php"><b>Quick Bill</b></a>
  </div>
  <?php if(isset($_SESSION['registration_errors']) && !empty($_SESSION['registration_errors'])) { ?>
            <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-12">
              <ul style="color: red">
                <?php
                 foreach($_SESSION['registration_errors'] AS $key => $value) { ?>
                  <li><?php echo $value; ?> </li>
                <?php } 
                unset($_SESSION['registration_errors']); 
                ?>
              </ul>
            </div>
            <div class="col-md-3"></div>
          </div>
        <?php } ?>
        <div class="col-md-2"></div>
  <div class="register-box-body col-md-8">
    <p class="login-box-msg">Register a new membership</p>

    <form id="user_add_form" action="registration_user_action.php" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback col-md-6">
        <input type="text" class="form-control" onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" placeholder="Enter user name" name="user_name" required>
      </div>
      <div class="form-group has-feedback  col-md-6">
        <input type="email" class="form-control" placeholder="Email" name="user_email" required>
      </div>
      <div class="form-group has-feedback col-md-6">
        <input type="number" class="form-control" placeholder="phone no" name="user_phone_number" required />
      </div>
       <div class="form-group has-feedback col-md-6">
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
      </div>
      <div class="form-group has-feedback col-md-6">
        <input type="password" class="form-control" placeholder="conform password" name="confirm_password" required>
      </div>
      <div class="form-group has-feedback col-md-6">
        <input type="date" class="form-control" placeholder="Birth_date" name="birth_date" required>
      </div>
     
      <div class="form-group has-feedback col-md-6" >
          <select class="form-control" name="user_type" required>
              <option value="3">Wholesaler</option>
          </select>
      </div>

      <!--      <div class="form-group">
        <?php
        $select_query=          "Select * from product_master";
        $select_query_run =     mysqli_query($conn, $select_query);
        ?>
        <select class="form-control" name="user_type" required>
        <?php
          while ($select_query_array=   mysqli_fetch_array($select_query_run) )
          {
             echo "<option value='".$select_query_array['product_id']."'>".htmlspecialchars($select_query_array["product_name"])."</option>";
          }
        ?>
        </select>
      </div>-->
      <div class="form-group has-feedback col-md-6">
        <input type="organize name" class="form-control" placeholder="organize name" name="organize_name" required>
      </div>
      <div class="form-group has-feedback col-md-6">
        <input type="address" class="form-control" placeholder="address" name="address" required>
      </div>
      <div class="col-md-1 text-right">
        <label> 24</label>
      </div>
      <div class="form-group has-feedback col-md-5">
        <input type="text" class="form-control" placeholder="gst_no" maxlength="9" minlength="9" name="gst_no" required>
      </div>
      <div class="col-md-2 text-center">
        <label>ID Proof</label>
      </div>
      <div class="form-group has-feedback col-md-4">
        <input type="file" accept="png,jpg" class="form-control" name="id_proof" required>
      </div>
    
           <!-- country -->
      <div class="form-group has-feedback col-md-6" style="display: none;">
                     
          <select class="form-control" value="<?php echo"$res->country" ?>"  name="country_id" required>
              <option value="">--select country --</option>
              <option selected value="1">India</option>
          </select>
      </div>
      <!-- State -->
      
      <div class="form-group col-md-6">
        <?php
        $select_query=          "Select * from state_master";
        $select_query_run =     mysqli_query($conn, $select_query);
        ?>
        <select id="state" name="state_id" class="form-control" required>
          <option value="">--select state --</option>
          <?php
            while ($select_query_array=   mysqli_fetch_array($select_query_run) )
            {
               echo "<option value='".$select_query_array['state_id']."'>".htmlspecialchars($select_query_array["state_name"])."</option>";
            }
          ?>
        </select>
      
      </div>
      <!--city-->
      <div class="form-group has-feedback col-md-6">
              <?php
        $select_query=          "Select * from city_master";
        $select_query_run =     mysqli_query($conn, $select_query);
        ?>
        <select class="form-control" required id="city" name="city">
                      <option value="">--select city --</option>
        <?php
          while ($select_query_array=   mysqli_fetch_array($select_query_run) )
          {
             echo "<option value='".$select_query_array['city_id']."'>".htmlspecialchars($select_query_array["city_name"])."</option>";
          }
        ?>
        </select>
      </div>
      <div class="form-group has-feedback col-md-6">
              <?php
        $select_query=          "Select * from area_master";
        $select_query_run =     mysqli_query($conn, $select_query);
        ?>
        <select class="form-control" required id="area" name="area_id">
                      <option value="">--select area --</option>
        <?php
          while ($select_query_array=   mysqli_fetch_array($select_query_run) )
          {
             echo "<option value='".$select_query_array['area_id']."'>".htmlspecialchars($select_query_array["area_name"])."</option>";
          }
        ?>
        </select>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
           </div>
        </div>

        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" name="registration" value="Submit" onclick="return val();" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="login.php" class="text-center">I already have a membership</a>
  </div>
  <div class="col-md-2"></div>
  <!-- /.form-box -->
</div>
</body>
</html>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });

    $.validator.addMethod("minAge", function(value, element, min) {
    var today = new Date();
    var birthDate = new Date(value);
    var age = today.getFullYear() - birthDate.getFullYear();

    if (age > min+1) {
        return true;
    }

    var m = today.getMonth() - birthDate.getMonth();

    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    return age >= min;
}, "You are not old enough!");

    $( "#user_add_form" ).validate({
      rules: {
        user_name:{
          required:true
        },
        user_email:{
          required:true
        },
        password:{
          required:true
        },
        confirm_password:{
          equalTo: "#password"
        },
        user_type:{
          required:true
        },
        organize_name:{
          required:true
        },
        address:{
          required:true
        },
        gst_no:{
          required:true
        },
        id_proof:{
          required:true,
          accept: "image/gif, image/jpg, image/jpeg, image/png"
        },
        country:{
          required:true
        },
        user_phone_number: {
          required: true,
          minlength:10,
          maxlength:10,
          number: true,
        },
        birth_date: {
          required: true,
          minAge: 18,
        },
      },
      messages:{
        user_name:{
          required:"Please enter name"
        },
        user_email:{
          required:"Please enter email"
        },
        password:{
          required:"Please enter password"
        },
        confirm_password:{
          required:"Password not match"
        },
        user_type:{
          required:"Please enter type User type"
        },
        organize_name:{
          required:"Please enter organize name"
        },
        address:{
          required:"Please enter address"
        },
        gst_no:{
          required:"Please enter gst no"
        },
        id_proof:{
          required:"Please upload id proof",
          accept: "Please upload only jpg or png"
        },
        country:{
          required:"Please Select country"
        },
        user_phone_number:{
          required:"Please enter contact number",
          minlength:"contact number must be 10 digit",
          maxlength:"contact number is not more than 10 digit",
          number:"contact number is must be in digit",
        },
        birth_date: {
            required: "Please enter you date of birth.",
            minAge: "You must be at least 18 years old!"
        },
      },
      submitHandler: function(form) {
        // do other things for a valid form
        // return false;
        form.submit();
      }
    });
    $( document ).ready(function() {
      $('#state').on('change',function(){//change function on country to display all state 
        var stateCode = $(this).val();
        if(stateCode){
          $.ajax({
            type:'POST',
            url:'cityAjaxData.php',
            data:'state_id='+stateCode,
            success:function(html){
              $('#city').html(html);
            }
          });
        } else {
          $('#city').html('<option value="">Select state first</option>');
        }
      });

      $('#city').on('change',function(){//change function on country to display all state 
        var cityCode = $(this).val();
        if(cityCode) {
          $.ajax({
            type:'POST',
            url:'areaAjaxData.php',
            data:'city_id='+cityCode,
            success:function(html){
              $('#area').html(html);
            }
          });
        } else {
          $('#area').html('<option value="">Select City first</option>');
        }
      });
    });
  </script>