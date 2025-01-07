<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<html>
<html>
<head>
    <title>Delete User</title>
</head>
<body>
    <h1>Delete User</h1>
    <form method="post" action="../control/deleteuser_control.php">
        <label for="id">User ID:</label>
        <input type="text" id="id" name="id" placeholder="Enter User ID" required>
        <input type="submit" value="Delete User">
    </form>

    <a href="dashboard.php">Back to Dashboard</a>
</body>
</html>
