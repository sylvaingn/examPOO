<?php
namespace App\Model;


class Association extends AbstractModel{


    /**
     * @var int
     */
    public $id_association;

    /**
     * @var int
     */
    public $id_vehicule;

    /**
     * @var int
     */
    public $id_conducteur;


    /**
     * @return int
     */
    public function getIdAssociation(){

        return $this->id_association;
    }

    /**
     * @return int
     */
    public function setIdAssociation(int $id){

        $this->id_association = $id;
        return $this;
    }



    /**
     * @return int
     */
    public function getIdVehicule(){

        return $this->id_vehicule;
    }

    /**
     * @return int
     */
    public function setIdVehicule(int $id){

        $this->id_vehicule = $id;
        return $this;
    }



    /**
     * @return int
     */
    public function getIdConducteur(){

        return $this->id_conducteur;
    }

    /**
     * @return int
     */
    public function setIdConducteur(int $id){

        $this->id_conducteur = $id;
        return $this;
    }



    public static function findAll()
    {

        $bdd = self::getPdo();

        $query = "SELECT * FROM association_vehicule_conducteur
                    left join conducteur on association_vehicule_conducteur.id_conducteur = conducteur.id_conducteur
                    left join vehicule on association_vehicule_conducteur.id_vehicule = vehicule.id_vehicule";
        $response = $bdd->prepare($query);
        $response->execute();

        $data = $response->fetchAll();

        $dataAsObjects = [];

        foreach ($data as $d) {
            $dataAsObjects[] = self::toObject($d);
        }

        return $dataAsObjects;
    }

    public function store() {

        $pdo = self::getPdo();
    
        $query = 'INSERT INTO association_vehicule_conducteur(id_association, id_vehicule, id_conducteur) 
        VALUES (:id_association, :id_vehicule, :id_conducteur)';
    
        $response = $pdo->prepare($query);
        $response->execute([
            'id_association' => $this->getIdAssociation(),
            'id_vehicule' => $this->getIdVehicule(),
            'id_conducteur' => $this->getIdConducteur(),
        ]);
    
        return true;
    }

    public static function toObject($array)
    {
        /* var_dump($array); */
        $association = new Association;
        $association->setIdAssociation($array['id_association']);
        $association->setIdVehicule($array['id_vehicule']);
        $association->setIdConducteur($array['id_conducteur']);


        return $association;
    }


}