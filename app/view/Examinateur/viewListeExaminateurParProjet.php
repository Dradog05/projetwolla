<!-- ----- début viewAllExaminateur -->
<?php

require ($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container rounded">
      <?php
      include $root . '/app/view/fragment/fragmentProjetMenu.php';
      include $root . '/app/view/fragment/fragmentProjetJumbotron.html';
      ?>
      <h5> Liste des Examinateurs pour le projet</h5>
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
           printf("<tr><td>%s</td><td>%s</td></tr>", htmlspecialchars($element['nom']), 
                   htmlspecialchars($element['prenom']));
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>

  <!-- ----- fin viewAllExaminateur -->