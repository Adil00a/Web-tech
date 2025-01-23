<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seca"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the search form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    $id = $_POST['id'];

    // Validate input
    if ($id == "") {
        echo "<tr><td colspan='5'>Please enter an ID to search.</td></tr>";
    } else {
        // Search for a specific message by ID
        $sql = "SELECT * FROM contactus WHERE id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No message found with ID $id.</td></tr>";
        }
    }
} else {
    // Retrieve all messages if no search is performed
    $sql = "SELECT * FROM contactus";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['message'] . "</td>";
            echo "<td>" . $row['created_at'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No messages found.</td></tr>";
    }
}

$conn->close();
?>
