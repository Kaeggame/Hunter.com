<!-- Page d'inscription -->



    <!-- Lie le fichier header avec le site -->
<?php
require_once __DIR__ . './templates/header.tpl.php';
?>

    <!-- Relie la database avec le site -->

        <!-- Le contenu principal de la page -->
        <section class="mainblock">

            <!-- La Section inscription -->
            <div class="inscriBloc">
                <form method="post">
                  <input type="email" name="email" id="email" placeholder="Email" required><br>
                  <input type="password" name="password" id="password" placeholder="Mot de passe" required><br>
                  <input type="submit" name="formsend" id="formsend" value='OK'>
                  </form>
            </div>
<?php

require_once __DIR__ . './templates/database.php';

    if(isset($_POST['formsend'])){

        extract($_POST);

        global $db;

        $q = $db->prepare("INSERT INTO users(email,password) VALUES(:email,:password)");
        $q->execute([
                'email' => $email
                'password' => $password ]);
          }

?>
            <p>Si t'es déjà inscris cliques <a href="profile.php">ici</a></p>
        </section>


    <!-- Lie le fichier footer avec le site -->
    <?php
    require_once __DIR__ . './templates/footer.tpl.php';
    ?>

