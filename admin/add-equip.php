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
  $details=$_POST['details'];
  $price=$_POST['price'];
  $time=$_POST['time'];
  $cat_id=$_POST['category_id'];
  $sub_cat_id=$_POST['sub_category_id'];
	$is_verified=$_POST['is_verified'];
  $date = date('Y-m-d H:i:s');

	$query=mysqli_query($con,"insert into equipments (name,details,price,time_duration,category_id,sub_category_id,is_verified,image,created_date,modified_date) values ('".$name."','".$details."','".$price."','".$time."','".$cat_id."','".$sub_cat_id."','1','','".$date."','".$date."')");
	$_SESSION['msg']="Profile Updated successfully";
}
include('head.php');
?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Category</h3>
				<div class="row">
                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php //if(isset($_SESSION['msg'])) { echo $_SESSION['msg']; }else{echo $_SESSION['msg']="";} ?></p>
                           <form class="form-horizontal style-form" name="equipments" id="equipments_form" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
            								<div class="form-group">
            									<label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Name</label>
            									<div class="col-sm-10">
            										<input type="text" class="form-control" name="name" value="" >
            									</div>
            								</div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Price</label>
                              <div class="col-sm-10">
                                  <input type="number" max="100" class="form-control" name="price" value="" >
                              </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Details</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="details" value="" >
                              </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Category</label>
                              <div class="col-sm-10">
                                  <select name="category_id" class="form-control">
                                    <?php $ret=mysqli_query($con,"select * from category");
                                    if($ret){
                                      foreach ($ret as $key => $value) { ?>
                                      <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                     <?php }?>
                                    <?php } ?>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Sub Category</label>
                              <div class="col-sm-10">
                                  <select name="sub_category_id" class="form-control">
                                    <?php $ret=mysqli_query($con,"select * from sub_category");
                                    if($ret){
                                      foreach ($ret as $key => $value) { ?>
                                      <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                     <?php }?>
                                    <?php } ?>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Time Duration</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="time" value="" >
                              </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Verified</label>
                              <div class="col-sm-1">
                                  <input type="checkbox" name="is_verified" checked value="" >
                              </div>
                            </div>
                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Update" class="btn btn-theme"></div>
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
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });
    $( "#equipments_form" ).validate({
      rules: {
        name: {
          required: true,
        },
        price: {
          required: true,
        },
        details: {
          required: true,
        },
        category_id: {
          required: true,
        },
        sub_category_id: {
          required: true,
        },
        time:{
          required:true,
        }
      },
      messages:{
        name:"Please enter name",
        price:"Please enter price",
        details:"Please enter details",
        category_id:"Please select Category id",
        sub_category_id:"Please select Sub category id",
        time:"Please enter time duration",
      },
      submitHandler: function(form) {
        // do other things for a valid form
        form.submit();
      }
    });
    </script>

  <script>
      /*$(function(){
          $('select.styled').customSelect();
      });*/




  </script>

  </body>
</html>
<?php } ?>
