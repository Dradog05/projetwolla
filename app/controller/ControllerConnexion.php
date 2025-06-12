<?php
require_once '../model/ModelPersonne.php';

class ControllerConnexion {
    public static function connect() {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = ModelPersonne::checkLogin($login, $password);
        
        if ($user) {
            $_SESSION['login_id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['login']=$login;
            $_SESSION['role_responsable'] = $user['role_responsable'];
            $_SESSION['role_examinateur'] = $user['role_examinateur'];
            $_SESSION['role_etudiant'] = $user['role_etudiant'];
            
            include 'config.php';
            $vue = $root . 'app/view/Acceuil.php';
            if (DEBUG)
            echo ("ControllerConnexion : connection_réussi : vue = $vue");
            require ($vue);
        } else {
            include 'config.php';
            $vue = $root . 'app/view/Connexion/viewLoginError.php';
            if (DEBUG)
            echo ("ControllerConnexion: connection_échouée : vue = $vue");
            require ($vue);
        }
    }
    public static function Inscription(){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = ModelPersonne::checkLogin($login, $password);
        
        if ($user) {
            $_SESSION['login_id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['role_responsable'] = $user['role_responsable'];
            $_SESSION['role_examinateur'] = $user['role_examinateur'];
            $_SESSION['role_etudiant'] = $user['role_etudiant'];
            
            include 'config.php';
            $vue = $root . 'app/view/Connexion/viewLoginSuccess.php';
            if (DEBUG)
            echo ("ControllerConnexion : Inscription : vue = $vue");
            require ($vue);
        } else {
            include 'config.php';
            $vue = $root . 'app/view/Connexion/viewLoginError.php';
            if (DEBUG)
            echo ("ControllerConnexion: Inscription : vue = $vue");
            require ($vue);
        }
    }
    public static function logout() {
        session_unset();
        session_destroy();
        include 'config.php';
        $vue = $root . 'app/view/Connexion/viewLogoutSuccess.php';
        if (DEBUG)
        echo ("ControllerConnexion: logout : vue = $vue");
        require ($vue);
    }
    

    public static function loginForm() {
        include 'config.php';
        $vue = $root . 'app/view/Connexion/viewLoginForm.php';
        if (DEBUG)
        echo ("ControllerConnexion: loginForm : vue = $vue");
        require ($vue);
    }
    public static function SubscribeForm(){
        include 'config.php';
        $vue = $root . 'app/view/Connexion/viewInscription.php';
        if (DEBUG)
        echo ("ControllerConnexion: SubscribeForm : vue = $vue");
        require ($vue);
    }
    
}
?>