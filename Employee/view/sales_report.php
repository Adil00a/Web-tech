<html>
<head>
    <title>Sales Reporting</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>

<h1>Sales Reporting</h1>
<form method="POST" action="sales_report_control.php">
    <fieldset>
        <legend>Generate Sales Report</legend>
        <table>
            <tr>
                <td>Start Date:</td>
                <td><input type="date" name="start_date" required></td>
            </tr>
            <tr>
                <td>End Date:</td>
                <td><input type="date" name="end_date" required></td>
            </tr>
            <tr>
                <td>Category:</td>
                <td><input type="text" name="category"></td>
            </tr>
        </table>
        <input type="submit" name="generate" value="Generate Report">
        <input type="reset" value="Clear">
    </fieldset>
</form>

<h2>Sales Report</h2>
<table>
    <tr>
        <th>Order ID</th>
        <th>Customer Name</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Total Price</th>
        <th>Date</th>
    </tr>
    <!-- Dynamic sales report rows will be inserted here -->
</table>

</body>
</html>