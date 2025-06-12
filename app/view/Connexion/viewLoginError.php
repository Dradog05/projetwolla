<?php

require ($root . 'app/view/fragment/fragmentProjetHeader.html');
?>
<body> 
    <div class="container rounded">
        <?php
      include $root . 'app/view/fragment/fragmentProjetMenu.php';
      include $root . 'app/view/fragment/fragmentProjetJumbotron.html';
      ?>
        <h5>Le Login ou le mot de passe est invalide veuillez réessayer ou créer votre compte :</h5> <br>
        <form method="post" action="router.php?action=loginForm">
          <input type="submit" value="Retour à la page de connexion" class="text-bg-dark rounded">
      </form>
        <form method="post" action="router.php?action=SubscribeForm">
            <input type="submit" value="Inscription :" class="text-bg-dark rounded">
        </form><br>
    </div>
<?php include $root . 'app/view/fragment/fragmentProjetFooter.html'; ?>