<?php
session_start();
//$_SESSION['panier'] = [];
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Les liens CSS -->
    <link rel="stylesheet" href="css/hunter.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/inscription.css">
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="stylesheet" href="css/produits.css">
    <link rel="stylesheet" href="css/main.css">

    <meta charset="UTF-8">
    <title>Hunter.fr</title>
</head>

<body>
<!-- L'en-tête de la page -->
<header class="mainblock">

    <ul class="mainblock">
        <li><a href="Index.php"><img class="logo" src="images/hunterlogo.png"></a></li>
        <li>
            <form action = "produit.php" method="GET">
                <input class="recherche" type="search" name="terme" placeholder="Recherche..."/>
                <input class="envoyer" type="submit" name="s" />
            </form>
        </li>
        <li><a href="panier.php"><img src="images/hunterbasket.png" alt="un panier commercial"></a></li>
        <li><a href="connexion.php"><img src="images/hunterprofil.png" alt="une icône de profil"></a></li>
    </ul>

</header>

<!-- Le menu de navigations -->
<nav>
    <div class="PC"><a href="produit.php?console=1" class="rick">PC</a></div> <!-- -->
    <div class="Sony"><a href="produit.php?console=2" class="rick">Playstation</a></div> <!-- -->
    <div class="Microsoft"><a href="produit.php?console=3" class="rick">Xbox</a></div> <!-- -->
    <div class="Nintendo"><a href="produit.php?console=4" class="rick">Nintendo</a></div> <!-- -->
</nav>
