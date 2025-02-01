<?php

include '../model/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $user_id = $_POST['user_id'];
    $order_date = $_POST['order_date'];
    $total_amount = $_POST['total_amount'];
    $status = $_POST['status'];

    
    if (!empty($user_id) && !empty($order_date) && !empty($total_amount) && !empty($status)) {
        
        $db = new db();
        $conn = $db->createCon();

        
        $query = "INSERT INTO orders (user_id, order_date, total_amount, status) 
                  VALUES ('$user_id', '$order_date', '$total_amount', '$status')";

        
        if (mysqli_query($conn, $query)) {
            echo "Order placed successfully!";
            
            header('Location: ../view/order_confirmation.php');  
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        
        mysqli_close($conn);
    } else {
        echo "Please fill in all fields.";
    }
}
?>