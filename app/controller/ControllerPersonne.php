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
       $vue = $root.'/app/view/personne/viewFormulaireAjouterExaminateur.php';
       require($vue);
   }
   

} 
?>

