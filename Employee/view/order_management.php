<html>
<head>
    <title>Employee Order Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>

<h1>Employee Order Management</h1>
<form method="POST" action="order_control.php">
    <fieldset>
        <legend>Manage Orders</legend>
        <table>
            <tr>
                <td>Order ID:</td>
                <td><input type="text" name="order_id" required></td>
            </tr>
            <tr>
                <td>Customer Name:</td>
                <td><input type="text" name="customer_name" required></td>
            </tr>
            <tr>
                <td>Product:</td>
                <td><input type="text" name="product" required></td>
            </tr>
            <tr>
                <td>Quantity:</td>
                <td><input type="number" name="quantity" required></td>
            </tr>
            <tr>
                <td>Order Status:</td>
                <td>
                    <select name="order_status" required>
                        <option value="Pending">Pending</option>
                        <option value="Shipped">Shipped</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" name="add" value="Add Order">
        <input type="submit" name="update" value="Update Order">
        <input type="submit" name="delete" value="Delete Order">
        <input type="reset" value="Clear">
    </fieldset>
</form>

<h2>Order List</h2>
<table>
    <tr>
        <th>Order ID</th>
        <th>Customer Name</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Status</th>
    </tr>
    <!-- Dynamic order rows will be inserted here -->
</table>

</body>
</html>