<?php
$conn = new mysqli("localhost", "root", "", "seca");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = $_POST["action"];

    if ($action === "add") {
        header("Location: add_product.php");
    } elseif ($action === "remove") {
        $product_id = intval($_POST["product_id"]);
        $sql = "DELETE FROM products WHERE Product_id = $product_id";

        if ($conn->query($sql) === TRUE) {
            echo "Product removed successfully.";
        } else {
            echo "Error removing product: " . $conn->error;
        }

        echo "<br><a href='products.php'>Go Back</a>";
    } elseif ($action === "edit") {
        $product_id = intval($_POST["product_id"]);
        header("Location: edit_product.php?product_id=$product_id");
    }
}

$conn->close();
?>
