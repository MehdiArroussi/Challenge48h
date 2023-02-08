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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
                    <i class="fa fa-user"></i>
                    <i class="fa fa-shopping-cart"></i>
                    <!-- <a href="static/login.php"><img src="Account.png" class="accountPicture"></a> -->
                    <!-- <img src="Purchase.png" class="purchasePicture" href="#"> -->
                </div>
            </div>
        </header>
        <div class="bestSells">
            <h2 class="sellsTitle">Meilleurs Ventes</h2>
            <div class="Article1">
                <img class="bestSell" src="smallSquare.png">
                <div class="description">
                    <p class="name">Gateau</p>
                    <p class="price">4€</p>
                </div>
            </div>
            <div class="Article2">
                <img class="bestSell" src="brioche.png">
                <div class="description">
                    <p class="name">Brioche</p>
                    <p class="price">2€</p>
                </div>
            </div>
            <div class="Article3">
                <img class="bestSell" src="gomme.png">
                <div class="description">
                    <p class="name">Gomme</p>
                    <p class="price">1€</p>
                </div>
            </div>
            <div class="Article4">
                <img class="bestSell" src="maillotFoot.png">
                <div class="description">
                    <p class="name">Maillot</p>
                    <p class="price">49,99€</p>
                </div>
            </div>
            <button class="voirPlus">Voir +</button>
        </div>
        <div class="nouveaute">
            <img src="leftArrow.png" class="leftArrow">
            <div>
                <img class="newObject" src="airMax.png">
            </div>
            <div>
                <img class="newObject"  src="chaussette.png">
            </div>
            <div>
                <img class="newObject"  src="peigne.png">
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
    <div class="partenaires">
        <h1>Partenaires</h1>
        <div class="imgPartenaires">
        <img src="MichelEtAugustin.png" class="MichelAugustin">
        <img src="BriocheDoree.png" class="Brioche">
        <img src="LDLC.png" class="LDLC">
        </div>
    </div>
    <div class="information">
        <h1>News</h1>
        <div class="info1">
        <h2>Actu 1</h2>
        <p></p>
        </div>
        <div class="info2">
        <h2>Actu 2</h2>
        <p></p>
        </div>
        <div class="info3">
        <h2>Actu 3</h2>
        <p></p>
        </div>
    </div>

    <footer>
        <div class="Service">
            <h3>Services</h3>
            <a href="#"><p>Retour</p></a>
            <a href="#"><p>Assistance en ligne</p></a>
            <a href="#"><p>Support Technique</p></a>
        </div>
        <div class="footerSupport">
            <h3>Support</h3>
            <a href="#"><p>Aide achat</p></a>
            <a href="#"><p>Nous contacter</p></a>
        </div>
        <div class="Partenaires">
            <h3>Partenaires</h3>
            <a href="#"><p>Michel et Augustain</p></a>
            <a href="#"><p>LDLC</p></a>
            <a href="#"><p>Brioche Dorée</p></a>
        </div>
        <div class="footerPropos">
            <h3>À propos</h3>
            <a href="#"><p>Qui somme nous ?</p></a>
            <a href="#"><p>Comment sa fonctionne ?</p></a>
        </div>
    </footer>

</html>