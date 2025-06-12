<!-- ----- debut Router1 -->
<?php
require ('../controller/ControllerCreneau.php');
require ('../controller/ControllerPersonne.php');
require('../controller/ControllerProjet.php');
require('../controller/ControllerRendezVous.php');
require('../controller/ControllerAccueil.php');
require('../controller/ControllerConnexion.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);
$action = $param['action'];
unset($param['action']);
$args=$param;
// --- Liste des méthodes autorisées
switch($action):
    case"connect":
    case"logout":
    case"Inscription":
    case"loginForm":
    case"SubscribeForm":
        ControllerConnexion::$action();
        break;
    case "projetReadParResponsable":
    case "createProjet":
    case "createdProjet":
        ControllerProjet::$action();
        break;
    case"listeExaminateurs":
        ControllerPersonne::$action();
        break;

    default:
        ControllerAccueil::afficherAccueil();





endswitch;

?>