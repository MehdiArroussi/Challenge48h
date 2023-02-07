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

         <footer>
    <div class="footer-service">
      <h3>nos produits et services</h3>
      <ul class ="liste-service">
        <style>
          a { color: black;}
        </style>
        <li> <a href="#"> test </a></li>
      </ul>
    </div>
    <div class="footer-shop">
      <h3>Commerces</h3>
      <ul class ="liste-offres">
        <li> <a href="#"> les offres </a></li>
        <li> <a href="#"> suivre ma commande</a></li>
        <li> <a href="#"> livraisons </a></li>
      </ul>
    </div>
    <div class="footer-support">
      <h3>Support</h3>
      <ul class ="liste-support">
        <li> <a href="#"> support thénique </a></li>
        <li> <a href="#"> FAQ </a></li>
      </ul>
    </div>
    <div class="footer-compte">
      <h3>Compte</h3>
      <ul class ="liste-compte">
        <li> <a href="#"> mon compte </a></li>
        <li> <a href="#"> mes produit </a></li>
        <li> <a href="#"> mes comande  </a></li>
      </ul>
    </div>
    <div class="footer-propos">
      <h3>À propos</h3>
      <ul class ="liste-propos">
        <li> <a href="#"> information </a></li>
        <li> <a href="#"> image de marque </a></li>
        <li> <a href="#"> partenaire  </a></li>
      </ul>
    </div>
    
  
  </footer>

</html>