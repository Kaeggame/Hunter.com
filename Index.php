<!-- Page principal -->

<!DOCTYPE html>
<html>
    <head>
        <!-- Les liens CSS -->
        <link rel="stylesheet" href="css/hunter.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/header.css">

        <meta charset="UTF-8">
        <title>Hunter.fr</title>
    </head>

    <body>
    <!-- Relie la database avec le site -->
<?php
include("./template/database.php");
 ?>

    <!-- Lie le fichier header avec le site -->
<?php
include("./template/header.tpl.php");
?>

        <!-- Le menu de navigations -->
        <nav>
            <div class="PC"><a href="https://www.youtube.com/watch?v=DLzxrzFCyOs" class="rick">PC</a></div>
            <div class="Sony"><a href="https://www.youtube.com/watch?v=DLzxrzFCyOs" class="rick">Playstation</a></div>
            <div class="Microsoft"><a href="https://www.youtube.com/watch?v=DLzxrzFCyOs" class="rick">Xbox</a></div>
            <div class="Nintendo"><a href="https://www.youtube.com/watch?v=DLzxrzFCyOs" class="rick">Nintendo</a></div>
        </nav>

        <!-- Le contenu principal de la page -->
        <section class="mainblock">
            <p class="mainblock"><a href="produit.php">Liste de jeux</a> !</p>
        </section>

    <!-- Lie le fichier footer avec le site -->
<?php
include("./template/footer.tpl.php");
?>

    </body>
</html>
