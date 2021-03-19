
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
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?middlepage=purchess_user">Purchess</a></li>
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
              <h3 class="box-title">new purchess</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="product_details" action="middlepage/purchess_action.php" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>user name</label>
                  <?php
                    $select_query=          "Select * from  user_registration WHERE user_type = 1";
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
                   <label>product detail</label>
        
                  </div>
            <div class="form-group"> 
            <table class="table" id="dynamic_field">
              <thead>
                <th>Product name</th>
                <th>Quantity</th>
                <th>Type</th>
                <th>Price per Piece</th>
                <th>Total Price per piece</th>
                <th>Action</th>
              </thead>
              <tbody class="body_class">
                <tr>
                <?php
                    $select_query=          "Select * from product_master";
                    $select_query_run =     mysqli_query($conn, $select_query);
                ?>
                <td>
                <select class="form-control products_details_info" data-id="1" id="products_details_info_1" name="product[]" required>
                  <option value="">Select</option>
                  <?php
                     while ($select_query_array=   mysqli_fetch_array($select_query_run) )
                    {
                        echo "<option value='".$select_query_array['product_id']."'>".htmlspecialchars($select_query_array["product_name"])."</option>";
                    }
                  ?>
                </select>
                </td>
                <td><input type="number" id="qty_1" class="form-control qty" data-id="1" name="quantity[]" value="1"  min="1" max="2"></td>
                <td>
                  <select class="form-control qty_type" id="qty_type_1" data-id="1" name="qty_type[]" required>
                    <!-- <option value="1">Piece</option> -->
                    <option value="2">Box</option>
                    <!-- <option value="3">Cartoon</option> -->
                  </select>
                </td>
                <td><input type="number" id="price_val_1" data-id="1" name="price[]" class="form-control price_val" max="" readonly></td>
                <td><input type="number" id="total_rs_1" data-id="1" name="total_amount[]" class="form-control total_rs" max="" readonly></td>
                <td style="margin-left: 10px;"><button type="button" name="add" id="add" class="btn btn-success pull"><i class="fa fa-plus"></i></button></td>
              </tr>  
              <!-- <tr id="TextBoxContainer"></tr> -->
              </tbody>
              
              <div ></div>
            </table>
      </div>
                <div class="form-group">
                  <label>Total</label>
                  <input type="text" class="form-control" id="grand_total" name="total_order_amount" readonly required>
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
                    <option value='<?php echo $select_query_array["Payment_id"]; ?>'><?php echo $select_query_array["Payment_method"]; ?></option>
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
          $("#dynamic_field tbody").append('<tr><td><select data-id="'+i+'" class="form-control products_details_info" id="products_details_info_'+i+'" name="product[]"><option value="">Select</option><?php
            while ($select_query_array = mysqli_fetch_array($select_query_run) ){
            echo "<option value=".$select_query_array['product_id'].">".$select_query_array["product_name"]."</option>";
            } ?></td>' +'<td><input type="number" data-id="'+i+'" id="qty_'+i+'" class="form-control qty" name="quantity[]" value="1" min="1" max="2"></td>'+'<td><select data-id="'+i+'" class="form-control qty_type" id="qty_type_'+i+'" name="qty_type[]"><option value="2">Box</option></select></td>'+'<td><input type="number" data-id="'+i+'" id="price_val_'+i+'" name="price[]" class="form-control price_val" max="" readonly></td>'+'<td><input type="number" id="total_rs_'+i+'" name="total_amount[]" data-id="'+i+'" class="form-control total_rs" max="" readonly></td>' + '<td><button type="button" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i></button></td></tr>');
          i++;
      });
      $("body").on("click", ".remove", function () {
          $(this).closest("tr").remove();
      });
  });


  function cal_grand_total() {
    var grand_total = 0;
    setTimeout(function(){ 
      $(".total_rs").each(function( index ) {
        grand_total = parseInt(grand_total) + parseInt($(this).val());
      });
      $("#grand_total").val(parseInt(grand_total));
    }, 100);
  }

 
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
    cal_grand_total()
  });


  $(document).on('change','.qty',function(){
    console.info($(this).val());
    console.info($(this).attr('data-id'));
    var id = $(this).attr('data-id');
    var qty = $(this).val();
    var price = $("#price_val_"+id).val();

    $('#total_rs_'+id).val(qty*price);
    cal_grand_total()
  });

});
</script>
