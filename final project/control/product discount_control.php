<?php
include '../model/db.php';  // Ensure this is before any database operations

// Create db object and establish connection
$db = new db();  
$conn = $db->createCon();  // Call the createCon() method to get the connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $discount = $_POST['discount'];

    // Calculate the new price after applying discount
    $query = "SELECT Price FROM products WHERE Product_id = $product_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $product = mysqli_fetch_assoc($result);
        $current_price = $product['Price'];
        $discounted_price = $current_price - ($current_price * $discount / 100);

        // Update the product price in the database
        $update_query = "UPDATE products SET Price = '$discounted_price' WHERE Product_id = $product_id";
        $update_result = mysqli_query($conn, $update_query);

        if ($update_result) {
            echo "Discount applied successfully! New price: " . $discounted_price;
            header('Location: inventory_management.php');  // Redirect back to inventory page
            exit();
        } else {
            echo "Error updating product price: " . mysqli_error($conn);
        }
    } else {
        echo "Product not found.";
    }
}
?>