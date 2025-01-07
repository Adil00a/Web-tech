<?php
include '../model/db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$mydb = new mydb();
$conobj = $mydb->openCon();

$id = $fullName = $gender = $skills = $email = $phoneNumber = '';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $fullName = trim($_POST['fullName']);
    $gender = trim($_POST['gender']);
    $skills = trim($_POST['skills']);
    $email = trim($_POST['email']);
    $phoneNumber = trim($_POST['phoneNumber']);

    if (empty($id) || empty($fullName) || empty($email)) {
        echo "Error: ID, Full Name, and Email are required fields.";
        exit;
    }

    $sqlCheckEmail = "SELECT id FROM users WHERE email = ? AND id != ?";
    $stmtCheckEmail = $conobj->prepare($sqlCheckEmail);
    $stmtCheckEmail->bind_param("si", $email, $id);
    $stmtCheckEmail->execute();
    $resultCheckEmail = $stmtCheckEmail->get_result();

    if ($resultCheckEmail->num_rows > 0) {
        echo "Error: The email address '$email' is already in use by another user.";
        exit;
    }
    $stmtCheckEmail->close();

   
    $sqlUpdate = "UPDATE users SET fullName = ?, gender = ?, skills = ?, email = ?, phoneNumber = ? WHERE id = ?";
    $stmt = $conobj->prepare($sqlUpdate);

    if (!$stmt) {
        die("Prepare failed: " . $conobj->error);
    }

    $stmt->bind_param("sssssi", $fullName, $gender, $skills, $email, $phoneNumber, $id);

    if ($stmt->execute()) {
        echo "User updated successfully.";
    } else {
        echo "Error updating user: " . $stmt->error;
    }
    $stmt->close();

} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];

  
    $sqlFetch = "SELECT * FROM users WHERE id = ?";
    $stmt = $conobj->prepare($sqlFetch);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

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
    $stmt->close();
} else {
    echo "No user ID provided.";
    exit;
}

$mydb->closeCon($conobj);


include '../view/edituser.php';
?>
