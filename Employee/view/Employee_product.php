<html>
<head>
    <title>Employee Product Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>

<h1>Employee Product Management</h1>
<form method="POST" action="product_control.php">
    <fieldset>
        <legend>Manage Product</legend>
        <table>
            <tr>
                <td>Product Name:</td>
                <td><input type="text" name="product_name" required></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="number" name="price" step="0.01" required></td>
            </tr>
            <tr>
                <td>Stock Quantity:</td>
                <td><input type="number" name="stock" required></td>
            </tr>
            <tr>
                <td>Description:</td>
                <td><textarea name="description" required></textarea></td>
            </tr>
            <tr>
                <td>Category:</td>
                <td><input type="text" name="category" required></td>
            </tr>
        </table>
        <input type="submit" name="add" value="Add Product">
        <input type="submit" name="update" value="Update Product">
        <input type="submit" name="delete" value="Delete Product">
        <input type="reset" value="Clear">
    </fieldset>
</form>

<h2>Product List</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Description</th>
        <th>Category</th>
    </tr>
    <!-- Dynamic product rows will be inserted here -->
</table>

</body>
</html>
