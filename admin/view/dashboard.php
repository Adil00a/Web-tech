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
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($user['fullName']); ?>!</h1>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
    <p>ID: <?php echo htmlspecialchars($user['id']); ?></p>

    <h2>Actions:</h2>
    <ul>
        <li><a href="showusers.php">view Users</a></li>
        <li><a href="edituser.php">Edit User Details</a></li>
        <li><a href="admin_registration.php">Register New Admin</a></li>
        <li><a href="deleteuser.php">Delete User</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
