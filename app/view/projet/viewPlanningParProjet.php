

<!-- ----- début viewPlanningParProjet -->
<?php
require($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container rounded">
    <?php include $root . '/app/view/fragment/fragmentProjetMenu.php'; ?>

    <?php include $root . '/app/view/fragment/fragmentProjetJumbotron.html'; ?>


    <hr>
      <h5>Planning pour le projet</h5>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Label Projet</th>
          <th scope = "col">Examinateur</th>
          <th scope = "col">Créneaux</th>
          <th scope = "col">Etudiant<th>
          
        </tr>
      </thead>
      <tbody>
          <?php
                       
          foreach ($results as $element) {
           printf("<tr><td>%s</td><td>%s %s</td><td>%s</td><td>%s</td></tr>", 
                htmlspecialchars($element['projet_label']),
                htmlspecialchars($element['examinateur_prenom']),
                htmlspecialchars($element['examinateur_nom']),
                htmlspecialchars($element['creneau']),
                htmlspecialchars($element['etudiant']) 
             );
          }
         
          ?>
          
          
                    
          
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>

  <!-- ----- fin viewPlanningParProjet -->
  
  
  
