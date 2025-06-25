<!-- ----- début viewListeCreneauAjoute -->
<?php
require($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container rounded">
    <?php include $root . '/app/view/fragment/fragmentProjetMenu.php'; ?>

    <?php include $root . '/app/view/fragment/fragmentProjetJumbotron.html'; ?>


    <hr>
    <?php
    if ($results && is_array($results)) {
        echo ("<h3>La liste de créneaux a bien été ajoutée</h3>");
        echo("<ul>");
        foreach ($results as $creneau) {
            echo "<li>ID = " . htmlspecialchars($creneau['id']) . 
                 " | Créneau = " . htmlspecialchars($creneau['creneau']) . "</li>";
        }
        echo("</ul>");
        echo '<form method="get" action="router.php">
            <input type="hidden" name="action" value="afficherAccueil">
            <button type="submit" class="btn btn-primary">Retour à l\'accueil</button>
        </form>';
    } else {
        echo ("<h3>Problème d'insertion des créneaux</h3>");
        echo("<h5>Veuillez réessayer</h5>");
        echo '<form method="get" action="router.php">
            <input type="hidden" name="action" value="createListeCreneau">
            <button type="submit" class="btn btn-dark">Réessayez</button>
        </form>';
    }

    echo("<br></div>");

    include $root . '/app/view/fragment/fragmentProjetFooter.html';
    ?>
    <!-- ----- fin viewListeCreneauAjoute -->
