<?php

require ($root . 'app/view/fragment/fragmentProjetHeader.html');
?>
<style>
  #personnelOptions {
    display: none;
  }

  /* Affiche les checkboxes si le bouton radio "personnel" est sélectionné */
  #radio-personnel:checked ~ #personnelOptions {
    display: block;
  }
</style>
<body> 
    <div class="container rounded">
        <?php
      include $root . 'app/view/fragment/fragmentProjetMenu.php';
      include $root . 'app/view/fragment/fragmentProjetJumbotron.html';
      ?>
        <form method="post" action="routeur.php?action=Inscription">
          <label for="prenom">Prénom:</label>
          <input type="text" name="prenom" required>
          <label for="nom">Nom:</label>
          <input type="text" name="nom" required>
          <label for="login">Login:</label>
          <input type="text" name="login" required>
          <label for="password">Mot de passe:</label>
          <input type="password" name="password" required>
          <label><input type="radio" for="radio-personnel"name="role_etudiant">Personnel:</label>
          <div id="personnelOptions">
                <p>Rôles du personnel :</p>
                <label><input type="checkbox" name="role_responsable" value="1"> Responsable</label><br>
                <label><input type="checkbox" name="role_examinateur" value="1"> Examinateur</label>
          </div>
          <label><input type="radio" name="role_etudiant">Etudiant<:</label>
          <input type="submit" value="Inscription">
        </form>
    </div>
<?php include $root . 'app/view/fragment/fragmentProjetFooter.html'; ?>