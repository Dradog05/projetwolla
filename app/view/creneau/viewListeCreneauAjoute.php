
<!-- ----- début viewCreneauAjoute -->
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
     echo ("<h3>La liste de créneau à bien été ajouté </h3>");
     echo("<ul>");
     echo ("<li>id = " . $results['id'] . "</li>");
     echo ("<li>Projet = " . $label->getLabel() . "</li>");
     echo ("<li>Creneau = " . $results['creneau'] . "</li>");
     echo '<form method="get" action="router.php">
        <input type="hidden" name="action" value="afficherAccueil">
        <button type="submit" class="btn btn-primary">Retour à l\'accueil</button>
      </form>';
     echo("</ul>");
    } else {
     echo ("<h3>Problème d'insertion du créneau</h3>");
     echo("<h5> Veuillez réessayer</h5>");
     echo '<form method="get" action="router.php">
        <input type="hidden" name="action" value="createListeCreneau">
        <button type="submit" class="btn btn-primary">Réessayez</button>
      </form>';
     echo("</ul>");
     
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentProjetFooter.html';
    ?>
    <!-- ----- fin viewCreneauAjoute -->    

    
    


