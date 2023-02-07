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
        
        <header>
            <div class="nav">
                <nav class="left-nav">
                    <p>Produits</p>
                    <p>A propos de nous</p>
                </nav>
                <h1 class="name">CYBER-COBRA</h1>
                <div class="right-nav">
                    <input text class="search">
                    <a href="static/login.php"><img src="Account.png" class="accountPicture"></a>
                    <img src="Purchase.png" class="purchasePicture">
                </div>
            </div>
        </header>
        <div class="bestSells">
            <h2 class="sellsTitle">Meilleurs Ventes</h2>
            <div>
                <img class="bestSell" src="gomme.png">
            </div>
            <div>
                <img class="bestSell" src="gomme.png">
            </div>
            <div>
                <img class="bestSell" src="gomme.png">
            </div>
            <div>
                <img class="bestSell" src="gomme.png">
            </div>
        </div>
        <div class="nouveaute">
            <img src="leftArrow.png" class="leftArrow">
            <div>
                <img class="newObject" src="carte1.png">
            </div>
            <div>
                <img class="newObject"  src="carte1.png">
            </div>
            <div>
                <img class="newObject"  src="carte1.png">
            </div>
            <div>
                <img class="newObject" src="carte1.png">
            </div>
            <img src="rightArrow.png" class="rightArrow">
         </div>
</html>