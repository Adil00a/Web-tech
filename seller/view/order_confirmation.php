<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="../css/mystyle.css"> <!-- Optional CSS -->
</head>
<body>
    <div class="container">
        <h1>Order Confirmation</h1>
        
        <p>Thank you for your order!</p>
        
        <h3>Your order details:</h3>
        <table>
            <tr>
                <th>Order ID:</th>
                <td><!-- Display Order ID here --></td>
            </tr>
            <tr>
                <th>Order Date:</th>
                <td><!-- Display Order Date here --></td>
            </tr>
            <tr>
                <th>Total Amount:</th>
                <td><!-- Display Total Amount here --></td>
            </tr>
            <tr>
                <th>Status:</th>
                <td><!-- Display Order Status here --></td>
            </tr>
        </table>

        <p>If you wish to cancel the order, click below:</p>

        <!-- Cancel Order Form -->
        <form action="../control/order_control.php" method="POST">
            <input type="hidden" name="order_id" value="<!-- Order ID goes here -->">
            <button type="submit" name="cancel_order">Cancel Order</button>
        </form>

        <br>

        <a href="../view/order.php">Go Back to Orders</a>
    </div>
</body>
</html>