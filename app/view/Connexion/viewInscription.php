<?php

require ($root . 'app/view/fragment/fragmentProjetHeader.html');
?>

<body> 
    <div class="container rounded">
        <?php
      include $root . 'app/view/fragment/fragmentProjetMenu.php';
      include $root . 'app/view/fragment/fragmentProjetJumbotron.html';
      ?><hr>
        <form method="post" action="router.php?action=Inscription">
          <label for="prenom">Prénom:</label>
          <input type="text" name="prenom" required>
          <br>
          <label for="nom">Nom:</label>
          <input type="text" name="nom" required><br>
          <label for="login">Login:</label>
          <input type="text" name="login" required><br>
          <label for="password">Mot de passe:</label>
          <input type="password" name="password" required><br>
          <p>Rôles du personnel :</p>
          <label><input type="checkbox" for="role_responsable" name="role_responsable" value="0"> Responsable</label><br>
          <label><input type="checkbox" for="role_examinateur" name="role_examinateur" value="0"> Examinateur</label>
          <label><input type="checkbox" name="role_etudiant" value="0">Etudiant</label><br>
          <input type="submit" value="Inscription" class="rouded text-bg-dark">
        </form><br>
    </div>
<?php include $root . 'app/view/fragment/fragmentProjetFooter.html'; ?>