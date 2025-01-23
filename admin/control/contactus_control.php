<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Response</title>
</head>
<body>

<h2>Contact Us Response</h2>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seca"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection works
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Check for empty fields
    if ($name == "" || $email == "" || $message == "") {
        echo "All fields are required.";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO contactus (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "Thank you for your message!<br>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
} else {
    echo "Invalid request method.";
}

// Close the database connection
$conn->close();
?>

</body>
</html>
