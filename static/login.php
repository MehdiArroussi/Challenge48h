<?php
include('db.php');
session_start();
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    try {
        $conn = dbconnect();
        $emaillog = htmlspecialchars($_POST['email']);
        $passwordlog = htmlspecialchars($_POST['password']);
        $q = $conn->prepare('SELECT * FROM `user` WHERE email = ?');
        $q->execute([$emaillog]);
        $res = $q->fetch();
        if ($res) {
            if (password_verify($passwordlog, $res['password'])) {
                $_SESSION['identity'] = $res['name'];
                $conn = null;
                // header('Location: ./home.php');
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/loginstyle.css">
    <link rel="stylesheet" href="../signupstyle/style.css">
    <title>Register Urself</title>
</head>
<script type="text/javascript" src="./js/main.js"></script>
<body>
    
    <div class="login-box">
  <form action="../home.php" method="post">
  <h2>Connexion</h2>
      <input type="text" name="email" onkeyup="check();" placeholder="email" required>
      <input type="password" name="password" onkeyup="check();"placeholder="password" required>
      
      <button type="submit" name="submit" onClick="login();">   </button>
  </form>
</div>
</body>
<a href="signup.php">Pas de compte ? Inscrivez-vous! </a>
</html>