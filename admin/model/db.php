<?php
class mydb {
    function openCon() {
        $DBHostname = "localhost";
        $DBUsername = "root";
        $DBPassword = "";
        $DBname = "seca";

        $connectionObject = new mysqli($DBHostname, $DBUsername, $DBPassword, $DBname);

        if ($connectionObject->connect_error) {
            echo "Error connecting to DB: " . $connectionObject->connect_error;
        }

        return $connectionObject;
    }

    function closeCon($connectionObject) {
        $connectionObject->close();
    }

    function insertData($table, $fullName, $password, $gender, $skills, $email, $phoneNumber, $dob, $workingHours, $certificates, $authorization) {
        $skillsString = is_array($skills) ? implode(", ", $skills) : $skills;
        $certificatesString = is_array($certificates) ? implode(", ", $certificates) : $certificates;
        $authorizationString = is_array($authorization) ? implode(", ", $authorization) : $authorization;

        $connectionObject = $this->openCon();

      
        $emailCheckQuery = "SELECT * FROM $table WHERE email = ?";
        $stmt = $connectionObject->prepare($emailCheckQuery);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return "Error: Email already exists.";
        }

        $stmt->close();

        
        $sql = "INSERT INTO $table (fullName, password, gender, skills, email, phoneNumber, dob, workingHours, certificates, authorization) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $connectionObject->prepare($sql);

        if (!$stmt) {
            return $connectionObject->error;
        }

        $stmt->bind_param("ssssssssss", $fullName, $password, $gender, $skillsString, $email, $phoneNumber, $dob, $workingHours, $certificatesString, $authorizationString);

        if ($stmt->execute()) {
            return 1;
        } else {
            return $stmt->error;
        }
    }
}
