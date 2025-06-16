

<!-- ----- début viewListeProjetExaminateur -->
<?php

require ($root . '/app/view/fragment/fragmentProjetHeader.html');
require_once '../model/ModelPersonne.php';
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentProjetMenu.php';
      include $root . '/app/view/fragment/fragmentProjetJumbotron.html';
      ?>
      <h5> Liste des projet de <?php echo htmlspecialchars($_SESSION['nom']) . ' ' . htmlspecialchars($_SESSION['prenom']); ?></h5>
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
              $idresponsable = $element->getResponsable();
              $responsable = ModelPersonne::selectById($idresponsable);
              if($responsable){
                  $nomResp = $responsable->getNom();
                  $prenomResp = $responsable->getPrenom();
                  printf("<tr><td>%s</td><td>%s %s</td><td>%d</td></tr>", $element->getLabel(),$nomResp,$prenomResp 
             , $element->getGroupe());
              }else{
                  echo("Responsable Inconnue");
              }
              
           
          }
          ?>
          
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>

  <!-- ----- fin viewListeProjetExaminateur -->
  
  
  


