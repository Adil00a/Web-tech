<?php
include '../control/reg_control.php';
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Seller Registration</title>
    <link rel="stylesheet" href="../css/mystyle.css"> 
</head>
<body>
    <h1>Seller Registration</h1>
    <form action=" " method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br><br>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>

        <button type="submit">register</button>
        <input type="reset" name="reset" class="btnShape btnReset" value="Reset" >
           <input type="submit" name="submit" class="btnShape btnSubmit" value="Submit" >

    </form>

    <input type="type" id="input" onkeyup="printText()">
<p id="print"></p>
<button onclick="printText()">Click</button>

<script src="../js/myjs.js"></script>
</body>

</body>
</html>

