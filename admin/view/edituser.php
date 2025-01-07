<html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="post" action="../control/edituser_control.php">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id"><br><br>

        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName"><br><br>

        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender"><br><br>

        <label for="skills">Skills:</label>
        <input type="text" id="skills" name="skills"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="phoneNumber">Phone Number:</label>
        <input type="text" id="phoneNumber" name="phoneNumber"><br><br>

        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>