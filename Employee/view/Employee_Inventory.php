<html>
<head>
    <title>Inventory Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>

<h1>Inventory Management</h1>
<form method="POST" action="inventory_control.php">
    <fieldset>
        <legend>Manage Inventory</legend>
        <table>
            <tr>
                <td>Product Name:</td>
                <td><input type="text" name="product_name" required></td>
            </tr>
            <tr>
                <td>Stock Quantity:</td>
                <td><input type="number" name="stock" required></td>
            </tr>
            <tr>
                <td>Supplier:</td>
                <td><input type="text" name="supplier" required></td>
            </tr>
            <tr>
                <td>Restock Date:</td>
                <td><input type="date" name="restock_date" required></td>
            </tr>
            <tr>
                <td>Warehouse Location:</td>
                <td><input type="text" name="warehouse_location" required></td>
            </tr>
        </table>
        <input type="submit" name="add" value="Add Stock">
        <input type="submit" name="update" value="Update Stock">
        <input type="submit" name="delete" value="Remove Stock">
        <input type="reset" value="Clear">
    </fieldset>
</form>

<h2>Inventory List</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Stock</th>
        <th>Supplier</th>
        <th>Restock Date</th>
        <th>Warehouse Location</th>
    </tr>
    <!-- Dynamic inventory rows will be inserted here -->
</table>

</body>
</html>