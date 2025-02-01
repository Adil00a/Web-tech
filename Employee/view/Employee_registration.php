<html>
<head>
    <title>Employee Registration</title>
</head>
<body>

<form method="POST" action="../control/reg_control.php">
    <fieldset>
        <h1>Welcome to Employee Registration</h1>
        <h2><legend>Employee Registration</legend></h2>
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="fullName" required></td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="text" name="phoneNumber" required></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="dob" required></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <select name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Authorization:</td>
                <td>
                    <select name="authorization" required>
                        <option value="admin">Admin</option>
                        <option value="employee">Employee</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Register">
        <input type="reset" name="clear" value="Clear">
    </fieldset>
</form>

</body>
</html>
