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
  $contact=$_POST['contact'];
  $dob=$_POST['dob'];
  $address=$_POST['address'];
	$license_id=$_POST['license_id'];
  $uid=intval($_GET['uid']);
$query=mysqli_query($con,"update users set name='$name' ,email='$email' , contact='$contact', license_id = '$license_id', address = '$address',dob = '$dob' where id='$uid'");
$_SESSION['msg']="user Updated successfully";
  if($query){
    header('location:manage-users.php');
  }
}
include('head.php'); ?>
      <?php $ret=mysqli_query($con,"select * from users where id='".$_GET['uid']."'");
	  while($row=mysqli_fetch_array($ret))

	  {?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $row['name'];?>'s Information</h3>

				<div class="row">



                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php //if(isset($_SESSION['msg'])) { echo $_SESSION['msg']; }else{echo $_SESSION['msg']="";} ?></p>
                           <form class="form-horizontal style-form" name="update_user_form" id="update_user_form" method="post" action="" onSubmit="return valid();">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Name </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" >
                              </div>
                          </div>

                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" readonly >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Address</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>" >
                              </div>
                          </div>
                               <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Contact no. </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="contact" value="<?php echo $row['contact'];?>" >
                              </div>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Birthdate </label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control" name="dob" value="<?php echo $row['dob'];?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">License Id </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="license_id" value="<?php echo $row['license_id'];?>" >
                              </div>
                          </div>
                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Update" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
        <?php } ?>
      </section></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/additional-methods.min.js"></script>
    <script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });
    $( "#update_user_form" ).validate({
      rules: {
        name: {
          required: true,
        },
        email: {
          required: true,
        },
        contact: {
          required: true,
        },
        address: {
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
