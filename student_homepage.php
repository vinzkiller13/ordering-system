<?php session_start(); 
  if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
} else {
    // echo "Name not set in session";
}?> 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>STUDENT DASHBOARD</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/header.css">
   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="css/carousel.css">
   <link rel="stylesheet" href="css/homepage.css">
   <link rel="stylesheet" href="css/products.css">

</head>
<body>
  <?php include 'header.php'; 
   
  ?>
  
  <div class="carousel-container">
    <div class="carousel">
      <div class="carousel-item"><img src="uploaded_img/1.jpg" alt="Image 1"></div>
      <div class="carousel-item"><img src="uploaded_img/2.jpg" alt="Image 2"></div>
      <div class="carousel-item"><img src="uploaded_img/3.jpg" alt="Image 3"></div>
      <div class="carousel-item"><img src="uploaded_img/4.jpg" alt="Image 4"></div>
    </div>
    <button class="carousel-btn prev-btn" onclick="prevSlide()">&#10094;</button>
    <button class="carousel-btn next-btn" onclick="nextSlide()">&#10095;</button>
  </div>
  <div class="container">
    <div class="wrapper">
      <h1>SIZE GUIDE</h1>
        <input id="btnBox" type="checkbox">
          <label class="btn-area" for="btnBox"><span class="btn1">LOAD MORE</span> <span class="btn2">LOAD LESS</span></label>
          <ul>
            <li class="image"><img src="uploaded_img/1.png" alt="" srcset=""></li>
            <li class="image"><img src="uploaded_img/2.png" alt="" srcset=""></li>
            <li class="image"><img src="uploaded_img/3.png" alt="" srcset=""></li>
            <li class="image"><img src="uploaded_img/4.png" alt="" srcset=""></li>
            <li class="image"><img src="uploaded_img/5.png" alt="" srcset=""></li>
            <li class="image"><img src="uploaded_img/6.png" alt="" srcset=""></li>
            <li class="image"><img src="uploaded_img/7.png" alt="" srcset=""></li>
          </ul>
    </div>
    <div class="popup">
      <span>&times;</span>
      <img src="" alt="" srcset="">
    </div>           
  </div>
    <?php include 'footer.php'; ?>
  <script src="js/guide.js"></script>
  <script src="js/script.js"></script>
  <script src="js/carousel.js"></script>
</body>