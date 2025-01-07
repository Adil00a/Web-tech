<html>
<html>
<head>
    <title>Show Users</title>
</head>
<body>
    <form method="post" action="../control/showuser_control.php">
        <label for="id">User ID:</label>
        <input type="text" id="id" name="id" placeholder="Enter User ID">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter Name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter Email">

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" placeholder="Enter Phone Number">

        <input type="submit" name="search" value="Search">
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Skills</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_POST['userData']) && !empty($_POST['userData'])) {
                foreach ($_POST['userData'] as $data) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($data['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($data['fullName']) . "</td>";
                    echo "<td>" . htmlspecialchars($data['gender']) . "</td>";
                    echo "<td>" . htmlspecialchars($data['skills']) . "</td>";
                    echo "<td>" . htmlspecialchars($data['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($data['phoneNumber']) . "</td>";
                    echo "<td>
                            <a href='../view/edituser.php?id=" . htmlspecialchars($data['id']) . "'>Edit</a> | 
                            <a href='../view/deleteuser.php?id=" . htmlspecialchars($data['id']) . "'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No user data found. Please search using valid criteria.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
