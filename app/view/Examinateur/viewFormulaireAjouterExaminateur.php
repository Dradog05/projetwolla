
<!-- ----- début viewFormulaireAjouterExaminateur -->
 
<?php
require($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container rounded">
    <?php include $root . '/app/view/fragment/fragmentProjetMenu.php'; ?>

    <?php include $root . '/app/view/fragment/fragmentProjetJumbotron.html'; ?>


    <hr>
      <h5> Formulaire d'ajout d'examinateurs</h5>

    <form role="form" method='get' action='router.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='createdExaminateur'>        
        <label class='w-25' for="id">Nom de l'examinateur : </label><input type="text" name='nom' > <br/>                          
        <label class='w-25' for="id">Prenom de l'examinateur : </label><input type="text" name="prenom"> <br/> 
        <label class='w-25' for="id">Login de l'examinateur : </label><input type="text" name="login"> <br/>
        <label class='w-25' for="id"> Mot de Passe de l'examinateur : </label><input type="text" name="password"> <br/> 
        
      
      </div>
      <p/>
       <br/> 
      <button class="btn btn-dark" type="submit">Soumettre</button>
    </form>
    <p/>
    <br>
  </div>
  <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>

<!-- ----- fin viewFormulaireAjouterExaminateur -->





