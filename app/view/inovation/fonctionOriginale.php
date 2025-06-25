<?php
require($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container rounded">
    <?php include $root . '/app/view/fragment/fragmentProjetMenu.php'; ?>

    <?php include $root . '/app/view/fragment/fragmentProjetJumbotron.html'; ?>

    <!-- Contenu spécifique à la vue -->
    <hr><h5>Idée de fonction originale de l'application en lien avec la base de donnée</h5><br>
    <h6>Formulaire pour envoyer un mail aux participant d'une soutenance d'un projet</h6><br>
    <p>On recherche les personnes en fonction d'un projet donnée et/ou d'une soutenance.Puis via leurs nom et prénom nous avons accès à leurs messagerie UTT. Nous pouvons alors leurs envoyer un mail dans un formulaire grâce à la fonction @mailto. Dans cette optique NOODLE permetrais aussi aux différentes personnes d'un même projet/ d'une soutenance de dialoguer.</p>
  <br></div>   

  <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>
</body>
</html>