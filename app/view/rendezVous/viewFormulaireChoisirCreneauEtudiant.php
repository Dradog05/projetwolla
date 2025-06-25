<!-- ----- début viewFormulaireChoisirCreneauEtudiant -->

<?php
require ($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentProjetMenu.php';
    include $root . '/app/view/fragment/fragmentProjetJumbotron.html';
    ?> 
    <h5>Selection d'un Créneau :</h5>

    <?php if (empty($creneaux)) { ?>
      <div class="alert alert-warning" role="alert">
        Aucun créneau disponible pour ce projet.
      </div>
      <a href="router.php?action=afficherAccueil" class="btn btn-secondary">Retour à l'accueil</a>
    <?php } else { ?>
      <form role="form" method='get' action='router.php'>
        <div class="form-group">
          <input type="hidden" name='action' value='prendreRdvEtudiantVerification'>
          <select name='creneau_id'>
            <?php foreach ($creneaux as $creneau_dispo): 
             echo"<option value='" .htmlspecialchars($creneau_dispo['id'])."'";?>
                <?= htmlspecialchars($creneau_dispo['creneau']) ?> — <?= htmlspecialchars($creneau_dispo['examinateur_nom'] . " " . $creneau_dispo['examinateur_prenom']) ?>
             <?php echo "</option>";
             endforeach;
         echo " </select>
       </div>
        <p/>
        <br/> 
        <button class='btn btn-dark' type='submit'>Soumettre</button>
      </form>
    "; } ?>

      <p/><br>
  </div>
  <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>

<!-- ----- fin viewFormulaireChoisirCreneauEtudiant -->
