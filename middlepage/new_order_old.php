
<style type="text/css">
  input[type=number] {
  -moz-appearance:textfield;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Quick Bill 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Orders</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section >
      <div class="row">
        <div class="col-md-1">
        </div>
        <!-- left column -->
        <div class="col-md-9">
        <!-- right column -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">new order</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="product_details" action="middlepage/new_order_action.php" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>user name</label>
                  <?php
                    $select_query=          "Select * from  user_registration";
                    $select_query_run =     mysqli_query($conn, $select_query);
                  ?>
                  <select class="form-control" name="user_id" required>
                <?php
                   while ($select_query_array=   mysqli_fetch_array($select_query_run) )
                   {
                      echo "<option value='".$select_query_array['user_id']."'>".htmlspecialchars($select_query_array["user_name"])."</option>";
                   }
               ?>
        </select>
                </div>
                <hr>
                                <div class="form-group">
                
                <div class="form-group">

                <div class="form-group">
                   <label>product name</label>
        
                  </div>
            <div class="form-group"> 
            <table class="table" id="dynamic_field">
              <thead>
                <th>Product name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
              </thead>
              <tbody class="body_class">
                <tr>
                <?php
                    $select_query=          "Select * from product_master";
                    $select_query_run =     mysqli_query($conn, $select_query);
                ?>
                <td>
                <select class="form-control products_details_info_1" name="product[]" required>
                  <?php
                     while ($select_query_array=   mysqli_fetch_array($select_query_run) )
                    {
                        echo "<option value='".$select_query_array['product_id']."'>".htmlspecialchars($select_query_array["product_name"])."</option>";
                    }
                  ?>
                </select>
                </td>
                <td><input type="number" id="" class="form-control qty_1" name="quantity[]" value="1" max="2"></td>
                <td><input type="number" id="" name="price[]" class="form-control price_val_1" max="" readonly></td>
                <td><input type="number" id="" class="form-control total_rs_1" max="" readonly></td>
                <td style="margin-left: 10px;"><button type="button" name="add" id="add" class="btn btn-success pull"><i class="fa fa-plus"></i></button></td>
              </tr>  
              <!-- <tr id="TextBoxContainer"></tr> -->
              </tbody>
              
              <div ></div>
            </table>
      </div>
                <div class="form-group">
                  <label>disscount</label>
                  <input type="number"  class="form-control" name="disscount" placeholder="Enter Product disscount" required>
                </div>
                <div class="form-group">
                  <label>Payment Type</label>
                  <?php
                    $select_query = "Select * from payment_master";
                    $select_query_run = mysqli_query($conn, $select_query);
                  ?>
                  <select class="form-control" name="payment" required>
                  <?php
                   while ($select_query_array=   mysqli_fetch_array($select_query_run) )
                   { ?>
                    <option value='<?php echo $select_query_array["Payment_method"]; ?>'><?php echo $select_query_array["Payment_method"]; ?></option>
                   <?php  }?>
                </select>
                </div>
                  <br/>
                  <br/>
                   <div class="col-xs-4">
                     <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                  </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script>

<?php
$select_query = "Select * from product_master";
$select_query_run = mysqli_query($conn, $select_query);?>

$(document).ready(function(){
    $(function () {
      var i=2;
      $("#add").click(function () {
          $("#dynamic_field tbody").append('<tr><td><select data-id="'+i+'" class="form-control products_details_info '+i+'" name="product[]"><?php
            while ($select_query_array = mysqli_fetch_array($select_query_run) ){
            echo "<option value=".$select_query_array['product_id'].">".$select_query_array["product_name"]."</option>";
            } ?></td>' +'<td><input type="number" data-id="'+i+'" id="qty_'+i+'" class="form-control qty" name="quantity[]" value="1" max=""></td>'+'<td><input type="number" data-id="'+i+'" id="price_val_'+i+'" name="price[]" class="form-control" max="" readonly></td>'+'<td><input type="number" data-id="'+i+'" id="total_rs_'+i+'" class="form-control" max="" readonly></td>' + '<td><button type="button" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i></button></td></tr>');
          i++;
      });
      $("body").on("click", ".remove", function () {
          $(this).closest("tr").remove();
      });
  });


$(document).on('change','.products_details_info_1',function(){
  // console.info($(this).val());
  var product_id = $(this).val();
  $.ajax({
    url:"product_info_get.php",
    data:{"product_id":product_id}, 
    success: function(result){
    $(".price_val_1").val(result);
    $('.total_rs_1').val(1*result);
  }});
});


$(document).on('change','.qty_1',function(){
  console.info($(this).val());
  var qty = $(this).val();
  var price = $(".price_val_1").val();
  $('.total_rs_1').val(qty*price);

});


$(document).on('change','.products_details_info',function(){
  console.info($(this).attr('data-id'));
  var id = $(this).attr('data-id');
  var product_id = $(this).val();
  $.ajax({
    url:"product_info_get.php",
    data:{"product_id":product_id}, 
    success: function(result){
    $("#price_val_"+id).val(result);
    $('#total_rs_'+id).val(1*result);
  }});
});


$(document).on('change','.qty',function(){
  console.info($(this).val());
  console.info($(this).attr('data-id'));
  var id = $(this).attr('data-id');
  var qty = $(this).val();
  var price = $("#price_val_"+id).val();

  $('#total_rs_'+id).val(qty*price);

});

});
</script>