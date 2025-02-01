<?php
include '../control/order_control.php';
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Place Order</title>
    <link rel="stylesheet" href="../css/mystyle.css">
</head>
<body>
    <h1>Place an Order</h1>
    
    <form action=" " method="POST">
        <label for="user_id">User ID:</label>
        <input type="number" id="user_id" name="user_id"><br><br>

        <label for="order_date">Order Date:</label>
        <input type="date" id="order_date" name="order_date"><br><br>

        <label for="total_amount">Total Amount:</label>
        <input type="number" id="total_amount" name="total_amount"><br><br>

        <label for="status">Order Status:</label>
        <select id="status" name="status">
            <option value="Pending">Pending</option>
            <option value="Shipped">Shipped</option>
            <option value="Delivered">Delivered</option>
        </select><br><br>

        <button type="submit">Place Order</button>
    </form>

</body>
</html>