<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="css/student_prod.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="navbar">
      <button class="open-btn" id="openBtn"><i class="fa-solid fa-bars"></i></button>
      <button class="iconCart"><i class="fa-solid fa-cart-shopping"></i></button>
      <div class="order_Quantity">0</div>
    </div>
    <div class="sidebar" id="sidebar">
      <button class="close-btn" id="closeBtn">&times;</button>
      <ul>
        <li><a href="student_homepage.php" data-content="Content 1">Home</a></li>
        <li><a href="student_product.php" data-content="Content 2">Products</a>
        <ul>
          <li><a href="student_special.php">Special Uniform</a></li>
        </ul>
        </li>
        <li><a href="student_shopping.php" data-content="Content 3">Shopping Cart</a></li>
        <li><a href="student_user.php" data-content="Content 4">User Settings</a></li>
        <li><a href="student_myAccount.php" data-content="Content 5">MyAccount</a></li>
        </ul>
    </div>
    
    <div class="container">
      <div class="product">
        <div class="product-card">
          <h2 class="name">BSIT YARD FOR SPECIAL SIZE UNIFORM</h2>
          <button class="popup-btn">Quick View</button>
          <img src="1.png" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="1.png" alt="">
            </div>
            <div class="info">
              <h2>BSIT UNIFORM<br><span>MEN</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <span class="price">$120.00</span>
                  <a href="#">
                    <button class="add-cart-btn" >ADD TO CART</button>
                  </a>
                  
            </div>
          </div>
      </div>
    </div>
  </div>
  <script src="js/side.js"></script>
  <script src="js/product.js"></script>
  <script src="js/size.js"></script>
</body>
</html>
