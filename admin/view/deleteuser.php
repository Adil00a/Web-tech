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
    <link rel="stylesheet" href="../CSS/deleteuser.css">
</head>
<body>
    <h1>Delete User</h1>
    <form method="post" action="../control/deleteuser_control.php" onsubmit="return validateDeleteUserForm()">
    <label for="id">User ID:</label>
        <input type="text" id="id" name="id" placeholder="Enter User ID">
        <p id="errorID" class="error"></p>
        <input type="submit" value="Delete User">
    </form>

    <a href="dashboard.php">Back to Dashboard</a>
    <script src="../JS/deleteuser.js"></script>
</body>
</html>
