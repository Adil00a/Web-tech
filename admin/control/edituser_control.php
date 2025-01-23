<?php
include '../model/db.php';

$mydb = new mydb();
$conobj = $mydb->openCon();

$id = $fullName = $gender = $skills = $email = $phoneNumber = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $fullName = $_POST['fullName'];
    $gender = $_POST['gender'];
    $skills = $_POST['skills'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];

    if (empty($id) || empty($fullName) || empty($email)) {
        echo "ID, Full Name, and Email are required.";
        exit;
    }
    $sqlCheckEmail = "SELECT id FROM users WHERE email = '$email' AND id != '$id'";
    $resultCheckEmail = $conobj->query($sqlCheckEmail);

    if ($resultCheckEmail->num_rows > 0) {
        echo "The email '$email' is already in use by another user.";
        exit;
    }

    $sqlUpdate = "UPDATE users SET 
        fullName = '$fullName', 
        gender = '$gender', 
        skills = '$skills', 
        email = '$email', 
        phoneNumber = '$phoneNumber' 
        WHERE id = '$id'";

    if ($conobj->query($sqlUpdate) === TRUE) {
        echo "User updated successfully.";
    } else {
        echo "Error updating user: " . $conobj->error;
    }

} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sqlFetch = "SELECT * FROM users WHERE id = '$id'";
    $result = $conobj->query($sqlFetch);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $id = $user['id'];
        $fullName = $user['fullName'];
        $gender = $user['gender'];
        $skills = $user['skills'];
        $email = $user['email'];
        $phoneNumber = $user['phoneNumber'];
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "No user ID provided.";
    exit;
}

$mydb->closeCon($conobj);

include '../view/edituser.php';
?>
