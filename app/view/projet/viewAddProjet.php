
<!-- ----- début viewAddProjet -->
<?php
require ($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentProjetMenu.php';
    include $root . '/app/view/fragment/fragmentProjetJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results) {
     echo ("<h3>Le nouveau projet a été ajouté </h3>");
     echo("<ul>");
     echo ("<li>id = " . $results . "</li>");
     echo ("<li>Label du projet = " . $_GET['label'] . "</li>");
     echo ("<li>Responsable du projet = " . $_GET['responsable'] . "</li>");
     echo ("<li>taille du groupe = " . $_GET['groupe'] . "</li>");
     
     echo("</ul>");
    } else {
     echo ("<h3>Problème d'insertion du Projet</h3>");
     echo("<h5> Veuillez réessayer</h5>");
     
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentProjetFooter.html';
    ?>
    <!-- ----- fin viewAddProjet -->    

    
    