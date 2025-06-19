<?php

require_once'Model.php';

class ModelRendezVous {

    private $id;
    private $creneau;
    private $etudiant;

// Constructeur
    public function __construct($id = NULL, $creneau = NULL, $etudiant = NULL) {
        if (!is_null($id)) {
            $this->id = $id;
            $this->creneau = $creneau;
            $this->etudiant = $etudiant;
        }
    }


    public function getId() {
        return $this->id;
    }

    public function getCreneau() {
        return $this->creneau;
    }

    public function getEtudiant() {
        return $this->etudiant;
    }


    public function setId($id) {
        $this->id = $id;
    }

    public function setCreneau($creneau) {
        $this->creneau = $creneau;
    }

    public function setEtudiant($etudiant) {
        $this->etudiant = $etudiant;
    }

    public static function getListeRdvEtudiant($etudiant_id) {
        try {
            $db = Model::getInstance();
            $query = "
            SELECT 
                rdv.id, 
                creneau.creneau AS creneau,
                projet.label AS projet,
                personne.nom AS examinateur_nom,
                personne.prenom AS examinateur_prenom
            FROM rdv
            JOIN creneau ON rdv.creneau = creneau.id
            JOIN projet ON creneau.projet = projet.id
            JOIN personne ON creneau.examinateur = personne.id
            WHERE rdv.etudiant = :etudiant_id
            ORDER BY creneau.creneau
        ";
            $statement = $db->prepare($query);
            $statement->execute(['etudiant_id' => $etudiant_id]);
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $ex) {
            printf("%s - %s<p/>\n", $ex->getCode(), $ex->getMessage());
            return NULL;
        }
    }
}
?>


