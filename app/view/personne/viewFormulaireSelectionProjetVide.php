<!-- ----- début viewFormulaireSelectionProjetVide -->
<?php

require ($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container rounded">
      <?php
      include $root . '/app/view/fragment/fragmentProjetMenu.php';
      include $root . '/app/view/fragment/fragmentProjetJumbotron.html';
      ?>
      
          <?php if($results['role_examinateur']==1){
              printf("<h5> Cet Examinateur n'a pas de projet assigné");
          }
          else if($results['role_responsable']==1 and $results['role_examinateur']==1){
              printf("<h5> Ce responsable n'a pas de projet");
          }
          ?>
          
      </br>
   
  </div>
  <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>

  <!-- ----- fin viewFormulaireSelectionProjetVide -->