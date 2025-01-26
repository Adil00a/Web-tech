<?php 
$conn = new mysqli("localhost", "root", "", "seca");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="../CSS/manage_products.css">
</head>
<body>
    <h1>Manage Products</h1>

 
    <form method="GET" action="manage_products.php" onsubmit= "validateSearchForm()">
        <input type="text" id="search" name="search" placeholder="Search by Product Name">
        <p id="errorSearch" class="error"></p>
        <input type="submit" value="Search">
    </form>
    <table border="1">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Stock</th>
            <th>Product Image</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['Product_id'] . "</td>";
                echo "<td>" . $row['Product_name'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td>" . $row['Category'] . "</td>";
                echo "<td>" . $row['Stock'] . "</td>";
                echo "<td><img src='./img/" . $row['Product_images'] . "' alt='" . $row['Product_name'] . "' class='product-image'></td>";
                echo "<td>
                        <form action='../control/control_products.php' method='post' style='display:inline;'>
                            <input type='hidden' name='product_id' value='" . $row['Product_id'] . "'>
                            <button type='submit' name='action' value='edit'>Edit</button>
                            <button type='submit' name='action' value='remove'>Remove</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No products found.</td></tr>";
        }
        ?>
    </table>

  
    <form action="../control/control_products.php" method="post">
        <button type="submit" name="action" value="add">Add Products</button>
    </form>
    <script src = "../js/products.js"></script>
</body>
</html>

<?php
$conn->close();
?>
