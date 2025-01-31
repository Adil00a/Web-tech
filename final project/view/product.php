<?php
include '../control/product_control.php';
?>
<!DOCTYPE html>
<html>
<head>
   
    <title>Add Product</title>
    <link rel="stylesheet" href="../css/mystyle.css"> 
</head>
<body>
    <h1>Add Product</h1>
    <form action=" " method="POST" enctype="multipart/form-data">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name"><br><br>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price"><br><br>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category"><br><br>

        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock"><br><br>
        <label for="product_images">Product Image:</label>
    <input type="file" name="product_images" id="product_images"><br><br>


        <button type="submit">Add Product</button>
    </form>
</body>
</html>