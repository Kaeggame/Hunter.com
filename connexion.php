<!-- Page de Connexion -->


<!-- Lie le fichier header avec le site -->
<?php
require_once __DIR__ . './templates/header.tpl.php';
?>

<!-- Relie la database avec le site -->
<?php
require_once __DIR__ . './templates/database.php';
?>

<!-- Le contenu principal de la page -->
<section class="mainblock">

    <!-- La Section connexion  -->
    <div class="formBlock connexBloc">
        <form method="post">
            <h2 class="formDescrip">Connexion</h2>
            <input id="mail" type="text" name="mail" placeholder="eMail"/>
            <input id="mdp" type="password" name="mdp" placeholder="Mot de passe"/>
            <input class="connexValid" type="submit" name="valider"/>
        </form>
    </div>

    <p>Si t'es déjà inscris cliques <a href="profile.php">ici</a></p>
    <p>Si tu n'as pas encore de comptes : <a href="inscription.php">Inscris toi</a> !</p>
</section>

<!-- Lie le fichier footer avec le site -->
<?php
require_once __DIR__ . './templates/footer.tpl.php';
?>

