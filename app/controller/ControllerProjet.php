<?php
require_once '../model/ModelProjet.php';
class ControllerProjet{
    public static function projetReadParResponsable(){
        if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
       $results = ModelProjet::getProjetParResponsable($_SESSION['login_id']);
       $responsable= htmlspecialchars($_SESSION['nom'].' '.$_SESSION['prenom']);
       include'config.php';
       $vue = $root.'/app/view/projet/viewProjetParResponsable.php';
       require($vue);
}
public static function createProjet(){

    include 'config.php';
    $vue=$root.'/app/view/projet/viewFormulaireAddProjet.php';
    require($vue);
}
public static function createdProjet(){

    $results=ModelProjet::addProjet(htmlspecialchars($_GET['label']), htmlspecialchars($_GET['responsable']), htmlspecialchars($_GET['groupe']));
    include 'config.php';
    $vue=$root.'/app/view/projet/viewAddProjet.php';
    require($vue);
}


}
