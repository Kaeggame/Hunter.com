<!-- Page d'inscription -->

    <!-- Lie le fichier header avec le site -->

<?php
require_once __DIR__ . './templates/header.tpl.php';
?>

    <!-- Relie la database avec le site -->

</section>

            <!-- La Section inscription -->
            
            <div class="inscriBloc">
                <form method="post">
                  <input class="test" type="pseudo" name="pseudo" id="pseudo" placeholder="Pseudo" required>
                  <input class="test" type="email" name="email" id="email" placeholder="Email" required>
                  <input class="test" type="password" name="password" id="password" placeholder="Mot de passe" required>
                  <input class="test" type="submit" name="formsend" id="formsend" value='OK'>
                  </form>
            </div>

<?php

require_once __DIR__ . './templates/database.php';

    if(isset($_POST['formsend'])){

        extract($_POST);

        global $db;

        $q = $db->prepare("INSERT INTO users(pseudo,email,password) VALUES(:pseudo,:email,:password)");
        $q->execute([
                'pseudo' => $pseudo,
                'email' => $email,
                'password' => $password ]);
          }

?>

            <p>Si t'es déjà inscris cliques <a href="profile.php">ici</a></p>
        </section>


    <!-- Lie le fichier footer avec le site -->
    <?php
    require_once __DIR__ . './templates/footer.tpl.php';
    ?>