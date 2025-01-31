<?php
include '../control/inventory_management_control.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Inventory</title>
    <link rel="stylesheet" href="../css/mystyle.css"> 
</head>
<body>
    <h1>Add Inventory</h1>
    <form action=" " method="POST">
        <label for="product_id">Product id:</label>
        <input type="number" id="product_id" name="product_id"><br><br>

        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock"><br><br>

        <label for="restock_date">Restock Date:</label>
        <input type="date" id="restock_date" name="restock_date"><br><br>

        <button type="submit">Add Inventory</button>
    </form>
</body>
</html>