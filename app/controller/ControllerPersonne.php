<?php

require_once '../model/ModelPersonne.php';
require_once'../model/ModelProjet.php';
require_once'../model/ModelCreneau.php';

class ControllerPersonne {

    public static function listeExaminateurs() {

        $results = ModelPersonne::getAllExaminateurs();
        include'config.php';
        $vue = $root . '/app/view/personne/viewAllExaminateur.php';
        require($vue);
    }

    public static function createExaminateur() {
        include 'config.php';
        $vue = $root . '/app/view/Examinateur/viewFormulaireAjouterExaminateur.php';
        require($vue);
    }

    public static function createdExaminateur() {
        $results = ModelPersonne::addExaminateur(htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['login']), htmlspecialchars($_GET['password']));
        include'config.php';
        $vue = $root . '/app/view/Examinateur/viewAjoutExaminateur.php';
        require($vue);
    }

    public static function selectionProjetResponsable() {
        $results = ModelProjet::getProjetParResponsable($_SESSION['login_id']);
        include 'config.php';
        if ($results == NULL) {
            $vue = $root . '/app/view/personne/viewFormulaireSelectionProjetVide.php';
        } else {

            $vue = $root . '/app/view/personne/viewFormulaireSelectionProjet.php';
        }
        require($vue);
    }

    public static function listeExaminateurParProjet() {
            $id_projet = htmlspecialchars($_GET['projet']); 
        $results = ModelCreneau::getExaminateurParProjet($id_projet);
        include 'config.php';
        if($results){
        $vue = $root . '/app/view/Examinateur/viewListeExaminateurParProjet.php';}
        else{
        $vue = $root . '/app/view/Examinateur/viewListeExaminateurParProjetVide.php';
        }
        require($vue);
    }
    public static function listeProjetExaminateur(){
        $results = ModelPersonne::getListeProjetExaminateur($_SESSION['login_id']);
        include 'config.php';
        $vue = $root. '/app/view/Examinateur/viewListeProjetExaminateur.php';
        require($vue);
    }
    
    public static function listeCreneauExaminateur(){
        $results = ModelCreneau::getListeCreneauProjetExaminateur($_SESSION['login_id']);
        include 'config.php';
        $vue = $root.'/app/view/Examinateur/viewListeCreneauProjetExaminateur.php';
        require($vue);
    }
    public static function selectionProjetExaminateur(){
        $results = ModelPersonne::getListeProjetExaminateur($_SESSION['login_id']);
        include 'config.php';
        if ($results == NULL) {
            $vue = $root . '/app/view/personne/viewFormulaireSelectionProjetVide.php';
        } else {

            $vue = $root . '/app/view/Examinateur/viewFormulaireSelectionProjetExaminateur.php';
        }
        require($vue);
    }
    public static function listeCreneauProjetParticulierExaminateur(){
        
        $results = ModelCreneau::getListeCreneauParProjet($_GET['projet']);
        $label = ModelProjet::selectById($_GET['projet']);
        include 'config.php';
        $vue = $root. '/app/view/Examinateur/viewListeCreneauProjetParticulierExaminateur.php';
        require($vue);
        
    }
    
}
?>

