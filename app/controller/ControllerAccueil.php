<?php


Class ControllerAccueil {
    public static function afficherAccueil() {
    include 'config.php';
    $vue = $root . '/app/view/Acceuil.php';
    if (DEBUG)
    echo ("ControllerAcceuil : Acceuil : vue = $vue");
    require ($vue);
    }
}

?>