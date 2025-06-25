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
          <p>Rôles de la personne :</p>
          <label><input type="checkbox" id="role_responsable" name="role_responsable" value="1"> Responsable</label><br>
          <label><input type="checkbox" id="role_examinateur" name="role_examinateur" value="1"> Examinateur</label><br>
          <label><input type="checkbox" id="role_etudiant" name="role_etudiant" value="1"> Etudiant</label><br>
          <input type="submit" value="S'inscrire" class="rouded text-bg-dark">
        </form><br>
    </div>
<?php include $root . 'app/view/fragment/fragmentProjetFooter.html'; ?>