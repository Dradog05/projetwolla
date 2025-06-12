
<!-- ----- début viewFormulaireAjouterExaminateur -->
 
<?php 
require ($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentProjetMenu.php';
      include $root . '/app/view/fragment/fragmentProjetJumbotron.html';
    ?> 
      <h5> Formulaire d'ajout d'examinateurs</h5>

    <form role="form" method='get' action='router.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='createdExaminateur'>        
        <label class='w-25' for="id">Nom de l'examinateur : </label><input type="text" name='nom' > <br/>                          
        <label class='w-25' for="id">Prenom de l'examinateur : </label><input type="text" name="prenom"> <br/> 
                  
      </div>
      <p/>
       <br/> 
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewFormulaireAjouterExaminateur -->





