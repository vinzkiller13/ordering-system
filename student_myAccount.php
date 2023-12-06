<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Dashboard</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/my_account.css">
</head>
<body>
<?php include 'header.php'; ?>
  
    <section>
        <img src="uploaded_img/do.png" alt="Profile Picture">
        <h2>Your Name</h2>
        <p>Email: your.email@example.com</p>
        <p>About Me: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <button onclick="editProfile()">Edit Profile</button>
    </section>


  <script src="js/script.js"></script>
  <script src="js/my_account.js"></script>
</body>
</html>
