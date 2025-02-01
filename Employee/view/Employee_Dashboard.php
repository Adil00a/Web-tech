<?php
// Make sure the user is logged in before accessing the dashboard
// You can add your session check logic here if needed, for example:
// session_start();
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }
?>

<html>
<head>
    <title>Employee Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>

    <h1>Welcome to the Employee Dashboard</h1>

    <fieldset>
        <legend>Navigation</legend>
        
        <form action="Employee_feedback.php" method="get">
            <input type="submit" value="Feedback" />
        </form>
        
        <form action="Employee_inventory.php" method="get">
            <input type="submit" value="Inventory" />
        </form>

        <form action="Employee_product_management.php" method="get">
            <input type="submit" value="Products" />
        </form>

        <form action="order_management.php" method="get">
            <input type="submit" value="Order Management" />
        </form>
        <form action="sales_report.php" method="get">
            <input type="submit" value="sales reports" />
        </form>
        <form action="Employee_login.php" method="get">
    <div class="form-buttons">
        <input type="submit" value="Log Out">
        <input type="reset" value="Clear">
    </div>
</form>
        </form>

    </fieldset>

</body>
</html>
