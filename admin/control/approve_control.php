<?php
$conn = new mysqli("localhost", "root", "", "seca");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST["order_id"];
    $action = $_POST["action"];

    if ($action == "approve") {
        $sql = "UPDATE orders SET status='Approved' WHERE Order_id='$order_id'";
    } elseif ($action == "decline") {
        $sql = "UPDATE orders SET status='Declined' WHERE Order_id='$order_id'";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Order updated successfully!";
    } else {
        echo "Error updating order: " . $conn->error;
    }
}

$conn->close();
?>

<a href="../view/approve_orders.php">Go Back</a>
