
<!-- ----- début viewAjoutExaminateur -->
<?php
require ($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentProjetMenu.php';
    include $root . '/app/view/fragment/fragmentProjetJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results) {
     echo ("<h3>L'examinateur a été ajouté </h3>");
     echo("<ul>");
     echo ("<li>id = " . $results . "</li>");
     echo ("<li>Nom de l'examinateur = " . $_GET['nom'] . "</li>");
     echo ("<li>Prenom de l'examinateur = " . $_GET['prenom'] . "</li>");
     echo ("<li>Login  = " . $_GET['login'] . "</li>");
     echo ("<li>Mot de Passe  = " . $_GET['password'] . "</li>");
     echo '<form method="get" action="router.php">
        <input type="hidden" name="action" value="afficherAccueil">
        <button type="submit" class="btn btn-primary">Retour à l\'accueil</button>
      </form>';
     echo("</ul>");
    } else {
     echo ("<h3>Problème d'insertion de l'examinateur</h3>");
     echo("<h5> Veuillez réessayer</h5>");
     
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentProjetFooter.html';
    ?>
    <!-- ----- fin viewAjoutExaminateur -->    

    
    
