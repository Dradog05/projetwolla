<?php
require_once'Model.php';
class ModelPersonne{

    public $login;
    private $id;
    private $nom;
    private $prenom;
    private $role_responsable;
    private $role_examinateur;
    private $role_etudiant;
    private $password;
    
    public function __construct($id=null, $nom=null, $prenom=null, $role_responsable=null,$role_examinateur=null,$role_etudiant=null,$password=null,$login=null) {
        if(!is_null($id)){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->role_responsable = $role_responsable;
        $this->role_examinateur = $role_examinateur;
        $this->role_etudiant=$role_etudiant;
        $this->password=$password;
        $this->login=$login;
        }
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getRoleResponsable() {
        return $this->role_responsable;
    }

    public function setRoleResponsable($role_responsable) {
        $this->role_responsable = $role_responsable;
    }

    public function getRoleExaminateur() {
        return $this->role_examinateur;
    }

    public function setRoleExaminateur($role_examinateur) {
        $this->role_examinateur = $role_examinateur;
    }

    public function getRoleEtudiant() {
        return $this->role_etudiant;
    }

    public function setRoleEtudiant($role_etudiant) {
        $this->role_etudiant = $role_etudiant;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }
    
    
public static function getAllExaminateurs(){
    try {
        $db = Model::getInstance();
        $query = "SELECT * FROM personne WHERE role_examinateur = 1";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelPersonne");
        return $results;
    } catch (PDOException $ex) { 
        printf("%s - %s<p/>\n", $ex->getCode(), $ex->getMessage());
        return NULL;
    }
}
public static function checkLoginPsw($login, $password) {
    try{
        $db = Model::getInstance();
        $query = "SELECT * FROM personne WHERE login = :login AND password = :password";
        $statement = $db->prepare($query);
        $statement->execute(['login' => $login, 'password' => $password]);
        $results= $statement->fetch(PDO::FETCH_ASSOC);
        return $results;
    } catch (PDOException $ex) { 
        printf("%s - %s<p/>\n", $ex->getCode(), $ex->getMessage());
        return NULL;
    }
}
public static function checkLogin($login) {
    try{
        $db = Model::getInstance();
        $query = "SELECT * FROM personne WHERE login = :login";
        $statement = $db->prepare($query);
        $statement->execute(['login' => $login]);
        $results= $statement->fetch(PDO::FETCH_ASSOC);
        return $results;
    } catch (PDOException $ex) { 
        printf("%s - %s<p/>\n", $ex->getCode(), $ex->getMessage());
        return NULL;
    }
}
public static function addExaminateur(){
    try{
        $db = Model::getInstance();
        //Compléter la suite pour ajouter un examinateur
    } catch (PDOException $ex) {
    }
}
public static function genererNouvellePersonne($id,$nom, $prenom, $role_responsable ,$role_examinateur, $role_etudiant, $login, $password) {
    try{
        $db= Model::getInstance();
        $query="insert into personne values ($id,$nom, $prenom, $role_responsable ,$role_examinateur, $role_etudiant, $login, $password)";
        $statement = $db->prepare($query);
        $statement->execute();
        return 1;
    }catch (PDOException $ex) { 
        printf("%s - %s<p/>\n", $ex->getCode(), $ex->getMessage());
        return NULL;
    }
}
public static function genererNouvelId() {
     try{
        $db = Model::getInstance();
        $query = "SELECT MAX(id) AS max_id FROM personne";
        $statement = $db->prepare($query);
        $statement ->execute();
        $row = $statement->fetch();
        if($row) {$results=$row['max_id'] + 1;
        return $results;
        } else{return 1;}
    }catch (PDOException $ex) { 
        printf("%s - %s<p/>\n", $ex->getCode(), $ex->getMessage());
        return NULL;
    }
   
}
  
}