<?php
include('db.php');
session_start();
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    try {
        $conn = dbconnect();
        $namesign = $_POST['name'];
        $emailsign = $_POST['email'];
        $passwordhash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $q = $conn->prepare('INSERT INTO user (name, email, passwordhash) VALUES (?, ?, ?)');
        $res = $q->execute([$namesign, $emailsign, $passwordhash]);
        if ($res) {
            $conn = null;
            header('Location : ../home.html');
        }        
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>