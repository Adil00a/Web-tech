<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>

<h2>Contact Us</h2>

<form method="POST" action="../control/contactus_control.php">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br><br>

    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" placeholder="Write your message here..." rows="5" cols="40"></textarea><br><br>

    <input type="submit" value="Send Message">
</form>

</body>
</html>
