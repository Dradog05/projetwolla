
<!-- ----- début viewFormulaireAddCreneau -->
 
<?php
require($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container rounded">
    <?php include $root . '/app/view/fragment/fragmentProjetMenu.php'; ?>

    <?php include $root . '/app/view/fragment/fragmentProjetJumbotron.html'; ?>


    <hr>
      <h5>Ajouter un créneau à l'un des projets</h5>

    <form role="form" method='get' action='router.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='createdCreneau'>        
        <label class='w-25' for="id">Sélectionnez un projet </label><select name='projet'>
                    <?php foreach ($results as $projet): ?>
                        <option value="<?= htmlspecialchars($projet->getId()) ?>">
                            <?= htmlspecialchars($projet->getLabel()) ?>
                        </option>
                    <?php endforeach; ?>
                </select> <br/>                          
        <label class='w-25' for="id">Quel jour ? </label><input type="date" name="date"> <br/> 
        <label class='w-25' for="id">Quelle heure ? </label><input type="time" name="time"> <br/>
        
      
      </div>
      <p/>
       <br/> 
      <button class="btn btn-dark" type="submit">Soumettre</button>
    </form>
    <p/>
    <br>
  </div>
  <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>

<!-- ----- fin viewFormulaireAddCreneau -->





