<?php
require_once '../model/ModelRendezVous.php';
require_once '../model/ModelProjet.php';
require_once '../model/ModelPersonne.php';
class ControllerRendezVous{
    
    public static function listeRdvEtudiant(){
        $results = ModelRendezVous::getListeRdvEtudiant($_SESSION['login_id']);
        include 'config.php';
        $vue = $root . '/app/view/rendezVous/viewListeRdvEtudiant.php';
        require($vue);
    }
    public static function choisirProjetEtudiant(){
        $results = ModelProjet::getAllProjet();
        include 'config.php';
        $vue = $root . '/app/view/rendezVous/viewFormulaireChoisirProjetEtudiant.php';
        require($vue);
    }
    public static function prendreRdvEtudiant(){
    $projet_id = $_GET['projet']; 
    $creneaux = ModelRendezVous::getCreneauxDisponibleParProjet($projet_id); 
    include 'config.php';
    $vue = $root . '/app/view/rendezVous/viewFormulaireChoisirCreneauEtudiant.php';
    require($vue);          
    }
   public static function prendreRdvEtudiantVerification(){
       $creneau_id = $_GET['creneau_id'];
       $etudiant_id = $_SESSION['login_id'];
    $results = ModelRendezVous::ajouterRdv($creneau_id, $etudiant_id);
    $etudiant = ModelPersonne::selectById($etudiant_id);
    
    include 'config.php';
    $vue = $root . '/app/view/rendezVous/viewPrendreRdvEtudiantVerification.php';
    require($vue);
   }
    
    
    
}

