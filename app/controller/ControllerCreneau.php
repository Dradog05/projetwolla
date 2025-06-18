<?php

require_once'../model/ModelProjet.php';
require_once'../model/ModelCreneau.php';

class ControllerCreneau {

    public static function createCreneau() {
        $results = ModelProjet::getAllProjet();
        include 'config.php';
        $vue = $root . '/app/view/creneau/viewFormulaireAddCreneau.php';
        require($vue);
    }

    public static function createdCreneau() {
        $results = ModelCreneau::addCreneauToProjet(htmlspecialchars($_GET['projet']), htmlspecialchars($_GET['date']), htmlspecialchars($_GET['time']), htmlspecialchars($_SESSION['login_id']));
        $label = ModelProjet::selectById($_GET['projet']);
        include 'config.php';
        $vue = $root . '/app/view/creneau/viewCreneauAjoute.php';
        require($vue);
    }
    public static function createListeCreneau(){
        $results = ModelProjet::getAllProjet();
        include 'config.php';
        $vue = $root . '/app/view/creneau/viewFormulaireAddListeCreneau.php';
        require($vue);
    }
    public static function createdListeCreneau(){
        $results = ModelCreneau::addListeCreneauToProjet(htmlspecialchars($_GET['projet']), htmlspecialchars($_GET['date']), htmlspecialchars($_GET['time']), htmlspecialchars($_SESSION['login_id']), htmlspecialchars($_GET['nombre']));
         include 'config.php';
        $vue = $root . '/app/view/creneau/viewListeCreneauAjoute.php';
        require($vue);
    }
}
