

<!-- ----- début viewListeRdvEtudiant -->
<?php
require ($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentProjetMenu.php';
        include $root . '/app/view/fragment/fragmentProjetJumbotron.html';
        ?>
        <h5>Liste de mes différents Rendez-Vous</h5>
        <table class = "table table-striped table-bordered">
            <thead>
                <tr>

                    <th scope = "col">Créneaux</th>
                    <th scop ="col">Label du Projet</th>
                    <th scop ="col">Examinateur</th>



                </tr>
            </thead>
            <tbody>
                <?php
                if ($results && count($results) > 0) {
                    foreach ($results as $rdv) {
                        $creneau = htmlspecialchars($rdv['creneau']);
                        $projet = htmlspecialchars($rdv['projet']);
                        $examinateur = htmlspecialchars($rdv['examinateur_prenom'] . " " . $rdv['examinateur_nom']);

                        printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $creneau, $projet, $examinateur);
                    }
                } else {
                    echo "<tr><td colspan='3'>Aucun RDV trouvé.</td></tr>";
                }
                ?>


            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>

    <!-- ----- fin viewListeRdvEtudiant -->



