<?php
    function dbconnect(){
        try {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $conn = new PDO("mysql:host=$servername;dbname=cobra", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>