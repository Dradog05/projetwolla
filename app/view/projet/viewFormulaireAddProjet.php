
<!-- ----- début viewInsert -->
 
<?php
require($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container rounded">
    <?php include $root . '/app/view/fragment/fragmentProjetMenu.php'; ?>

    <?php include $root . '/app/view/fragment/fragmentProjetJumbotron.html'; ?>


    <hr>
      <h5> Formulaire de Création d'un nouveau Projet</h5>

    <form role="form" method='get' action='router.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='createdProjet'>
        <input type="hidden" name="responsable" value="<?php echo htmlspecialchars($_SESSION['login_id']); ?>"/>
        <label class='w-25' for="id">Label du projet : </label><input type="text" name='label' > <br/>                          
        <label class='w-25' for="id">nombre d'étudiant dans un groupe: </label><input type="number" min="1" max="5" name='groupe' > <br/> 
        
      </div>
      <p/>
       <br/> 
      <button class="btn btn-dark" type="submit">Soumettre</button>
    </form>
      <p/><br>
  </div>
  <?php include $root.'/app/view/fragment/fragmentProjetFooter.html'; ?>

<!-- ----- fin viewInsert -->





