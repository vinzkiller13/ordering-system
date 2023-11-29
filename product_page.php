<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Page</title>
  <link rel="stylesheet" href="css/product.css">
  <link rel="stylesheet" href="css/homepage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="navbar">
        <button class="open-btn" id="openBtn"><i class="fa-solid fa-bars"></i></button>
        <button><i class="fa-solid fa-cart-shopping"></i></button>
    </div>
    <div class="sidebar" id="sidebar">
        <button class="close-btn" id="closeBtn">&times;</button>
        <ul>
        <li><a href="#" data-content="Content 1">Home</a></li>
        <li><a href="#" data-content="Content 2">Products</a></li>
        <li><a href="#" data-content="Content 3">Shopping Cart</a></li>
        <li><a href="#" data-content="Content 4">User Settings</a></li>
        <li><a href="#" data-content="Content 5">MyAccount</a></li>
        </ul>
    </div>
    <div class="product">
        <img src="product-image.jpg" alt="Product Image">
        <h2 class="product-title">Product Name</h2>
        <p class="product-description"></p>
        <p class="product-price">$99.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>

<script src="js/prod.js"></script>
</body>
</html>
