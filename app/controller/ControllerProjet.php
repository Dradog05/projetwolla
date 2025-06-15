<?php

require_once '../model/ModelProjet.php';
require_once '../model/ModelCreneau.php';

class ControllerProjet {

    public static function projetReadParResponsable() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $results = ModelProjet::getProjetParResponsable($_SESSION['login_id']);
        $responsable = htmlspecialchars($_SESSION['nom'] . ' ' . $_SESSION['prenom']);
        include'config.php';
        $vue = $root . '/app/view/projet/viewProjetParResponsable.php';
        require($vue);
    }

    public static function createProjet() {

        include 'config.php';
        $vue = $root . '/app/view/projet/viewFormulaireAddProjet.php';
        require($vue);
    }

    public static function createdProjet() {

        $results = ModelProjet::addProjet(htmlspecialchars($_GET['label']), htmlspecialchars($_GET['responsable']), htmlspecialchars($_GET['groupe']));
        include 'config.php';
        $vue = $root . '/app/view/projet/viewAddProjet.php';
        require($vue);
    }

    public static function selectionProjet() {
        $results = ModelProjet::getProjetParResponsable($_SESSION['login_id']);
        include 'config.php';
        if ($results == NULL) {
            $vue = $root . '/app/view/personne/viewFormulaireSelectionProjetVide.php';
        } else {

            $vue = $root . '/app/view/projet/viewFormulaireSelectionProjet.php';
        }
        require($vue);
    }

    public static function afficherPlanningParProjet() {
        $id_projet = htmlspecialchars($_GET['projet']);
        $results = ModelCreneau::getPlanningParProjet($id_projet);
        include'config.php';
        $vue = $root . '/app/view/projet/viewPlanningParProjet.php';
        require($vue);
    }
}
