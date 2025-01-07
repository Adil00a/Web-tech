<?php
session_start();
include '../model/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $mydb = new mydb();
    $conobj = $mydb->openCon();

    $query = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conobj->prepare($query);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = [
            'id' => $user['id'],
            'fullName' => $user['fullName'],
            'email' => $user['email'],
        ];
        header("Location: ../view/dashboard.php");
        exit;
    } else {
        echo "Invalid email or password.";
    }

    $stmt->close();
    $mydb->closeCon($conobj);
}
?>
