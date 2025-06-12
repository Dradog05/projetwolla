<!-- ----- debut de la page Acceuil -->
<?php include 'fragment/fragmentProjetHeader.html'; ?>
<body>
  <div class="container rounded">
    <?php
    include 'fragment/fragmentProjetMenu.php';
    
    include 'fragment/fragmentProjetJumbotron.html';
    echo"<hr><h5>Bienvenu à l'acceuil de notre application ! Utilisez le menu pour accerder aux fonctionnalités !</h5><br>";
    ?>
      
  </div>   
  
  
  <?php
  include 'fragment/fragmentProjetFooter.html';
  ?>

  <!-- ----- fin de la page Acceuil -->

</body>
</html>