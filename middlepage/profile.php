<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User profile
      </h1>
      <ol class="breadcrumb"> 
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?middlepage=user_profile&user_id=<?= $row->user_id; ?>">User profile</a></li>
      </ol>
    </section>

    <section class="content" style="padding-left: 30px;">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
              <hr>
            </div>
            <!-- /.card-header -->
            <div class="card-body pi">
          <?php
            $sql_users = "SELECT * FROM user_registration where user_email='".$_SESSION['username']."'";
            $result = mysqli_query($conn, $sql_users);
            $count = mysqli_num_rows($result);
          ?>
          <?php if($count == 0) { ?>
              <center>No Data Found </center>
          <?php } else { ?>
            <?php while($row = mysqli_fetch_object($result)) { ?>
                                    <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="pull-left box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?php echo $row->user_name; ?></h3>
              <h5 class="widget-user-desc"><?php if($row->user_type == 2) {echo "distributer";}elseif($row->user_type == 3) {echo "wholeseller";} else{echo "deler";} ?></h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a class="pull-center badge bg-white">user email      :<span class="pull-center badge bg-white"><?php echo $row->user_email;?></span></li>
                <li><a class="pull-center badge bg-white">phone number  :<span class="pull-center badge bg-white"><?php echo $row->user_phone_number;?></span></li>
                <li><a class="pull-center badge bg-white">birth_date      :<span class="pull-center badge bg-white"><?php echo $row->user_email;?></span></li>
                <li><a class="pull-center badge bg-white">organize name:      :<span class="pull-center badge bg-white">                  <label><?php echo $row->organize_name; ?></label></span></li>
                <li><a class="pull-center badge bg-white">user address:      :<span class="pull-center badge bg-white">                  <label><?php echo $row->user_address; ?></label></span></li>
               <li><a class="pull-center badge bg-white">status:      :<span class="pull-center badge bg-white">                  <label><?php echo $row->status_id; ?></label></span></li>
                <li><a class="col-md-6" href="index.php?middlepage=edit_user&id=<?= $row->user_id; ?>">edit profile </a></li>
                <li><a class="col-md-6" href="index.php?middlepage=change_password&id=<?= $row->user_id; ?>">channge password </a></li>
              </ul>
            </div>
          </div>
  <?php } ?>
          <?php } ?>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>    
          