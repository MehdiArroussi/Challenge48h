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
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/home.css">
</head>

<body>
    <!-- <?php
    if ($identity == null): ?>
    <a href="static/login.php" > Click here to Log in/Sign in </a>

    <?php else:?> -->
<header>
    <div class="nav">
        <nav class="left-nav">
            <p>Produits</p>
            <p>A propos de nous</p>
        </nav>
        <h1 class="name">CYBER-COBRA</h1>
        <div class="right-nav">
            <input text class="search">
            <img src="Account.png" class="accountPicture">
            <img src="Purchase.png" class="purchasePicture">
        </div>
    </div>
</header>


<div class="bestSells">
    <h2 class="sellsTitle">Meilleurs Ventes</h2>
    <?php 
    //1 : tu recupère le nombre d'élements avec un  COUNT(*)
    //2 : tu récupere tous tes elmts avec un SELECT * FROM PRODUCTS (prepare puis execute puis fetchAll() contenu par exemple dans une variable $fetch)
    //3 : mettre en place les elements dans une grille (display: grid) a partir de la div bestSells
    // si besoin utilise var_dump(truc a visualiser)
    for($i=0; i < 4; $i++){?>
    <div class="objects">
        <!-- (balise php )echo fetch[$i]['description'] (balise php fin) -->
        <p><?php  echo 'banane' ?></p>
    </div>
<?}?>
</div>

</body>
</html>