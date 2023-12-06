<?php
include 'ordering_systemData/config.php'
?>
<header class="header">

   <div class="flex">

      <a href="student_homepage.php" class="logo">ELJV</a>

      <nav class="navbar">
         <a href="products.php">products</a>
         <a href="student_myAccount.php"><i class="fa-solid fa-user"></i>  MyAccount</a>
      </nav>

      <?php
      
         $select_rows = mysqli_query($conn, "SELECT * FROM `tbl_cart`") or die('query failed');
         $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>