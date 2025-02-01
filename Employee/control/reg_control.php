<?php
require_once "../model/db.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $authorization = $_POST["authorization"];
    $password = $_POST["password"];

    if (empty($fullName) || empty($email) || empty($phoneNumber) || empty($dob) || empty($gender) || empty($authorization) || empty($password)) {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    if (!preg_match("/^[0-9]{10}$/", $phoneNumber)) {
        die("Invalid phone number. Must be 10 digits.");
    }

    $db = new employee();
    $db->insertEmployee($fullName, $email, $phoneNumber, $dob, $gender, $authorization, $password);

    // Redirect to registration success page
    header("Location: ../view/reg_success.php");
    exit();
}
?>
