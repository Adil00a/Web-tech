<?php
include '../model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    
    $db = new db();
    $conn = $db->createCon();  


    if ($conn) {
        $sql = "INSERT INTO users (name, email, password, phone, address, gender) 
                VALUES ('$name', '$email', '$hashed_password', '$phone', '$address', '$gender')";

        
        if (mysqli_query($conn, $sql)) {
            
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        
        $conn->close();
    } else {
        echo "Database connection failed.";
    }
}
?>