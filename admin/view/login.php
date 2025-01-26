<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<script>alert('Registration successful! Please log in.');</script>";
}

?>
<html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../CSS/login_style.css">
</head>
<body>
    <div>
    <table>
        <h1>Login</h1>
        <form method="post" action="../control/login_control.php" onsubmit="return validateLoginForm()">
            
            <tr>
            <td><label for="email">Email</label></td><br>
            <td><input type="text" id="email" name="email" placeholder="Enter your email" required><td><br><br>
            </tr>
            <tr>
            <td><label for="password">Password</label></td><br>
            <td><input type="password" id="password" name="password" placeholder="Enter your password" required></td><br><br>
            </tr>

           <td><input type="submit" value="Login"></td>
           
</table>
        </form>
    </div>
    <script src="../js/login.js"></script>
</body>
</html>
