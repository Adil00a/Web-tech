<?php
require_once "../model/db.php"; // Include the database connection class

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $authorization = $_POST["authorization"];
    $password = $_POST["password"];

    // Basic validation
    if (empty($fullName) || empty($email) || empty($phoneNumber) || empty($dob) || empty($gender) || empty($authorization) || empty($password)) {
        die("All fields are required.");
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Validate phone number (must be 10 digits)
    if (!preg_match("/^[0-9]{10}$/", $phoneNumber)) {
        die("Invalid phone number. Must be 10 digits.");
    }

    // Create an instance of the employee class and call insertEmployee
    $db = new employee();
    $db->insertEmployee($fullName, $email, $phoneNumber, $dob, $gender, $authorization, $password);
}
?>
