<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student User Settings</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/student_homepage.css">
  <link rel="stylesheet" href="css/student_user.css">
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
    <div class="cont">
          <h3>HISTORY OF TRANSACTION</h3>
          <section class="transaction-area">
            <p>
              elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine
              elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine
              elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine
              elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine
              elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine
              elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine                elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine elaine
            </p>
          </section>
        </div>
      <div class="content" id="content">
          <div class="slideshow-container">
            <div class="container">
              <h1>Receipt Upload</h1>
              <form action="upload_image.php"id="uploadForm" method="post" enctype="multipart/form-data">
                
                <input type="file" name="image" id="file-input"accept="image/*" hidden>
                <label for="file-input"><i class="fa-solid fa-circle-arrow-up"></i></label>
                <button type="submit" name="upload" id="uploadButton" class="btn btn-success">Upload</button>
                <section class="progress-area"></section>
                <section class="uploaded-area"></section>
              </form>
          </div>

      </div>
    </div>

  <script src="js/side.js"></script>
  <script src="js/student_user.js"></script>
</body>
</html>
