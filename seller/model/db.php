<?php
class db {
    $servername = "localhost";
     $username = "root";  
     $password = "";      
     $dbname = "seca"; 

     function createCon() {
        
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>