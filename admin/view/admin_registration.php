<html>
<head>
    <title>Admin Registration</title>
</head>
<body>
    <form method="post" action="../control/reg_control.php">
    <fieldset>
    <legend>Admin Registration Page</legend>
        <table>
            <tr>
                <td><label for="fullName">Full Name:</label></td>
                <td><input type="text" id="fullName" name="fullName"></td>
            </tr>
            <tr>
                <td><label for="password">password:</label></td>
                <td><input type="pass" id="password" name="password"></td>
            </tr>
            <tr>
                <td><label for="phoneNumber">Phone Number:</label></td>
                <td><input type="text" id="phoneNumber" name="phoneNumber"></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><input type="text" id="address" name="address"></td>
            </tr>
            <tr>
                <td><label for="dob">Date of Birth:</label></td>
                <td><input type="date" id="dob" name="dob"></td>
            </tr>
            <tr>
            <td><label>Gender:</label></td>
            <td>
                <select name ="gender">
                    <option> Select Gender </option>
                    <option> Male </option>
                    <option> Female </option>
                    <option> Others </option>


            <tr>
                <td><label for="workExperience">Work Experience (Years):</label></td>
                <td><input type="text" id="workExperience" name="workExperience"></td>
            </tr>
            <tr>
                <td><label for="previousJobTitles">Previous Job Titles:</label></td>
                <td><input type="text" id="previousJobTitles" name="previousJobTitles"></td>
            </tr>
            <tr>
                <td><label for="reference">Reference:</label></td>
                <td><input type="text" id="reference" name="reference"></td>
            </tr>
            <tr>
                <td><label for="education">Highest Level of Education:</label></td>
                <td><input type="text" id="education" name="education"></td>
            </tr>
            <tr>
                <td><label for="certificates">Relevant Certificates:</label></td>
                <td>
                    <input type="checkbox" name="certificates" value="Project Management"> Project Management<br>
                    <input type="checkbox" name="certificates" value="Data Analysis"> Data Analysis<br>
                    <input type="checkbox" name="certificates" value="Cybersecurity"> Cybersecurity<br>
                    <input type="checkbox" name="certificates" value="Cloud Computing"> Cloud Computing<br><br>
                </td>
            </tr>
            <tr>
                <td><label for="skills">Technical Skills:</label></td>
                <td>
                    <input type="checkbox" name="skills" value="Python"> Python<br>
                    <input type="checkbox" name="skills" value="JavaScript"> JavaScript<br>
                    <input type="checkbox" name="skills" value="SQL"> SQL<br>
                    <input type="checkbox" name="skills" value="HTML/CSS"> HTML/CSS<br>
                    <input type="checkbox" name="skills" value="Machine Learning"> Machine Learning <br><br>
                </td>
            </tr>
            <tr>
                <td><label for="authorization">Check Authorization:</label></td>
                <td>
                    <input type="checkbox" name="authorization" value="Can Manage Users"> Can Manage Users<br>
                    <input type="checkbox" name="authorization" value="Can Approve Orders"> Can Approve Orders<br>
                    <input type="checkbox" name="authorization" value="Can Edit Products"> Can Edit Products<br><br>
                </td>
            </tr>
            <tr>
                <td><label for="workingHours">Preferred Working Hours:</label></td>
                <td>
                    <input type="radio" name="workingHours" value="9:00AM-3:00PM"> 9:00AM-3:00PM<br>
                    <input type="radio" name="workingHours" value="3:00PM-9:00PM"> 3:00PM-9:00PM<br><br>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Register">
                </td>
            </tr>
</fieldset>
        </table>
    </form>
</body>
</html>
