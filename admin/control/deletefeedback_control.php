<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "seca");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the Feedback ID from the form
    $feedback_id = $_POST['feedback_id'];

    // Validate the Feedback ID
    if (!is_numeric($feedback_id)) {
        echo "Invalid Feedback ID.";
        exit;
    }

    // Escape the Feedback ID to prevent SQL injection
    $feedback_id = $conn->real_escape_string($feedback_id);

    // Delete query
    $sql = "DELETE FROM feedback WHERE Feedback_id = $feedback_id";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback with ID $feedback_id deleted successfully.";
    } else {
        echo "Error deleting feedback: " . $conn->error;
    }

    $conn->close();
}
?>

<!-- Back to Delete Feedback -->
<br>
<a href="deletefeedback.php">Back to Delete Feedback</a>
