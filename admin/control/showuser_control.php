<?php
include '../model/db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$mydb = new mydb();
$conobj = $mydb->openCon();

if (isset($_POST['search'])) {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';

    $query = "SELECT * FROM users WHERE 1=1";

    if (!empty($id)) {
        $query .= " AND id = '$id'";
    }
    if (!empty($name)) {
        $query .= " AND fullName LIKE '%$name%'";
    }
    if (!empty($email)) {
        $query .= " AND email LIKE '%$email%'";
    }
    if (!empty($phone)) {
        $query .= " AND phoneNumber LIKE '%$phone%'";
    }

    $query .= " LIMIT 10";

    $result = $conobj->query($query);

    $userData = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $userData[] = $row;
        }
    }
    
    $_POST['userData'] = $userData;
}

$mydb->closeCon($conobj);
include '../view/showusers.php';
?>
