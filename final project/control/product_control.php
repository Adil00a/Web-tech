<?php
include '../model/db.php';  


$db = new db();  
$conn = $db->createCon();  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $stock = $_POST['stock'];

    
    $product_images = '';  
    if (isset($_FILES['product_images']) && $_FILES['product_images']['error'] == 0) {
        $product_images = $_FILES['product_images']['name'];  
        $temp_name = $_FILES['product_images']['tmp_name'];  
        $target_dir = "../images/";  
        $target_file = $target_dir . basename($product_images);  


        if (move_uploaded_file($temp_name, $target_file)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
            exit();
        }
    } else {
       
        $product_images = null; 
    }

    
    $query = "INSERT INTO products (Product_id,Product_name, Price, Category, Stock, Product_images) 
              VALUES ('$product_id','$product_name', '$price', '$category', '$stock', '$product_images')";

    
    if ($conn) {
        $result = mysqli_query($conn, $query);

        
        if ($result) {
            echo "Product added successfully!";
            header('Location: product discount.php');  
            exit();
        } else {
            
            echo "SQL Error: " . mysqli_error($conn);
        }
    } else {
        echo "Connection failed: " . mysqli_connect_error();  
    }
}
?>