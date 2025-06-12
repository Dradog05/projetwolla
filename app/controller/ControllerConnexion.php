<?php
require_once '../model/ModelPersonne.php';

class ControllerConnexion {
    public static function connect() {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = ModelPersonne::checkLoginPsw($login, $password);
        
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

        $user = ModelPersonne::checkLogin($login);
        
        if ($user==NULL) {
            
            $_SESSION['nom'] = $_POST['nom'];
            $_SESSION['prenom'] = $_POST['prenom'];
            if($_POST['role_responsable']==1){$role_responsable=true;}else{$role_responsable=false;}
            $_SESSION['role_responsable'] = $role_responsable;
            if($_POST['role_examinateur']==1){$role_examinateur=true;}else{$role_examinateur=false;}
            $_SESSION['role_responsable'] = $role_examinateur;
            if($_POST['role_etudiant']==1){$role_etudiant=true;$role_examinateur=false;$role_responsable=false;}else{$role_etudiant=false;}
            $_SESSION['role_responsable'] = $role_etudiant;
            $id= ModelPersonne::genererNouvelId();
            $result=ModelPersonne::genererNouvellePersonne($id,$_POST['nom'],$_POST['prenom'],$role_responsable,$role_examinateur,$role_etudiant,$login,$password);
            if($result==1){
                include 'config.php';

                $vue = $root . 'app/view/Connexion/viewCreateSuccess.php';
                if (DEBUG)
                echo ("ControllerConnexion : Inscription : vue = $vue");
                require ($vue);
                }
            }else{
                include 'config.php';
                $vue = $root . 'app/view/Connexion/viewCreateError.php';
                if (DEBUG)
                echo ("ControllerConnexion: Inscription : vue = $vue");
                require ($vue);
            }
}
    
    public static function logout() {
        $_SESSION['login_id']=0;
        $_SESSION['login']="?";
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