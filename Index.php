<!-- Page principal -->

    <!-- Relie la database avec le site -->
    <?php
    require_once __DIR__ . './templates/database.php';
    ?>

    <!-- Lie le fichier header avec le site -->
    <?php
    require_once __DIR__ . './templates/header.tpl.php';
    ?>

<!-- Le contenu principal de la page -->
<section class="mainblock">
  
    <h2>Bienvenue sur Hunter.com !</h2>
  
      <p class="mainblock"><a href="produit.php">Liste de jeux</a> !</p>
  
</section>

    <!-- Lie le fichier footer avec le site -->
    <?php
    require_once __DIR__ . './templates/footer.tpl.php';
    ?>
