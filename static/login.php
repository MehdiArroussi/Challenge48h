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
                header('Location: ../home.php');
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
  <form action="../home.php" method="post">
  <h2>Connexion</h2>
      <input type="text" name="email" placeholder="email" required>
      <input type="password" name="password" placeholder="password" required>
      
      <button type="submit" name="submit">Valider</button>
      <a href="signup.php">Pas de compte ? Inscrivez vous !</a>
  </form>


</body>
</html>