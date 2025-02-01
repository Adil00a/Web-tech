<?php
include '../model/db.php';
session_start();

if (isset($_POST['login'])) {
    $name = $_POST["name"];
    $password = $_POST["password"];

    
    $db = new db();
    $conn = $db->createCon(); 

    
    $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";

    
    if (mysqli_query($conn, $sql)) {
        header("Location: product.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    
    $conn->close();
}
?>
