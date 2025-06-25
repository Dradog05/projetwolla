
<!-- ----- début viewFormulaireSelectionProjet -->
<?php
require($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container rounded">
    <?php include $root . '/app/view/fragment/fragmentProjetMenu.php'; ?>

    <?php include $root . '/app/view/fragment/fragmentProjetJumbotron.html'; ?>


    <hr>
        <h5>Selection d'un Projet :</h5>

        <form role="form" method='get' action='router.php'>
            <div class="form-group">
                <input type="hidden" name='action' value='listeExaminateurParProjet'>        
                <select name='projet'>
                    <?php foreach ($results as $projet): ?>
                        <option value="<?= htmlspecialchars($projet->getId()) ?>">
                            <?= htmlspecialchars($projet->getLabel()) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <p/>
            <br/> 
            <button class="btn btn-dark" type="submit">Soumettre</button>
        </form>
        <p/>
        <br>
    </div>
    <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>

    <!-- ----- fin viewFormulaireSelectionProjet -->





