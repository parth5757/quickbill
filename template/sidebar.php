<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        <a href="img/quickbill.png" class="img-circle" alt="User Image"></a>
        </div>
        <div class="pull-left info">
     
        </div>
      </div>
      <!-- search form -->
<!--      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>*/
      </form>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <!-- <li><a href="login.php"><i class="fa fa-book"></i> <span>Login</span></a></li>

        <li><a href="registration_user.php"><i class="fa fa-book"></i> <span>Registration</span></a></li> -->

        <?php if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 2) { ?>
            
	          <li><a href="index.php?middlepage=user_list"><i class="fa fa-book"></i> <span>Users</span></a></li>

            <li><a href="index.php?middlepage=purchess"><i class="fa fa-book"></i> <span>purchase</span></a></li>
            
	          <li><a href="index.php?middlepage=product"><i class="fa fa-book"></i> <span>Products</span></a></li>

	          <li><a href="index.php?middlepage=Category"><i class="fa fa-book"></i> <span>Product Category</span></a></li>
	    
	          <li><a href="index.php?middlepage=order_list"><i class="fa fa-book"></i> <span>Order</span></a></li>

	          <li><a href="index.php?middlepage=add_new_user"><i class="fa fa-book"></i> <span>Add New User</span></a></li>      

	          <li><a href="index.php?middlepage=stocke"><i class="fa fa-book"></i> <span>Avilable Stockes</span></a></li>
<!--            
	          <li><a href="index.php?middlepage=borrows_given"><i class="fa fa-book"></i> <span>Borrows Given</span></a></li>

	          <li><a href="index.php?middlepage=borrows_taken"><i class="fa fa-book"></i> <span>Borrows Taken</span></a></li>
-->
	         <li><a href="index.php?middlepage=state"><i class="fa fa-book"></i> <span>state</span></a></li>

	          <li><a href="index.php?middlepage=city"><i class="fa fa-book"></i> <span>city</span></a></li>

	          <li><a href="index.php?middlepage=area"><i class="fa fa-book"></i> <span>area</span></a></li>


            <li class="treeview">
              <a href="#">
              <i class="fa fa-book"></i><span>report</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
            <ul class="treeview-menu">
            <li><a href="index.php?middlepage=order_report"><i class="fa fa-circle-o"></i> order report</a></li>
            <li><a href="index.php?middlepage=purchess_report"><i class="fa fa-circle-o"></i> purchess report</a></li>
            <li><a href="index.php?middlepage=user_report"><i class="fa fa-circle-o"></i> user report</a></li>
            <li><a href="index.php?middlepage=product_sell_report"><i class="fa fa-circle-o"></i> Sell product report</a></li>
            <li><a href="index.php?middlepage=product_purchase_report"><i class="fa fa-circle-o"></i> purchess product report</a></li>
            <li><a href="index.php?middlepage=product_report"><i class="fa fa-circle-o"></i> product report</a></li>
          </ul>
        </li>
	          <li><a href="index.php?middlepage=feedback"><i class="fa fa-book"></i> <span>Feedbacks</span></a></li>

	          <li><a href="index.php?middlepage=contact_list"><i class="fa fa-book"></i> <span>Contact US</span></a></li>

        <?php } ?>
        
        <?php if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 3) { ?>

          <li><a href="index.php?middlepage=order_listw"><i class="fa fa-book"></i> <span>Show my order</span></a></li>
          
	        <li><a href="index.php?middlepage=new_order"><i class="fa fa-book"></i> <span>Order</span></a></li>

         <li><a href="index.php?middlepage=user_listw"><i class="fa fa-book"></i> <span>Users</span></a></li>

	        <li><a href="index.php?middlepage=productw"><i class="fa fa-book"></i> <span>Products</span></a></li>

	        <li><a href="index.php?middlepage=Categoryw"><i class="fa fa-book"></i> <span>Product Category</span></a></li>

	        <li><a href="index.php?middlepage=contact"><i class="fa fa-book"></i> <span>Contact US</span></a></li>

	        <li><a href="index.php?middlepage=add_feedback"><i class="fa fa-book"></i> <span>Feedback</span></a></li>

        <?php } ?>

	        <li><a href="index.php?middlepage=about"><i class="fa fa-book"></i> <span>About Us</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>