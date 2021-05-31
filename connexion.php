<!-- Page de Connexion -->

<!DOCTYPE html>
<html>
<head>
    <!-- Les liens CSS communs à toutes les pages-->
    <link rel="stylesheet" href="css/hunter.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">

    <!-- Les liens personnels -->
    <link rel="stylesheet" href="css/connexion.css">

    <meta charset="UTF-8">
    <title>Hunter.fr_connexion_</title>
</head>

<body>

<!-- L'en-tête de la page -->
<header class="mainblock">

    <ul class="mainblock">
        <li><a href="Index.php"><img class="logo" src="images/hunterlogo.png"></a></li>
        <li>
            <form method="GET">
                <input class="recherche" type="search" name="recherche" placeholder="Recherche..."/>
                <input class="envoyer" type="submit" name="valider" />
            </form>
        </li>
        <li><a href="panier.php"><img src="images/hunterbasket.png" alt="un panier commercial"></a></li>
        <li><a href="connexion.php"><img src="images/hunterprofil.png" alt="une icône de profil"></a></li>
    </ul>

</header>

<!-- Le menu de navigations -->
<nav>
    <div class="PC"><a href="https://www.youtube.com/watch?v=DLzxrzFCyOs" class="rick">PC</a></div>
    <div class="Sony"><a href="https://www.youtube.com/watch?v=DLzxrzFCyOs" class="rick">Playstation</a></div>
    <div class="Microsoft"><a href="https://www.youtube.com/watch?v=DLzxrzFCyOs" class="rick">Xbox</a></div>
    <div class="Nintendo"><a href="https://www.youtube.com/watch?v=DLzxrzFCyOs" class="rick">Nintendo</a></div>
</nav>


<!-- Le contenu principal de la page -->
<section class="mainblock">

    <!-- La Section connexion  -->
    <div class="connexBloc">
        <h2 class="connexDescrip">Connexion</h2>
        <input id="mail" type="text" name="mail" placeholder="eMail" />
        <input id="mdp" type="password" name="mdp" placeholder="Mot de passe" />
        <input class="connexValid" type="submit" name="valider" />
    </div>

    <p>Si t'es déjà inscris cliques <a href="profile.php">ici</a></p>
    <p>Si tu n'as pas encore de comptes : <a href="inscription.php">Inscris toi</a> !</p>
</section>


<!-- Le footer...juste le footer -->
<footer>
    <div class="footer">

        <div class="footer1">
            <h2>Pour mieux nous connaître</h2>

            <p>À propos de Hunter</p>
            <p>Carrières</p>
            <p>Durabilité</p>
        </div>

        <div class="footer2">
            <h2>Moyen de paiment sur Hunter</h2>

            <p>Cartes de paiement</p>
            <p>Paiement en plusieurs fois</p>
            <p>Chèques-cadeaux</p>
            <p>Rechange en ligne</p>
        </div>

        <div class="footer3">
            <h2>Besoin d'aide ?</h2>

            <p>Hunter et le COVID-19</p>
            <p>Voir ou suivre vos commandes</p>
            <p>Tarifs et option de livraison</p>
            <p>Retours et remplacements</p>
            <p>Application Mobile</p>
            <p>Centre d'aide</p>
        </div>
    </div>
</footer>

</body>
</html>
