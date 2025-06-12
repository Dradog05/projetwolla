<!-- ----- début fragmentProjetMenu -->
<!--Faire un includ du login/ ControllerPersonne-->
<nav class="navbar navbar-expand-lg bg-warning fixed-top">
  <div class="container-fluid">
     <!-- Mettre les actions--> 
         <?php
         $menu_init='<a class="navbar-brand" href="router.php?action=">VIGNEAU-GODARD |'; 
         if($_SESSION['login']!="?"){$menu_init=$menu_init.' '.$_SESSION['nom'].' '.$_SESSION['prenom'].' ';}
         $menu_init=$menu_init.'|</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
        $menu='<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Inovation</a>
                <ul class="dropdown-menu text-bg-dark">
                  <!--  Proposer des innovations
                  <li><a class="dropdown-item text-bg-dark" href="router.php?action=">Supression d'."'un vin</a></li>
                  <li><a class="."'dropdown-item text-bg-dark".'" href="router.php?action=">Supression d'.'"un producteur</a></li>
                  -->
                </ul>
         </li>
         <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Se connecter</a>
                <ul class="dropdown-menu text-bg-dark">
                  <li><a class="dropdown-item text-bg-dark" href="router.php?action=loginForm">Login</a></li>
                  <li><a class="dropdown-item text-bg-dark" href="router.php?action=SubscribeForm">S'."'inscrire</a></li>
                  <li><a class=".'"dropdown-item text-bg-dark" href="router.php?action=logout">Deconnexion</a></li>
                </ul>
         </li>';
         if($_SESSION['login']=="?"){echo $menu_init.$menu;}
         else { 
            if ($_SESSION['role_etudiant']==true){
                $menu='<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Etudiant</a>
                <ul class="dropdown-menu text-bg-dark">
                <li><a class="dropdown-item text-bg-dark" href="router.php?action=">Liste des mes RDV</a></li>
                <li><a class="dropdown-item text-bg-dark" href="router.php?action=">Prendre un RDV pour un projet</a></li>
                </ul>
                </li>'.$menu;
            }
            if ($_SESSION['role_examinateur']==true) {
                $menu="<li class=".'"nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Examinateur</a>
                <ul class="dropdown-menu text-bg-dark">
                  <li><a class="dropdown-item text-bg-dark" href="router.php?action=">Liste des projets</a></li>
                  <li><a class="dropdown-item text-bg-dark" href="router.php?action=">Liste complète de mes crénaux</a></li>
                  <li><a class="dropdown-item text-bg-dark" href="router.php?action=">Liste de mes crénaux pour un projet</a></li>
                  <li><a class="dropdown-item text-bg-dark" href="router.php?action=">Ajouter un crénau à un projet</a></li>
                  <li><a class="dropdown-item text-bg-dark" href="router.php?action=">Ajouter des crénaux consécutifs</a></li>
                </ul>
                </li>'.$menu;                
            }
            if ($_SESSION['role_responsable']==true) {
                $menu='<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Responsable</a>
                <ul class="dropdown-menu text-bg-dark">
                  <li><a class="dropdown-item text-bg-dark" href="router.php?action=projetReadParResponsable">Liste de mes projets</a></li>
                  <li><a class="dropdown-item text-bg-dark" href="router.php?action=createProjet">Ajout d'."'un projet</a></li>
                  <li><hr class=".'"dropdown-divider"></li>
                  <li><a class="dropdown-item text-bg-dark" href="router.php?action=">Liste des examinateurs</a></li> 
                  <li><a class="dropdown-item text-bg-dark" href="router.php?action=">Ajout d'."'un examinateur</a></li>
                  <li><a class=".'"dropdown-item text-bg-dark" href="router.php?action=">Liste des examinateurs d'."'un projet</a></li>
                  <li><hr class=".'"dropdown-divider"></li>
                  <li><a class="dropdown-item text-bg-dark" href="router.php?action=">Planning d'."'un projet</a></li>
                  </ul>
                </li>".$menu;
            }
            echo($menu_init.$menu);
        }?>
      </ul>
    </div>
  </div>
</nav> 
<!-- ----- fin fragmentCaveMenu -->

