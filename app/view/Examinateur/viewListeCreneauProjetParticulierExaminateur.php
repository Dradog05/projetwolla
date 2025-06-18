

<!-- ----- début viewListeCreneauProjetParticulierExaminateur -->
<?php
require ($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentProjetMenu.php';
        include $root . '/app/view/fragment/fragmentProjetJumbotron.html';
        ?>
        <h5>Liste de mes créneaux pour : <?php echo htmlspecialchars($label->getLabel());?></h5>
        <table class = "table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope = "col">Créneaux</th>


                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($results) && is_array($results) && count($results) > 0) {
                    foreach ($results as $element) {
                        printf("<tr><td>%s</td></tr>",
                                
                                htmlspecialchars($element['creneau'])
                        );
                    }
                } else {
                    echo "<tr><td colspan='2'>Aucun créneau trouvé.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>

    <!-- ----- fin viewListeCreneauProjetParticulierExaminateur -->




