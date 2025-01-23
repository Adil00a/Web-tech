<html>
<html>
<head>
    <title>Delete Feedback</title>
</head>
<body>

<h2>Delete Feedback</h2>

<?php
if (isset($_GET['feedback_id'])) {
    $conn = new mysqli("localhost", "root", "", "seca");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $feedback_id = $_GET['feedback_id'];


    if (!is_numeric($feedback_id)) {
        echo "Invalid Feedback ID.";
        exit;
    }

    $feedback_id = $conn->real_escape_string($feedback_id);


    $sql = "DELETE FROM feedback WHERE Feedback_id = $feedback_id";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback with ID $feedback_id deleted successfully.";
    } else {
        echo "Error deleting feedback: " . $conn->error;
    }

    $conn->close();
} else {
    echo "No Feedback ID provided.";
}
?>

<br>
<a href="feedback.php">Back to Feedback</a>

</body>
</html>
