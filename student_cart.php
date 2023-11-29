<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="css/student_homepage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/student_cart.css">
</head>
<body>
    <div class="navbar">
        <button class="open-btn" id="openBtn"><i class="fa-solid fa-bars"></i></button>
        <button class="iconCart"><i class="fa-solid fa-cart-shopping"></i></button>
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
    <div class="content" id="content">
        

  <script src="js/homepage.js"></script>
  <script src="js/student_cart.js"></script>
</body>
</html>
