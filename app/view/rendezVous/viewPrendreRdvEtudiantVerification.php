
<!-- ----- début viewPrendreRdvEtudiantVerification -->
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
            echo ("<h3> Le RDV a bien été pris :  </h3>");
            echo("<ul>");
            echo ("<li>id du créneau = " . htmlspecialchars($creneau_id) . "</li>");
            echo ("<li>Etudiant = " . htmlspecialchars($etudiant->getNom()) ." ".htmlspecialchars($etudiant->getPrenom()) ."</li>");
            echo("</ul>");
        } else {
            echo ("<h3>Problème d'ajout du RDV</h3>");
            echo("<h5> Veuillez réessayer</h5>");
        }


        echo("</div>");

        include $root . '/app/view/fragment/fragmentProjetFooter.html';
        ?>
        <!-- ----- fin viewPrendreRdvEtudiantVerification -->    


