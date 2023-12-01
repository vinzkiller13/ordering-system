<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale-1.0">
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/student_homepage.css">
  <link rel="stylesheet" href="css/studentMyAccount.css">
</head>
<body>
    <div class="navbar">
        <button class="open-btn" id="openBtn"><i class="fa-solid fa-bars"></i></button>
        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
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
    <div class="content" id="content">
        <div class="slideshow-container">
            <div class="card">
                <i class="fa-solid fa-user"></i>
                <h1 class="Name">Hello, Elaine</h1>
                <p class="account">Student</p>
                <div class="password">
                    Change Password
                </div>
                
                <div class="description">
                    <p>
                        Hello, I am tired
                    </p>
                </div>
                <button type="submit"class="edit">Edit Profile</button>
            </div>
        </div>
    </div>

  <script src="js/homepage.js"></script>
  
</body>
</html>
