
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
  $("form[name='category_details']").validate({
    rules: {
      name: "required",
      description: "required",
      // email: {
      //   required: true,
      //   email: true
      // },
    },
    // Specify validation error messages
    messages: {
      name: "Please enter name",
      description: "Please enter description",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
  
      
    
  

  	});
  </script>