<?php

session_start();
include 'ordering_systemData/config.php';


if(isset($_POST['add_to_cart'])){
   
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $image = $_POST['image'];
   $order_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `tbl_cart` WHERE product_name = '$product_name'");

  // Check if the product is already in the cart
if (mysqli_num_rows($select_cart) > 0) {
   // Product already in the cart, so update the order_quantity
   $update_product = mysqli_query($conn, "UPDATE `tbl_cart` SET order_quantity = order_quantity + $order_quantity WHERE product_name = '$product_name'");
   if ($update_product) {
       $message[] = 'Product quantity updated in the cart';
   } else {
       $message[] = 'Failed to update product quantity in the cart';
   }
} else {
   // Product not in the cart, so insert a new record
   $insert_product = mysqli_query($conn, "INSERT INTO `tbl_cart` (product_name, product_price, image, order_quantity) 
   VALUES('$product_name', '$product_price', '$image', '$order_quantity')")or die('Query failed');
   if ($insert_product) {
       $message[] = 'Product added to the cart';
   } else {
       $message[] = 'Failed to add product to the cart';
   }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>
   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/st.css">
   <link rel="stylesheet" href="css/products.css">
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'header.php'; ?>

<div class="container">

<section class="products">

   <h1 class="heading">latest products</h1>

   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM tbl_product
      INNER JOIN tbl_size ON tbl_product.size_id = tbl_size.size_id");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      

      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['product_name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['product_price']; ?>/-</div>
            <div class="size">Size: <?php echo $fetch_product['product_size']; ?></div>
            
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['product_price']; ?>">
            <input type="hidden" name="image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>


<!-- custom js file link  -->
<script src="js/script.js"></script>
<?php include 'footer.php' ?>
</body>
</html>