<?php
include '../control/product discount_control.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Discount</title>
    <link rel="stylesheet" href="../css/mystyle.css"> 
</head>
<body>

    <h1> Product Discount</h1>
    <form action=" " method="POST">
        <label for="product_id">Product ID:</label>
        <input type="number" id="product_id" name="product_id"><br><br>

        <label for="discount">Discount Percentage:</label>
        <input type="number" id="discount" name="discount" min="1" max="100"><br><br>

        <input type="submit" value="Apply Discount">
    </form>

</body>
</html>