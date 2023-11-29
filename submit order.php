<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $product_name = $_POST["product_name"];
  $quantity = $_POST["quantity"];
  $customer_name = $_POST["customer_name"];
  $email = $_POST["email"];

  // Validate and process the order


  // Display a confirmation message
  echo "Order submitted successfully!";
}
?>
