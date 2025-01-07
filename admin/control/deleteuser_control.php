<?php
session_start();
include '../model/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? "";

    if (!empty($id)) {
        $mydb = new mydb();
        $conobj = $mydb->openCon();

        $query = "DELETE FROM users WHERE id = ?";
        $stmt = $conobj->prepare($query);
        $stmt->bind_param("i", $id);

        if ($stmt->execute() && $stmt->affected_rows > 0) {
            echo "User with ID $id has been successfully deleted.";
        } else {
            echo "Error: Unable to delete user. Please check the ID.";
        }

        $stmt->close();
        $mydb->closeCon($conobj);
    } else {
        echo "Please provide a valid User ID.";
    }
    echo '<br><a href="../view/deleteuser.php">Go Back</a>';
}
?>
