<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
</head>
<body>
    <h1>Admin Registration</h1>
    <form method="post" action="../control/reg_control.php" onsubmit="return validation()">
        <fieldset>
            <legend>Admin Registration Form</legend>
            <table>
                <!-- Full Name -->
                <tr>
                    <td><label for="fullName">Full Name:</label></td>
                    <td><input type="text" id="fullName" name="fullName"></td>
                    <td><p id="errorFullName"></p></td>
                </tr>
                
                <!-- Password -->
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password"></td>
                    <td><p id="errorPassword"></p></td>
                </tr>
                
                <!-- Email -->
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email"></td>
                    <td><p id="errorEmail"></p></td>
                </tr>
                
                <!-- Phone Number -->
                <tr>
                    <td><label for="phoneNumber">Phone Number:</label></td>
                    <td><input type="text" id="phoneNumber" name="phoneNumber"></td>
                    <td><p id="errorPhoneNumber"></p></td>
                </tr>
                
                <!-- Date of Birth -->
                <tr>
                    <td><label for="dob">Date of Birth:</label></td>
                    <td><input type="date" id="dob" name="dob"></td>
                    <td><p id="errorDOB"></p></td>
                </tr>
                
                <!-- Gender -->
                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                    </td>
                    <td><p id="errorGender"></p></td>
                </tr>
                
                <!-- Work Experience -->
                <tr>
                    <td><label for="workExperience">Work Experience (Years):</label></td>
                    <td><input type="text" id="workExperience" name="workExperience"></td>
                </tr>
                
                <!-- Previous Job Titles -->
                <tr>
                    <td><label for="previousJobTitles">Previous Job Titles:</label></td>
                    <td><input type="text" id="previousJobTitles" name="previousJobTitles"></td>
                </tr>
                
                <!-- Reference -->
                <tr>
                    <td><label for="reference">Reference:</label></td>
                    <td><input type="text" id="reference" name="reference"></td>
                </tr>
                
               
                <tr>
                    <td><label for="certificates">Relevant Certificates:</label></td>
                    <td>
                        <input type="checkbox" name="certificates" value="Project Management"> Project Management<br>
                        <input type="checkbox" name="certificates" value="Data Analysis"> Data Analysis<br>
                        <input type="checkbox" name="certificates" value="Cybersecurity"> Cybersecurity<br>
                        <input type="checkbox" name="certificates" value="Cloud Computing"> Cloud Computing
                    </td>
                </tr>
                
              
                <tr>
                    <td><label for="skills">Technical Skills:</label></td>
                    <td>
                        <input type="checkbox" name="skills" value="Python"> Python<br>
                        <input type="checkbox" name="skills" value="JavaScript"> JavaScript<br>
                        <input type="checkbox" name="skills" value="SQL"> SQL<br>
                        <input type="checkbox" name="skills" value="HTML/CSS"> HTML/CSS<br>
                        <input type="checkbox" name="skills" value="Machine Learning"> Machine Learning
                    </td>
                </tr>
                
                
                <tr>
                    <td><label for="authorization">Authorization:</label></td>
                    <td>
                        <input type="checkbox" name="authorization" value="Can Manage Users"> Can Manage Users<br>
                        <input type="checkbox" name="authorization" value="Can Approve Orders"> Can Approve Orders<br>
                        <input type="checkbox" name="authorization" value="Can Edit Products"> Can Edit Products
                    </td>
                </tr>
                
                
                <tr>
                    <td><label for="workingHours">Preferred Working Hours:</label></td>
                    <td>
                        <input type="radio" name="workingHours" value="9:00AM-3:00PM"> 9:00AM-3:00PM<br>
                        <input type="radio" name="workingHours" value="3:00PM-9:00PM"> 3:00PM-9:00PM
                    </td>
                </tr>
                
               
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Register">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>


    <input type="text" id="input" onkeyup="printText()">
    <p id="print"></p>

 
    <script src="../js/myjs.js"></script>
</body>
</html>
