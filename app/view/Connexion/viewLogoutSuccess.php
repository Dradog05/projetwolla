<!-- ----- debut de la page Acceuil -->
<?php include($root . 'app/view/fragment/fragmentProjetHeader.html');?>
<body>
  <div class="container rounded">
    <?php
    include($root . 'app/view/fragment/fragmentProjetMenu.php');
    
    include($root . 'app/view/fragment/fragmentProjetJumbotron.html');
    echo"<hr><h5>Vous avez bien été déconnecté</h5><br>";
    ?>
      
  </div>   
  
  
  <?php
 include($root . 'app/view/fragment/fragmentProjetFooter.html');
  ?>

  <!-- ----- fin de la page Acceuil -->

</body>
</html>