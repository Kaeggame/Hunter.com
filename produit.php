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
<div class="pageProduits">
<?php
    global $db;
    $query = "SELECT * FROM jeux order by nomj"; // Query par defaut

    if (isset($_GET["console"])) //Si l'url contient "console"...
    {
        $console = $_GET["console"]; // la variable prend la valeur de console (dans l'url)...
        $query = "SELECT j.*,c.nom FROM jeux_console jc LEFT JOIN jeux j on jc.id_jeux = j.idj LEFT join console c on jc.id_console = c.id WHERE c.id = " . $console . " ORDER BY j.nomj"; // ... et remplace la query par celle qui affichera les jeux en fontion de la console choisis
    }

    $q = $db->query($query);
    while ($jeux = $q->fetch())
    {
        ?>
        <div class="card">
            <img src="images/testpix2.png" alt="..." width="120px">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $jeux['nomj'];?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary"><?php echo "Acheter : " . $jeux['prix'] . " €"; ?></a>
            </div>
        </div>
        <?php
    }

?>
</div>
</section>


<!-- Lie le fichier footer avec le site -->
<?php
require_once __DIR__ . './templates/footer.tpl.php';
?>