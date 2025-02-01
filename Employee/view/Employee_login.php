 <html>
<head>
    <title>Employee Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<form method="POST" action="../control/login_control.php">
    <fieldset>
        <h1>Welcome to Employee Login</h1>
        <h2><legend>Employee Login</legend></h2>
        <table>
            <tr>
                <td>Email Address:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Login">
        <input type="reset" name="clear" value="Clear">
    </fieldset>
</form>

</body>
</html>