<!-- ----- début viewFormulaireSelectionProjetVide -->
<?php

require ($root . '/app/view/fragment/fragmentProjetHeader.html');
?>


<body>
  <div class="container rounded">
    <?php
    include $root . '/app/view/fragment/fragmentProjetMenu.php';
        include $root . '/app/view/fragment/fragmentProjetJumbotron.html';
    echo"<hr><h5>Aucun crénau n'est possible pour les projets</h5><br>";
    ?>
      
  </div>   
  


  <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>
</body>
</html>
  <!-- ----- fin viewFormulaireSelectionProjetVide -->