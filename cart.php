<?php
   session_start();

include 'ordering_systemData/config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `tbl_cart` SET order_quantity = '$update_value' WHERE cart_id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `tbl_cart` WHERE cart_id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `tbl_cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>
   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/student_shopping.css">
   <link rel="stylesheet" href="css/st.css">
   <link rel="stylesheet" href="css/button.css">
   <link rel="stylesheet" href="css/products.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="shopping-cart">

   <h1 class="heading">shopping cart</h1>

   <table>

      <thead>
         <th>image</th>
         <th>name</th>
         <th>size</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>

      <tbody>

         <?php 
          $grand_total = 0;
            $select_cart = mysqli_query($conn, "SELECT * FROM tbl_cart ");
            if(mysqli_num_rows($select_cart) > 0){
             while($fetch_cart = mysqli_fetch_assoc($select_cart)){
        
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['product_name']; ?></td>
            <td><?php$fetch_cart['size_id']; ?></td>
            
            <td>Php <?php echo number_format($fetch_cart['product_price']); ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['cart_id']; ?>" >
                  
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['order_quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>Php <?php echo $sub_total = $fetch_cart['product_price'] * $fetch_cart['order_quantity']; ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['cart_id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php
               $grand_total += $sub_total;
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="products.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
            <td colspan="3">grand total</td>

            <td colspan="2">Php <?php echo $grand_total ?></td>
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
         </tr>

      </tbody>

   </table>

   <button onclick="openModal()" id="status1">Place Order</button>
   <button onclick="cancelModalOpen()" id="status2">Cancel Order</button>
  </div>
  <div id="orderModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('orderModal')">&times;</span>
      <p class="text">Are you sure you want to place the order?</p>
      <button onclick="placeOrder()">Yes, Place Order</button>
    </div>
  </div>
  <div id="cancelModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('cancelModal')">&times;</span>
    <p class="text">Please wait for the notification of the status of your order.</p>
    <button onclick="cancelOrder()">OK</button>
  </div>
  </div>

</section>

</div>
   
<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/modal.js"></script>
<script src="js/student_shopping.js"></script>
<?php include 'footer.php' ?>
</body>
</html>