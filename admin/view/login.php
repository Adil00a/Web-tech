<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<script>alert('Registration successful! Please log in.');</script>";
}

?>
<html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form method="post" action="../control/login_control.php">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
