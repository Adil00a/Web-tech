<?php
class employee
{
    private $connectionObject;

    public function __construct()
    {
        // Connect to the database
        $DBHostname = "localhost";
        $DBusername = "root";
        $DBPassword = "";
        $DBname = "employee"; // Make sure your database name is correct

        $this->connectionObject = new mysqli($DBHostname, $DBusername, $DBPassword, $DBname);

        if ($this->connectionObject->connect_error) {
            die("ERROR CONNECTING TO DB: " . $this->connectionObject->connect_error);
        }
    }

    // Method to insert employee data into the database
    public function insertEmployee($fullName, $email, $phoneNumber, $dob, $gender, $authorization, $password)
    {
        // Prepare SQL query to insert data into the 'employees' table
        $sql = "INSERT INTO employees (full_name, email, phone_number, dob, gender, authorization, password) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        // Prepare the statement
        if ($stmt = $this->connectionObject->prepare($sql)) {
            // Bind parameters to prevent SQL injection
            $stmt->bind_param("sssssss", $fullName, $email, $phoneNumber, $dob, $gender, $authorization, $password);
            
            // Execute the query
            if ($stmt->execute()) {
                echo "Registration successful!";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $this->connectionObject->error;
        }
    }

    // Method to validate login credentials
    public function validateLogin($email, $password)
    {
        // Prepare SQL query to select user by email
        $sql = "SELECT password FROM employees WHERE email = ? LIMIT 1";

        // Prepare the statement
        if ($stmt = $this->connectionObject->prepare($sql)) {
            // Bind parameters to prevent SQL injection
            $stmt->bind_param("s", $email);
            
            // Execute the query
            $stmt->execute();
            
            // Store result to check if the email exists
            $stmt->store_result();
            
            // If a record is found
            if ($stmt->num_rows > 0) {
                // Bind result to get the password
                $stmt->bind_result($storedPassword);
                $stmt->fetch();
                
                // Verify the password against the stored one in the database
                if ($password === $storedPassword) {
                    return true; // Valid user
                } else {
                    return false; // Invalid password
                }
            } else {
                return false; // Email not found
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $this->connectionObject->error;
        }
    }

    // Close the connection when done
    public function __destruct()
    {
        $this->connectionObject->close();
    }
}
?>
