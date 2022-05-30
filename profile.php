<!-- Page profil -->

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
            <?php
            if(isset($_SESSION['user'])):
            ?>
                <p class="mainblock">Bonjour, <?= $_SESSION['user']['pseudo'] ?></p>
                <p class="mainblock"><a href="deconnexion.php">Déconnexion</a></p>
            <?php
            else:
            ?>
                <p class="mainblock">Bonjour !</p>
            <?php
            endif;
            ?>
        </section>

<!-- Lie le fichier footer avec le site -->
<?php
require_once __DIR__ . './templates/footer.tpl.php';
?>

