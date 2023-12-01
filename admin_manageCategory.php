<?php
   include 'ordering_systemData/config.php';

   if(isset($_POST['add_product'])){
      $product_name = $_POST['product_name'];
      $product_price = $_POST['product_price'];
      $product_size = $_POST['product_size'];
      $product_category = $_POST['product_category'];
      $image = $_FILES['image']['name'];
      $p_image_tmp_name = $_FILES['image']['tmp_name'];
      $p_image_folder = 'uploaded_img/'.$image;
   
      $insert_query = mysqli_query($conn, "INSERT INTO `tbl_product`(product_name, image, product_price, product_size, product_category) 
      VALUES('$product_name', '$image', '$product_price', '$product_size', '$product_category')") or die('query failed');
      
      if($insert_query){
         move_uploaded_file($p_image_tmp_name, $p_image_folder);
         $message[] = 'product add successfully';
      }else{
         $message[] = 'could not add the product';
      }
   };
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Manage Category</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="styles.css">
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

      <section>

         <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
            <h3>add a new product</h3>
            <input type="text" name="product_name" placeholder="enter the product name" class="box" required>
            <input type="number" name="product_price" min="0" placeholder="enter the product price" class="box" required>
            <select id="product_size" name="product_size">
               <option value="small">Small</option>
               <option value="medium">Medium</option>
               <option value="large">Large</option>
               <option value="xl">XL</option>
               <option value="2xl">2XL</option>
               <option value="3xl">3XL</option>
               <option value="4xl">4XL</option>
               <option value="5xl">5XL</option>
               <option value="special">Special Size</option>
            </select>
            <select id="product_category" name="product_category">
               <option value="uniform">Uniform</option>
               <option value="pe">PE</option>
               <option value="proware">Proware</option>
               <option value="accessories">Accessories</option>
            </select>
            <input type="file" name="image" accept="image/png, image/jpg, image/jpeg" class="box" required>
            

            <input type="submit" value="add the product" name="add_product" class="btn">
         </form>

      </section>
      <section class="display-product-table">

         <table>

            <thead>
               <th>product image</th>
               <th>product name</th>
               <th>product price</th>
               <th>product size</th>
               <th>product category</th>
               <th>action</th>
            </thead>

            <tbody>
               <?php
               
                  $select_products = mysqli_query($conn, "SELECT * FROM `tbl_product`");
                  if(mysqli_num_rows($select_products) > 0){
                     while($row = mysqli_fetch_assoc($select_products)){
               ?>

               <tr>
                  <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                  <td><?php echo $row['product_name']; ?></td>
                  <td>Php <?php echo $row['product_price']; ?>/-</td>
                  <td><?php echo $row['product_size']; ?></td>
                  <td><?php echo $row['product_category']; ?></td>
                  <td>
                     <a href="admin_manageCategory.php?delete=<?php echo $row['product_id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
                     <a href="admin_manageCategory.php?edit=<?php echo $row['product_id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
                  </td>
               </tr>

               <?php
                  };    
                  }else{
                     echo "<div class='empty'>no product added</div>";
                  };
               ?>
            </tbody>
         </table>
      </section>

   </div>
   <script src="js/script.js"></script>
</body>
</html>