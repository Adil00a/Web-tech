<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "seca");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get feedback ID
    $id = $_POST['id'];

    // Delete query
    $sql = "DELETE FROM feedback WHERE Feedback_id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback deleted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();

    echo "<br><a href='feedback.php'>Back to Feedback</a>";
    exit;
}
?>
