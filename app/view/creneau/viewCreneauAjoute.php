
<!-- ----- début viewCreneauAjoute -->
<?php
require($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container rounded">
    <?php include $root . '/app/view/fragment/fragmentProjetMenu.php'; ?>

    <?php include $root . '/app/view/fragment/fragmentProjetJumbotron.html'; ?>


    <hr>
    <?php
    if ($results) {
     echo ("<h3>Le créneau à bien été ajouté </h3>");
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
        <input type="hidden" name="action" value="createCreneau">
        <button type="submit" class="btn btn-dark">Réessayez</button>
      </form>';
     echo("</ul>");
     
    }
    echo("<br></div>");
    
    include $root . '/app/view/fragment/fragmentProjetFooter.html';
    ?>
    <!-- ----- fin viewCreneauAjoute -->    

    
    


