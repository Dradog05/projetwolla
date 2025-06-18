<?php

require_once 'Model.php';
class ModelProjet {
    private $id;
    private $label;
    private $responsable;
    private $groupe;

    public function __construct($id=null, $label=null, $responsable=null, $groupe=null) {
        if(!is_null($id)){
        $this->id = $id;
        $this->label = $label;
        $this->responsable = $responsable;
        $this->groupe = $groupe;
        }
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLabel() {
        return $this->label;
    }

    public function setLabel($label) {
        $this->label = $label;
    }

    public function getResponsable() {
        return $this->responsable;
    }

    public function setResponsable($responsable) {
        $this->responsable = $responsable;
    }

    public function getGroupe() {
        return $this->groupe;
    }

    public function setGroupe($groupe) {
        $this->groupe = $groupe;
    }

    

    public static function getProjetParResponsable($id){
        try{
            $db=Model::getInstance();
            $query="select * from projet where responsable= :id";
            $statement = $db->prepare($query);
            $statement->execute(['id'=>$id]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelProjet");
            return $results;
        }catch (PDOException $ex) {
            printf("%s - %s<p/>\n", $ex->getCode(), $ex->getMessage());
            return NULL;
        }
    }
    public static function addProjet($label,$responsable,$groupe){
        try{
            $db = Model::getInstance();
            $query="select max(id) from projet";
            $statement= $db->query($query);
            $tuples = $statement->fetch();
            $id=$tuples['0'];
            $id++;
            $query ="insert into projet values(:id,:label,:responsable,:groupe)";
            $statement=$db->prepare($query);
            $statement->execute(['id'=>$id,'label'=>$label,'responsable'=>$responsable,'groupe'=>$groupe]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelProjet");
            return $id;
        } catch (PDOException $ex) {
            printf("%s - %s<p/>\n", $ex->getCode(), $ex->getMessage());
            return NULL;
        }
    }
    public static function selectById($id) {
    try {
        $db = Model::getInstance();
        $query = "SELECT * FROM projet WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->execute(['id' => $id]);

        // On définit le mode de récupération
        $statement->setFetchMode(PDO::FETCH_CLASS, 'ModelProjet');

        // On récupère un seul résultat (objet)
        $result = $statement->fetch();
        return $result;

    } catch (PDOException $ex) { 
        printf("%s - %s<p/>\n", $ex->getCode(), $ex->getMessage());
        return NULL;
    }
}
    
}