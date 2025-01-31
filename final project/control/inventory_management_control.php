<?php

include '../model/db.php';  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $product_id = $_POST['product_id'];
    $stock = $_POST['stock'];
    $restock_date = $_POST['restock_date'];

    
    if (!empty($product_id) && !empty($stock) && !empty($restock_date)) {
    
        $db = new db();
        $conn = $db->createCon();

        
        $query = "INSERT INTO inventory (Product_id, Stock, Restock_date) 
                  VALUES ('$product_id', '$stock', '$restock_date')";

        
        if (mysqli_query($conn, $query)) {
            echo "Inventory added successfully!";
        
            header('Location: order_management.php');
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    
        mysqli_close($conn);
    } else {
        echo "Please fill in all fields.";
    }
}
?>