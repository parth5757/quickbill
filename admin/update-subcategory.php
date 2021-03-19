<?php
session_start();
include'dbconnection.php';
//Checking session is valid or not
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
} else{


if($_GET['id']){
  $eid = $_GET['id'];
}


// for updating user info    
if(isset($_POST['Submit']))
{
	$name=$_POST['name'];
  $details=$_POST['details'];
  $date = date('Y-m-d H:i:s');
  $cat_id = $_POST['category_id'];
	$query=mysqli_query($con,"UPDATE sub_category SET name='$name', details='$details',category_id = $cat_id , created_date = '$date' WHERE id='$eid'");
	$_SESSION['msg']="Sub-Category Updated successfully";
  if($query){
    header('location:manage-sub-category.php');
  }
}
include('head.php');
?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Category</h3>
				<div class="row">
                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php if(isset($_SESSION['msg'])) { echo $_SESSION['msg']; }else{echo $_SESSION['msg']="";} ?></p>
                      <?php if($_GET['id']){
                        $ret=mysqli_query($con,"select * from sub_category where id = ".$_GET['id']);
                        $row=mysqli_fetch_array($ret);
                        $name = $row['name'];
                        $details = $row['details'];
                        $category_id = $row['category_id'];
                      }else{
                        $name = '';
                        $details = '';
                        $category_id = '';
                      } ?>
                           <form class="form-horizontal style-form" name="category" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"></p>
            								<div class="form-group">
            									<label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Name</label>
            									<div class="col-sm-10">
            										<input type="text" class="form-control" name="name" value="<?= $name ?>" >
            									</div>
            								</div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Details</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="details" value="<?= $details ?>" >
                              </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Category</label>
                              <div class="col-sm-10">
                                  <select name="category_id" class="form-control">
                                    <?php $ret=mysqli_query($con,"select * from category");
                                    if($ret){
                                      foreach ($ret as $key => $value) { ?>
                                      <option value="<?php echo $value['id']; ?>" <?php if($category_id == $value['id']){ ?> selected <?php } ?> ><?php echo $value['name']; ?></option>
                                     <?php }?>
                                    <?php } ?>
                                  </select>
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
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>