<?php
    include('static/db.php');
    $identity = null;
    if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>

<body>
    <?php
    if ($identity== null): ?>
    <a href="#" > Click here to Login/Signin </a>

    <?php else:?>
<h1> Bienvenue </h1>


</body>
</html>