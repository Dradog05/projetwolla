<?php
require_once'../model/ModelProjet.php';
require_once'../model/ModelCreneau.php';

class ControllerCreneau{
  public static function createCreneau(){
      $results = ModelProjet::getAllProjet();
      include 'config.php';
      $vue = $root.'/app/view/creneau/viewFormulaireAddCreneau.php';
      require($vue);
  }
  public static function createdCreneau(){
      $results = ModelCreneau::addCreneauToProjet(htmlspecialchars($_GET['projet']), htmlspecialchars($_GET['date']), htmlspecialchars($_GET['time']), htmlspecialchars($_SESSION['login_id']));
  }
}
