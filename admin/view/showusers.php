<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Users</title>
    <link rel="stylesheet" href="../CSS/showusers.css">
</head>
<body>
    <h1>Show Users</h1>

    <form method="post" action="../control/showuser_control.php" onsubmit="return validateShowUsersForm()">
        <fieldset>
            <legend>Search Users</legend>

            <label for="id">User ID:</label>
            <input type="text" id="id" name="id" placeholder="Enter User ID">
            <p id="errorUserID" class="error"></p>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter Name">
            <p id="errorName" class="error"></p>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter Email">
            <p id="errorEmail" class="error"></p>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" placeholder="Enter Phone Number">
            <p id="errorPhone" class="error"></p>

            <input type="submit" name="search" value="Search">
        </fieldset>
    </form>

    <table>
        <caption>List of Registered Users</caption>
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
            // Check if user data is passed from the backend
            if (isset($userData) && !empty($userData)) {
                foreach ($userData as $data) {
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

    <script src="../js/showusers.js"></script>
</body>
</html>
