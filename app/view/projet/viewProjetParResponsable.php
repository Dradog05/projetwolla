

<!-- ----- début viewProjetParResponsable -->
<?php

require ($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentProjetMenu.php';
      include $root . '/app/view/fragment/fragmentProjetJumbotron.html';
      ?>
      <h5> Liste des projet de <?php echo($responsable);?></h5>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">label</th>
          <th scope = "col">responsable</th>
          <th scope = "col">taille du groupe</th>
          
        </tr>
      </thead>
      <tbody>
          <?php
                       
          foreach ($results as $element) {
           printf("<tr><td>%s</td><td>%s</td><td>%d</td></tr>", $element->getLabel(), 
             $element->getResponsable(), $element->getGroupe());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>

  <!-- ----- fin viewProjetParResponsable -->
  
  
  
