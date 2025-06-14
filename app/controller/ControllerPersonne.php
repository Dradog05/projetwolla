<?php

require_once '../model/ModelPersonne.php';
class ControllerPersonne {
    
   public static function listeExaminateurs(){
       
       
       $results = ModelPersonne::getAllExaminateurs();
       include'config.php';
       $vue = $root.'/app/view/personne/viewAllExaminateur.php';
       require($vue);
   }
   public static function createExaminateur(){
       include 'config.php';
       $vue = $root.'/app/view/Examinateur/viewFormulaireAjouterExaminateur.php';
       require($vue);
   }
   public static function createdExaminateur(){
       $results = ModelPersonne::addExaminateur(htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['login']), htmlspecialchars($_GET['password']));
       include'config.php';
       $vue = $root.'/app/view/Examinateur/viewAjoutExaminateur.php';
       require($vue);
   }
   

} 
?>

