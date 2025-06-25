<?php


Class ControllerInovation {
    public static function fonction_originale() {

    include 'config.php';
        $vue = $root.'/app/view/inovation/fonctionOriginale.php';
        require($vue);
    }
   
    public static function ameliorationMVC() {
    include 'config.php';
        $vue = $root.'/app/view/inovation/fonctionMVC.php';
        require($vue);
    }
}

?>