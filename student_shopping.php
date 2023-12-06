<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/student_homepage.css">
  <link rel="stylesheet" href="css/student_shopping.css">
</head>
<body>
    <div class="navbar">
        <button class="open-btn" id="open_btn"><i class="fa-solid fa-bars"></i></button>
        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
    </div>
  <div class="sidebar" id="sidebar">
    <button class="close-btn" id="close_btn">&times;</button>
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
  <div class="content">
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
    <button onclick="openModal()" id="status1">Place Order</button>
    <button onclick="cancelModalOpen()" id="status2">Cancel Order</button>
  </div>
  <div id="orderModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal">&times;</span>
      <p>Are you sure you want to place the order?</p>
      <button onclick="placeOrder()">Yes, Place Order</button>
    </div>
  </div>
  <div id="cancelModal" class="modal">
  <div class="modal_content">
    <span class="close" onclick="closeModal">&times;</span>
    <p>Please wait for the notification of the status of your order.</p>
    <button onclick="cancelOrder()">OK</button>
  </div>
  </div>
  
  <script src="js/shop.js"></script>
  <script src="js/student_shopping.js"></script>
  <script src="js/modal.js"></script>
</body>
</html>