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
        <link rel="stylesheet" href="style/footer.css">
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
            <button class="voirPlus">Voir +</button>
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
    <div class="services">
            <img src="leftArrow.png" class="leftArrow">
            <div>
                <img class="newService" src="service1.png">
            </div>
            <img src="rightArrow.png" class="rightArrow">
    </div>
    <div class="information">
        <div class="info1">
        <h1>Titre 1</h1>
        <p>information 1zbvvbjvjsvjsvv jfvnkjfhicn f,dgkjcvihucyjgbnjh</p>
        </div>
        <div class="info2">
        <h1>Titre 2</h1>
        <p>information 2</p>
        </div>
        <div class="info3">
        <h1>Titre 3</h1>
        <p>information 3</p>
        </div>
    </div>
    <footer>
        <div class="footerService">
            <h3>nos produits et services</h3>
            <ul class ="listeService">
                <style>
                a { color: black;}
                </style>
                <li> <a href="#"> test </a></li>
            </ul>
        </div>
        <div class="footerCommerce">
            <h3>Commerces</h3>
            <ul class ="listeOffres">
                <li> <a href="#"> les offres </a></li>
                <li> <a href="#"> suivre ma commande</a></li>
                <li> <a href="#"> livraisons </a></li>
            </ul>
        </div>
        <div class="footerSupport">
            <h3>Support</h3>
            <ul class ="listeSupport">
                <li> <a href="#"> support thénique </a></li>
                <li> <a href="#"> FAQ </a></li>
            </ul>
        </div>
        <div class="footerCompte">
            <h3>Compte</h3>
            <ul class ="listeCompte">
                <li> <a href="#"> mon compte </a></li>
                <li> <a href="#"> mes produit </a></li>
                <li> <a href="#"> mes comande  </a></li>
            </ul>
        </div>
        <div class="footerPropos">
            <h3>À propos</h3>
            <ul class ="listePropos">
                <li> <a href="#"> information </a></li>
                <li> <a href="#"> image de marque </a></li>
                <li> <a href="#"> partenaire  </a></li>
            </ul>
        </div>
    </footer>

</html>