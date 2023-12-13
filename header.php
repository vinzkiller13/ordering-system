<?php
include 'ordering_systemData/config.php';
?>
<header class="header">

   <div class="flex">

      <a href="student_homepage.php" class="logo">ELJV</a>
      <a href="products.php" class="products">products</a>
      
     
      <nav class="navbar">
         
         <ul class="sd_program">
            <li><a href="student_myAccount.php"><i class="fa-solid fa-user"></i></a>
               <ul class="shs_items">
                  <li><a href="change_password.php">Change Password</a></li>
                  <li><a href="student_user.php">Upload Receipt</a></li>
                  <li><a href="logout.php">LOGGING OUT</a></li>
               </ul>
            </li>
         </ul>
      
      </nav>
      
      
      
      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `tbl_cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

   ?>

   <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i>&nbsp&nbsp<span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>