<?php
require_once "../model/db.php"; // Include the database connection class

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data (no trim function)
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Basic validation
    if (empty($email) || empty($password)) {
        die("All fields are required.");
    }

    // Create an instance of the employee class and call validateLogin
    $db = new employee();
    if ($db->validateLogin($email, $password)) {
        // Redirect to the Employee Dashboard on successful login
        header("Location: ../view/Employee_dashboard.php");
        exit(); // Don't forget to call exit after a redirect to stop the script from executing further
    } else {
        echo "Invalid login credentials.";
    }
}
?>
