<?php
   include 'ordering_systemData/config.php';

   if(isset($_POST['add_product'])){
      $product_name = $_POST['product_name'];
      $product_price = $_POST['product_price'];
      $product_inStock = $_POST['product_inStock'];
      $product_size = $_POST['product_size'];
      $product_category = $_POST['product_category'];
      $size_id = $_POST['size_id'];
      $category_id = $_POST['category_id'];
      $inventory_id = $_POST['inventory_id'];
      $image = $_FILES['image']['name'];
      $p_image_tmp_name = $_FILES['image']['tmp_name'];
      $p_image_folder = 'uploaded_img/'.$image;

      $insert_query = mysqli_query($conn, "INSERT INTO `tbl_product` (product_name, image, product_price, inventory_id, size_id, category_id) 
      VALUES ('$product_name', '$image', '$product_price', '$product_inStock', '$product_size', '$product_category')") or die('Query failed');

      

    if($insert_query){
        // If insertion is successful
        move_uploaded_file($p_image_tmp_name, $p_image_folder);
        $message[] = 'Product added successfully';
    } else {
        // If insertion fails
        $message[] = 'Could not add the product';
    }
   };
   if(isset($_GET['delete'])){
      $delete_id = $_GET['delete'];
      $delete_query = mysqli_query($conn, "DELETE FROM `tbl_product` WHERE product_id = $delete_id ") or die('query failed');
      if($delete_query){
         // header('location:admin_manageCategory.php');
         $message[] = 'product has been deleted';
      }else{
         // header('location:admin_manageCategory.php');
         $message[] = 'product could not be deleted';
      };
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
   <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   <?php include 'message.php';?>
   <?php include 'pamo_header.php'; ?>
   <div class="container">

      <section>

         <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
            <h3>add a new product</h3>
            <input type="text" name="product_name" placeholder="enter the product name" class="box" required>
            <input type="number" name="product_price" min="0" placeholder="enter the product price" class="box" required>
            <input type="number" name="product_inStock" min="0" placeholder="enter the inventory stock" class="box" required>
            <select id="product_size" name="product_size">
               <option value="1">Small</option>
               <option value="2">Medium</option>
               <option value="3">Large</option>
               <option value="4">XL</option>
               <option value="5">2XL</option>
               <option value="6">3XL</option>
               <option value="7">4XL</option>
               <option value="8">5XL</option>
               <option value="9">Special Size</option>
            </select>
            <select id="product_category" name="product_category">
               <option value="1">PE</option>
               <option value="2">PROWARE</option>
               <option value="3">UNIFORM</option>
               <option value="4">ACCESSORIES</option>
            </select>
            <input type="file" name="image" accept="image/png, image/jpg, image/jpeg" class="box" required>
            <input type="hidden" name="size_id" value="<?php echo $size_id; ?>">
            <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
            <input type="hidden" name="inventory_id" value="<?php echo $inventory_id; ?>">   
            

            <input type="submit" value="add the product" name="add_product" class="btn">
         </form>

      </section>
      <section class="display-product-table">

         <table>

            <thead>
               <th>product image</th>
               <th>product name</th>
               <th>product price</th>
               <th>product stock</th>
               <th>product size</th>
               <th>product category</th>
               <th>action</th>
            </thead>

            <tbody>
               <?php
               
                  $select_query = mysqli_query($conn,  "SELECT * 
                  FROM tbl_product
                     INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
                     INNER JOIN tbl_size ON tbl_product.size_id = tbl_size.size_id");
                     

                     if(mysqli_num_rows($select_query) > 0){
                        while($row = mysqli_fetch_assoc($select_query)){
               ?>
                           <tr>
                              <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                              <td><?php echo $row['product_name']; ?></td>
                              <td>Php <?php echo $row['product_price']; ?>/-</td>
                              <td><?php echo $row['inventory_id']; ?></td>
                              <td><?php echo $row['product_size']; ?></td>
                              <td><?php echo $row['product_category']; ?></td>
                              <td>
                                 <a href="admin_manageCategory.php?delete=<?php echo $row['product_id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
                                 
                              </td>
                           </tr>
               
               <?php
                  
                        };    
                           }
                        else{
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