
<!-- ----- début viewAddProjet -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.php';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
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
     echo ("<h3>Problème d'insertion du Producteur</h3>");
     echo ("id = " . $_GET['nom']);
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewAddProjet -->    

    
    