<?php 
require('../model/db.php');

$fullName = $_REQUEST["fullName"] ?? "";
$password = $_REQUEST["password"] ?? "";
$phoneNumber = $_REQUEST["phoneNumber"] ?? "";
$email = $_REQUEST["email"] ?? "";
$address = $_REQUEST["address"] ?? "";
$dob = $_REQUEST["dob"] ?? "";
$gender = $_REQUEST["gender"] ?? "";
$workingHours = $_REQUEST["workingHours"] ?? "";
$certificates = $_REQUEST["certificates"] ?? [];
$skills = $_REQUEST["skills"] ?? [];
$authorization = $_REQUEST["authorization"] ?? [];

if (strtolower($_SERVER["REQUEST_METHOD"]) == "post") {
    $errors = [];

    // Validation
    if (empty($fullName)) {
        $errors[] = "Please enter your full name.";
    } elseif (strlen($fullName) > 40) {
        $errors[] = "Full Name must be less than 40 characters.";
    }

    if (empty($password)) {
        $errors[] = "Please enter a password.";
    }

    if (empty($email)) {
        $errors[] = "Please enter your email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($errors)) {
        $mydb = new mydb();
        $conobj = $mydb->openCon();

        $result = $mydb->insertData(
            "users", 
            $fullName, 
            $password, 
            $gender, 
            $skills, 
            $email, 
            $phoneNumber, 
            $dob, 
            $workingHours, 
            $certificates, 
            $authorization
        );

        if ($result === 1) {
            echo "Data successfully saved to the database.<br>";
        } else {
            echo "Failed to insert data into the database: $result<br>";
        }

        $mydb->closeCon($conobj); 
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
