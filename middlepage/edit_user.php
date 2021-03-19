  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Quick Bill 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">edit user</a></li>
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
              <h3 class="box-title"><b>Edit</b> user detail</h3>
            </div>
            <!-- /.box-header -->
            <?php
                $sql_users="SELECT * FROM user_registration where user_id =".$_GET['id'];
                $result= mysqli_query($conn,$sql_users);
                $res=mysqli_fetch_object($result);
            ?>

            <div class="box-body">
              <form id="user_add_form"role="form" name="user_details" action="index.php?middlepage=edit_user_action" method="post">
                <!-- text input -->
                <div class="form-group">
                <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="user name" onkeypress="return blockSpecialChar(event)" value="<?php echo"$res->user_name" ?>" name="user_name" required>
           
              </div>
              </div>
               <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
              <div class="form-group has-feedback">
                 <input type="email" class="form-control" placeholder="Email" value="<?php echo"$res->user_email" ?>" name="user_email" required>
           
              </div>
              <div class="form-group has-feedback">
                 <input type="phone_no" class="form-control" placeholder="phone_no" value="<?php echo"$res->user_phone_number" ?>" name="user_phone_number" required>
           
              </div>
     
      <div class="form-group has-feedback">
        <input type="organize_name" class="form-control" placeholder="organize_name" value="<?php echo"$res->organize_name" ?>"  name="organize_name" required>
       
      </div>    
      <div class="form-group has-feedback col-md-14">
        <input type="address" class="form-control" placeholder="address" name="address" value="<?php echo"$res->user_address" ?>" required>
      </div>
        <div class="form-group has-feedback">
          <div>
      </div>     <div class="col-xs-4">
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
        organize_name:{
          required:true
        },
        address:{
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
        organize_name:{
          required:"Please enter organize name"
        },
        address:{
          required:"Please enter address"
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
  </script>