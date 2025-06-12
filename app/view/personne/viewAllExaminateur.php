

<!-- ----- début viewAllExaminateur -->
<?php

require ($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentProjetMenu.php';
      include $root . '/app/view/fragment/fragmentProjetJumbotron.html';
      ?>
      <h5> Liste des Examinateurs</h5>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Nom</th>
          <th scope = "col">Prenom</th>
        </tr>
      </thead>
      <tbody>
          <?php
                       
          foreach ($results as $element) {
           printf("<tr><td>%s</td><td>%s</td></tr>", $element->getNom(), 
             $element->getPrenom());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>

  <!-- ----- fin viewAllExaminateur -->
  
  
  
