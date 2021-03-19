<?php
session_start();
include'dbconnection.php';
// checking session is valid for not 
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for deleting user
if(isset($_GET['id']))
{
$equipid=$_GET['id'];
$msg=mysqli_query($con,"delete from equipments where id='$equipid'");
if($msg)
{
header('location:manage-eqip.php');
}
}
include('head.php');?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Manage Equipments</h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All Equipments Details </h4>
	                  	  	  <a class="pull-right btn btn-primary" href="add-equip.php" style="margin-top:-30px;margin-right: 30px; ">Add Equipments</a>
                            <hr>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  <th class="hidden-phone">Name</th>
                                  <th>Details</th>
                                  <th>Price</th>
                                  <th>Time Duration</th>
                                  <th>Date</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from equipments");
							                 $cnt=1;
							                 if($ret){
                               while($row=mysqli_fetch_array($ret))
							                 {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['name'];?></td>
                                  <td><?php echo $row['details'];?></td>
                                  <td><?php echo $row['price'];?></td>
                                  <td><?php echo $row['time_duration'];?></td>  
                                  <td><?php echo $row['created_date'];?></td>
                                  <td>
                                     
                                     <a href="update-equip.php?id=<?php echo $row['id'];?>"> 
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <a href="manage-eqip.php?id=<?php echo $row['id'];?>"> 
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }
                              }else{?>
                              <tr>
                                <td colspan="6" align="center">No data avilable</td>
                              </tr>
                            <?php } ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
      </section
  ></section>
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