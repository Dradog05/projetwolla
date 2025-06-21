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
    
public static function getCreneauxDisponibleParProjet($projet_id) {
    try {
        $db = Model::getInstance();
        $query = "
            SELECT 
                c.id, 
                c.creneau, 
                p.label AS projet_label, 
                pers.nom AS examinateur_nom, 
                pers.prenom AS examinateur_prenom
            FROM creneau c
            JOIN projet p ON c.projet = p.id
            JOIN personne pers ON c.examinateur = pers.id
            WHERE c.projet = :projet_id
              AND c.id NOT IN (SELECT creneau FROM rdv)
            ORDER BY c.creneau
        ";
        $statement = $db->prepare($query);
        $statement->execute(['projet_id' => $projet_id]);
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    } catch (PDOException $e) {
        printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
        return [];
    }
}
public static function ajouterRdv($creneau_id, $etudiant_id) {
    try {
        $db = Model::getInstance();
         $query="select max(id) from rdv";
            $statement= $db->query($query);
            $tuples = $statement->fetch();
            $id=$tuples['0'];
            $id++;
        $query = "INSERT INTO rdv (id,creneau, etudiant) VALUES (:id, :creneau_id, :etudiant_id)";
        $statement = $db->prepare($query);
        $statement->execute([
            'id'=>$id,
            'creneau_id' => $creneau_id,
            'etudiant_id' => $etudiant_id
        ]);
        return $id;
    } catch (PDOException $e) {
        printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
        return [];
    }
}


}
?>


