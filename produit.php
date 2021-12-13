<!-- Page produit -->

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
            global $db;

            $q = $db->query("SELECT * FROM jeux");
            while ($jeux = $q->fetch()) {
              echo "Jeu : " . $jeux['nomj']  . "  |  ";
              echo "Prix : " . $jeux['prix'] . " €" . "<br>";
            }
           ?>
        </section>


<!-- Lie le fichier footer avec le site -->
<?php
require_once __DIR__ . './templates/footer.tpl.php';
?>