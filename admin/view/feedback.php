<!DOCTYPE html>
<html>
<head>
    <title>Feedback Management</title>
    <link rel="stylesheet" type="text/css" href="../CSS/feedback.css">
</head>
<body>

<h2>Feedback Management</h2>
<form method="GET" action="feedback.php">
    <label>Search Feedback:</label>
    <select name="search_by">
        <option value="Feedback_text" <?php if (isset($_GET['search_by']) && $_GET['search_by'] == 'Feedback_text') echo 'selected'; ?>>By Text</option>
        <option value="Feedback_id" <?php if (isset($_GET['search_by']) && $_GET['search_by'] == 'Feedback_id') echo 'selected'; ?>>By ID</option>
    </select>
    <input type="text" name="search" placeholder="Enter keyword or ID" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
    <input type="submit" value="Search">
</form>
<table border="1">
    <tr>
        <th>Feedback ID</th>
        <th>User ID</th>
        <th>Feedback Text</th>
        <th>Feedback Date</th>
        <th>Actions</th>
    </tr>
    <?php
    $conn = new mysqli("localhost", "root", "", "seca");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $search_by = isset($_GET['search_by']) ? $_GET['search_by'] : 'Feedback_text';
    if ($search_by == "Feedback_id" && is_numeric($search)) {
        $sql = "SELECT * FROM feedback WHERE Feedback_id = $search";
    } else {
        $sql = "SELECT * FROM feedback WHERE Feedback_text LIKE '%$search%'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['Feedback_id'] . "</td>
                <td>" . $row['User_id'] . "</td>
                <td>" . $row['Feedback_text'] . "</td>
                <td>" . $row['Feedback_date'] . "</td>
                <td>
                    <form method='GET' action='deletefeedback.php' style='display:inline;'>
                        <input type='hidden' name='feedback_id' value='" . $row['Feedback_id'] . "'>
                        <input type='submit' value='Delete'>
                    </form>
                </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No feedback found.</td></tr>";
    }

    $conn->close();
    ?>
</table>

</body>
</html>
