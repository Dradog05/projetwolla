<?php
require($root . '/app/view/fragment/fragmentProjetHeader.html');
?>

<body>
  <div class="container rounded">
    <?php include $root . '/app/view/fragment/fragmentProjetMenu.php'; ?>

    <?php include $root . '/app/view/fragment/fragmentProjetJumbotron.html'; ?>

    <!-- Contenu spécifique à la vue -->
    <hr><h5>Proposition amélioration du système MVC</h5><br>
    <h6>Ajout d’un cache côté serveur pour les vues</h6>
    <br><p>L’idée est de mettre en cache le rendu HTML généré par les vues afin d’éviter de recalculer (re-générer) entièrement la page à chaque requête utilisateur. Ce cache peut être stocké dans des fichiers PHP qui servirais de mémoire à cours terme. Dans cette optique on solicite une seule fois notre DBA ce qui résout des problèmes de création de tables virtuelles et d'espace mémoire (en cas de requêtes plus complexe si évolution de l'application). </p>
    <br>
  </div>   

  <?php include $root . '/app/view/fragment/fragmentProjetFooter.html'; ?>
</body>
</html>