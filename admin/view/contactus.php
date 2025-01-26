<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="../CSS/contactus.css">
</head>
<body>

<h2>Contact Us</h2>

<form method="POST" action="../control/contactus_control.php" onsubmit="return validateContactForm()">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br><br>

    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br><br>
    <p id="errorEmail" class="error"></p><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" placeholder="Write your message here..." rows="5" cols="40"></textarea><br><br>
    <p id="errorMessage" class="error"></p><br>

    <input type="submit" value="Send Message">
</form>
<script src = "../js/contactus.js" > </script>
</body>
</html>
