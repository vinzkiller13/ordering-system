    
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/footer.css">
   <title>STUDENT DASHBOARD</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/homepage.css">

</head>
<body>
  <?php include 'header.php'; ?>
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
</body>