<?php
$conn = new mysqli("localhost", "root", "", "seca");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>

<html>
<html>
<head>
    <title>Approve Orders</title>
</head>
<body>
    <h1>Approve Orders</h1>
    <table border="1">
        <tr>
            <th>Order ID</th>
            <th>User ID</th>
            <th>Order Date</th>
            <th>Total Amount</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Order_id"] . "</td>";
                echo "<td>" . $row["User_id"] . "</td>";
                echo "<td>" . $row["Order_date"] . "</td>";
                echo "<td>$" . $row["Total_amount"] . "</td>";
                echo "<td>
                        <form action='../control/approve_control.php' method='post'>
                            <input type='hidden' name='order_id' value='" . $row["Order_id"] . "'>
                            <button type='submit' name='action' value='approve'>Approve</button>
                            <button type='submit' name='action' value='decline'>Decline</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No orders found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
