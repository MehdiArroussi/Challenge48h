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


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Register Urself</title>
</head>
<body>
    
    <div class="login-box">
  <form action="file/*.php" method="post">
  <h2>Register</h2>
      <input type="text" name="name" placeholder="name" required>
      <input type="text" name="email" placeholder="email" required>
      <input type="password" name="password" placeholder="password" required>
      
      <button type="submit" name="submit">Valider</button>
  </form>


</body>
</html>