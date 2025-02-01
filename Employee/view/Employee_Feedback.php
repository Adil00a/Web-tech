<?php
// You can add a session check here if needed to ensure the user is logged in
// Example: 
// session_start();
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }
?>

<html>
<head>
    <title>Employee Feedback</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>

    <h1>Employee Feedback</h1>
    

    <form method="POST" action="submit_feedback.php">
        <label for="feedback">Your Feedback:</label><br>
        <textarea name="feedback" id="feedback" rows="4" cols="50" placeholder="Enter your feedback here..." required></textarea><br><br>
        <input type="submit" name="submitFeedback" value="Submit Feedback">
    </form>

</body>
</html>
