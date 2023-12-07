<?php

include 'ordering_systemData/config.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="student_homepage.css">
    <link rel="stylesheet" href="css/pamo_order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>PAMO ORDER MANAGE</title>
</head>
<body>
<div class="main-container">
    <div class="tbl-container">
        <div class="tbl-title">
        <h2>Order Table</h2>
        </div>
<table class="table table-striped table-responsive">
    <div class="tbl-overflow"> 
    <thead class="table-dark">
      <tr>
        <th>Order ID</th>
        <th>Product Name</th>
        <th>Product Catetory</th>
        <th>Product Quantity</th>
        <th>Product Size</th>
        <th>Product Price</th>
        <th>Order Date</th>
        <th>Order Status</th>
      </tr>
    </thead>
    <tbody>
    <?php
               $select_query = mysqli_query($conn,  "SELECT * 
               FROM `tbl_cart`
               ");
               if(mysqli_num_rows($select_query) > 0){
                while($row = mysqli_fetch_assoc($select_query)){
               
                  
            ?>
                        <tr>
                           <td><?php echo $row['cart_id'] ?></td>
                           <td><?php echo $row['product_name']; ?></td>
                           <td></td>
                           <td><?php echo $row['order_quantity']; ?></td>
                           <td></td>
                           <td><?php echo $row['product_price']; ?></td>
                           <td><?php echo $row['order_date']; ?></td>
                           <td></td>
                        </tr>
            
            <?php
             
               
                     };    
                        }
                     else{
                        echo "<div class='empty'>no product added</div>";
                     };
            ?>
    </tbody>
    </div>
  </table>
  </div>
</div>
</body>
</html>