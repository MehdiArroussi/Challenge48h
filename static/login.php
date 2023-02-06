<?php
include('db.php');
session_start();
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    try {
        $conn = dbconnect();
        $emaillog = $_POST['email'];
        $passwordlog = $_POST['password'];
        $q = $conn->prepare('SELECT * FROM user WHERE email = ?');
        $q->execute([$emaillog]);
        $res = $q->fetch();
        if ($res) {
            if (password_verify($passwordlog, $res['password'])) {
                $_SESSION['identity'] = $res['name'];
                $conn = null;
                header('Location: ../home.html');
                exit();
            } else {
                echo "Mot de passe incorrect";
            }
        } else {
            echo "Email incorrect";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>