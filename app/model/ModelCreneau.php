<?php
require_once'Model.php';

class ModelCreneau {
    
    private $id;
    private $projet;
    private $examinateur;
    private $creneau;

    // ----- Constructeur -----
    public function __construct($id = null, $projet = null, $examinateur = null, $creneau = null) {
        if (!is_null($id)) {
            $this->id = $id;
            $this->projet = $projet;
            $this->examinateur = $examinateur;
            $this->creneau = $creneau;
        }
    }

    // ----- Getters -----
    public function getId() {
        return $this->id;
    }

    public function getProjet() {
        return $this->projet;
    }

    public function getExaminateur() {
        return $this->examinateur;
    }

    public function getCreneau() {
        return $this->creneau;
    }

    // ----- Setters -----
    public function setId($id) {
        $this->id = $id;
    }

    public function setProjet($projet) {
        $this->projet = $projet;
    }

    public function setExaminateur($examinateur) {
        $this->examinateur = $examinateur;
    }

    public function setCreneau($creneau) {
        $this->creneau = $creneau;
    }
    
    public static function getExaminateurParProjet($id_projet) {
        try {
            $db = Model::getInstance();
            $query = "SELECT DISTINCT p.id, p.nom, p.prenom
            FROM personne p
            JOIN creneau c ON p.id = c.examinateur
            WHERE c.projet = :id_projet
              AND p.role_examinateur = 1";
            $statement = $db->prepare($query);
            $statement->execute(['id_projet' => $id_projet]);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            printf("%s - %s<p/>\n", $ex->getCode(), $ex->getMessage());
            return NULL;
        }
    }
    public static function getPlanningParProjet($id_projet){
        try{
            $db = Model::getInstance();
            $query = "select * from infordv where projet_id = :id_projet order by creneau";
            $statement = $db->prepare($query);
            $statement->execute(['id_projet'=>$id_projet]);
            return $statement->fetchAll(PDO::FETCH_ASSOC);      
            
        } catch (PDOException $ex) {
            printf("%s - %s<p/>\n", $ex->getCode(), $ex->getMessage());
            return NULL;
        }
    }
}
