<!-- Page panier -->

<!-- Lie le fichier header avec le site -->
<?php
require_once __DIR__ . './templates/header.tpl.php';
?>

<?php
if(isset($_GET['add']))
{
    $idjeux = $_GET["add"];
    $_SESSION['panier'][$idjeux] += 1;

    header("Location: produit.php");
    exit;
}
elseif(isset($_GET["delete"]))
{
    $idjeux = $_GET["delete"];
    $_SESSION['panier'][$idjeux] -= 1;

    if($_SESSION['panier'][$idjeux] == 0)
    {
        unset($_SESSION['panier'][$idjeux]);
    }

    header("Location: panier.php");
    exit;
}
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
                <p class="mainblock">Bonjour, <?= $_SESSION['user']['pseudo'] ?>, ceci est votre panier !</p>
            <?php
            else:
                ?>
                <p class="mainblock">Bonjour !</p>
            <?php
            endif;
            ?>

            <?php

            if(isset($_SESSION['panier']))
            {
                foreach ($_SESSION['panier'] as $idjeux => $quantite) {
                    global $db;

                    $q = $db->prepare("SELECT * FROM jeux WHERE idj = :idj");

                    try {
                        $q->execute([
                            'idj' => $idjeux]);

                        $jeux = $q->fetch(PDO::FETCH_ASSOC);
                    } catch (Exception $exception) {
                        var_dump($exception);
                    }
                    ?>
                    <div class="card">
                        <img src="images/testpix2.png" alt="..." width="120px">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $jeux['nomj'] . " (" . $quantite . ")"; ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <p class="btn btn-primary"><?php echo "Prix : " . $jeux['prix'] * $quantite . " €"; ?></p>
                            <a href="panier.php?delete=<?= $jeux['idj'] ?>">Retirer</a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

        </section>

<!-- Lie le fichier footer avec le site -->
<?php
require_once __DIR__ . './templates/footer.tpl.php';
?>
