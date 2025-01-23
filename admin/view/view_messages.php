<!DOCTYPE html>
<html>
<head>
    <title>View Messages</title>
</head>
<body>

<h2>Contact Us Messages</h2>
<form method="POST" action="../control/control_messages.php">
    <label for="id">Search by ID:</label>
    <input type="text" id="id" name="id" placeholder="Enter message ID">
    <input type="submit" name="search" value="Search">
</form>
<h3>Messages</h3>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Date</th>
    </tr>
    <?php
    include '../control/control_messages.php';
    ?>
</table>

</body>
</html>
