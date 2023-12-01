<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Shopping Cart</title>
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
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Responsive Table with Increment/Decrement and Total</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Item 1</td>
          <td>
            <button onclick="increment('quantity1', 'price1', 'totalPrice1')">+</button>
            <span id="quantity1">0</span>
            <button onclick="decrement('quantity1', 'price1', 'totalPrice1')">-</button>
          </td>
          <td id="price1">$100</td>
          <td id="totalPrice1">$0</td>
        </tr>
        <tr>
          <td>Item 2</td>
          <td>
            <button onclick="increment('quantity2', 'price2', 'totalPrice2')">+</button>
            <span id="quantity2">0</span>
            <button onclick="decrement('quantity2', 'price2', 'totalPrice2')">-</button>
          </td>
          <td id="price2">$150</td>
          <td id="totalPrice2">$0</td>
        </tr>
        <!-- Add more rows as needed -->
        <tr id="total-row">
          <td>Total</td>
          <td id="totalQuantity">0</td>
          <td></td>
          <td id="totalPrice">$0</td>
        </tr>
      </tbody>
    </table>
    
  </div>
</body>
</html>

  </div>
  <script src="js/homepage.js"></script>
  <script src="js/student_cart.js"></script>
</body>
</html>
