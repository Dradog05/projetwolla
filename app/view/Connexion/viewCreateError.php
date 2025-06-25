<?php
require($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container rounded">
    <?php include $root . '/app/view/fragment/fragmentProjetMenu.php'; ?>

    <?php include $root . '/app/view/fragment/fragmentProjetJumbotron.html'; ?>


    <hr>
    <h5>Il y a une erreur dans la création de votre Personne : </h5><br>";
    <h5>Peut-être que la personne que vous tentez de créer n'exhiste pas</h5>";
    
      
  </div>   
  
  
  <?php
 include($root . 'app/view/fragment/fragmentProjetFooter.html');
  ?>

  <!-- ----- fin de la page Acceuil -->

</body>
</html>