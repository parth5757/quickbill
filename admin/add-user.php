<?php
session_start();
include'dbconnection.php';
//Checking session is valid or not
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for updating user info
if(isset($_POST['Submit']))
{
	$name=$_POST['name'];
  $email=$_POST['email'];
	$add=$_POST['address'];
  $contact=$_POST['contact'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
	$license_id=$_POST['license_id'];
  $date = date('Y-m-d H:i:s');

  $dup_query=mysqli_query($con,"SELECT * FROM users WHERE email = '".$email."' OR contact = '".$contact."'");

  if($dup_query){
    $count = mysqli_num_rows($dup_query);
    if($count == 0) {
      $query=mysqli_query($con,"insert into users (name,email,address,contact,password,gender,dob,license_id,created_date) values ('".$name."','".$email."','".$add."','".$contact."','".$password."','".$gender."','".$dob."','".$license_id."','".$date."')");
      $_SESSION['msg']="User save successfully";
      if($query){
        header('location:manage-users.php');
      }
    }
  }
}
include('head.php');
?>

      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>User Details</h3>

				<div class="row">



                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php //if(isset($_SESSION['msg'])) { echo $_SESSION['msg']; }else{echo $_SESSION['msg']="";} ?></p>
                           <form class="form-horizontal style-form" name="form1" id="add_user_form" method="post" action="" onSubmit="return valid();">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Name </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="name" value="" >
                              </div>
                          </div>

                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Address</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="address" value="" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="email" value="" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Password </label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="password" value="" >
                              </div>
                          </div>
                               <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Contact no. </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="contact" value="" >
                              </div>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Birthdate </label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control" name="dob" value="" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Gender </label>
                              <div class="col-sm-10">
                                  <input type="radio" class="" name="gender" checked="true" value="Male" > Male<br>
                                  <input type="radio" class="" name="gender" value="Female" > Female </br>
                                  <input type="radio" class="" name="gender" value="Other" > Other
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">License Id </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="license_id" value="" >
                              </div>
                          </div>

                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Submit" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
      </section></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      // $(function(){
      //     $('select.styled').customSelect();
      // });

  </script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/additional-methods.min.js"></script>
    <script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });
    $( "#add_user_form" ).validate({
      rules: {
        name: {
          required: true,
        },
        email: {
          required: true,
          email: true
        },
        contact: {
          required: true,
        },
        address: {
          required: true,
        },
        gender:{
          required: true,
        },
        dob: {
          required: true,
        },
        license_id:{
          required:true,
        }
      },
      messages:{
        name:"Please enter name",
        email:"Please enter email",
        contact:"Please enter contact number",
        gender:"Please select gender",
        address:"Please enter address",
        dob:"Please enter date of birth",
        license_id:"Please enter license id",
      },
      submitHandler: function(form) {
        // do other things for a valid form
        form.submit();
      }
    });
  </script>
  </body>
</html>
<?php } ?>
