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
              <h3 class="box-title"><b>Add</b> New User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="user_details" action="index.php?middlepage=add_new_user_action" method="post">
                <!-- text input -->
                <div class="form-group">
                <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="user name"  name="user_name" required>
           
              </div>
              </div>
              <div class="form-group has-feedback">
                 <input type="email" class="form-control" placeholder="Email" name="user_email" required>
           
              </div>
              <div class="form-group has-feedback">
                 <input type="number" class="form-control" placeholder="phone_no" name="user_phone_number" required>
           
              </div>
          <div class="form-group has-feedback">
        <input type="date" class="form-control" placeholder="Birth_date" name="birth_date" required>
       
      </div>
     
      <div class="form-group">
          
          <select class="form-control"  name="user_type" required>
              <option value="">--user_type--</option>
              <option value="1">delaer</option>
              <option value="2">wholeseler</option>
          </select>
      </div>
      <div class="form-group has-feedback">
        <input type="organize_name" class="form-control" placeholder="organize_name" name="organize_name" required>
       
      </div>
      <div class="col-md-1 text-right">
        <label> 24</label>
      </div>
      <div class="form-group has-feedback col-md-11">
        <input type="text" class="form-control" placeholder="gst_no" maxlength="9" minlength="9" name="gst_no" required>
      </div>
      <div class="form-group has-feedback col-md-10">
        <input type="text" class="form-control" name="address" required>
      </div>
 <div class="form-group col-md-14">
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
      <div class="form-group has-feedback col-md-14">
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
      <div class="form-group has-feedback col-md-14">
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
          <div class="col-xs-4">
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