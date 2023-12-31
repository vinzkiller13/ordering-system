<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="css/student_product.css">
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
        <li><a href="student_product.php" data-content="Content 2">Products</a></li>
        <li><a href="#" data-content="Content 3">Shopping Cart</a></li>
        <li><a href="#" data-content="Content 4">User Settings</a></li>
        <li><a href="#" data-content="Content 5">MyAccount</a></li>
        </ul>
    </div>
    
    <div class="container">
      <div class="product">
        <div class="product-card">
          <h2 class="name">Uniform</h2>
          <span class="price">$120.00</span>
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
              <h2>Uniform<br><span>Men and Women</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <span class="price">$120.00</span>
              <a href="#" class="add-cart-btn">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-card">
          <h2 class="name">PE Uniform</h2>
          <span class="price">$100.00</span>
          <button class="popup-btn">Quick View</button>
          <img src="2.png" class="product-img" alt="">
        </div>
        <div class="popup-view">
            <div class="popup-card">
                <a><i class="fas fa-times close-btn"></i></a>
                <div class="product-img">
                <img src="2.png" alt="">
                </div>
                <div class="info">
                <h2>PE Uniform<br><span>Men and Women</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <span class="price">$100.00</span>
                <a href="#" class="add-cart-btn">Add to Cart</a>
                </div>
            </div>
            </div>
        </div>
        <div class="product">
            <div class="product-card">
            <h2 class="name">Proware</h2>
            <span class="price">$250.00</span>
            <button class="popup-btn">Quick View</button>
            <img src="3.png" class="product-img" alt="">
            </div>
            <div class="popup-view">
            <div class="popup-card">
                <a><i class="fas fa-times close-btn"></i></a>
                <div class="product-img">
                <img src="3.png" alt="">
                </div>
                <div class="info">
                <h2>Proware<br><span>Men and Women</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <span class="price">$250.00</span>
                <button href="#" class="add-cart-btn">Add to Cart</button>
                </div>
            </div>
            </div>
        </div>
        </div>
  <script src="js/side_bar.js"></script>
  <script src="js/product.js"></script>
</body>
</html>
