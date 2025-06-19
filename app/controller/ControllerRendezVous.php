<?php
require_once '../model/ModelRendezVous.php';
class ControllerRendezVous{
    
    public static function listeRdvEtudiant(){
        $results = ModelRendezVous::getListeRdvEtudiant($_SESSION['login_id']);
        include 'config.php';
        $vue = $root . '/app/view/rendezVous/viewListeRdvEtudiant.php';
        require($vue);
    }
    
}

