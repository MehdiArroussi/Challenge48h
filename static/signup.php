<?php
include('db.php');
session_start();
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['status'])) {
    try {
        $conn = dbconnect();

        $namesign = htmlspecialchars ($_POST['name']);
        $emailsign = htmlspecialchars($_POST['email']);
        $passwordhash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $statussign = htmlspecialchars($_POST['status']);
        $q = $conn->prepare('INSERT INTO user (name, email, password, status) VALUES (?, ?, ?, ?)');
        $res = $q->execute([$namesign, $emailsign, $passwordhash, $statussign]);
        if ($res) {
            $conn = null;
            header('Location : ../home.php');
            exit();
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
    <link rel="stylesheet" href="../style/loginstyle.css">
    <link rel="stylesheet" href="../style/signupstyle.css">
    <title>Register Urself</title>
</head>
<script src="../script/main.js" type="text/javascript"></script>
<body>
    
    <div class="signin-box">
  <form action="signup.php" method="post">
  <h2>Register</h2>
      <input type="text" name="name" placeholder="name" requiered>
      <input type="text" name="email" placeholder="email" required>
      <input type="password" name="password" placeholder="password" required>
      <select name="status" id="status-select">
    <option value="">--Select a status--</option>
    <option value="admin">Admin</option>
    <option value="user">User</option>
    <option value="commercant">Commerçant</option>
</select>
      
      
      <button type="submit" name="Signup">CREER</button>
  </form>


</body>
</html>