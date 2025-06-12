
<?php
require ($root . '/app/view/fragment/fragmentProjetHeader.html');
?>
<body> 
    <div class="container rounded">
        <?php
      include $root . '/app/view/fragment/fragmentProjetMenu.php';
      include $root . '/app/view/fragment/fragmentProjetJumbotron.html';
      ?><hr>
        <form method="post" action="router.php?action=connect">
          <label for="login">Login:</label>
          <input type="text" name="login" required>
          <br>
          <label for="password">Mot de passe:</label>
          <input type="password" name="password" required> 
          <br>
          <input type="submit" value="Connexion" class="text-bg-dark rounded">
        </form><br>
    </div>
<?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>