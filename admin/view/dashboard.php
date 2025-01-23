<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['user'];
?>

<html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../CSS/dashboard_style.css">
</head>
<body>
    <div>
    <h1>Welcome, <?php echo htmlspecialchars($user['fullName']); ?>!</h1>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
    <p>ID: <?php echo htmlspecialchars($user['id']); ?></p>

    <h2>Actions:</h2>
    <ul>
        <li><a href="showusers.php">view Users</a></li>
        <li><a href="edituser.php">Edit User Details</a></li>
        <li><a href="admin_registration.php">Register New Admin</a></li>
        <li><a href="deleteuser.php">Delete User</a></li>
        <li><a href="login.php">Logout</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="contactus.php">Contact us</a></li>
        <li><a href="view_messages.php">View messages</a></li>
        <li><a href="approve_orders.php">Approve Orders</a></li>
        <li><a href="manage_products.php">Manage Products</a></li>
    </ul>
</div>
</body>
</html>
