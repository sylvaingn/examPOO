<?php

namespace App\Model;

use Symfony\Component\VarDumper\VarDumper;

class Vehicule extends AbstractModel
{


    /**
     * @var int
     */
    public $id_vehicule;

    /**
     * @var string
     */
    public $marque;

    /**
     * @var string
     */
    public $modele;

    /**
     * @var string
     */
    public $couleur;

    /**
     * @var string
     */
    public $immatriculation;


    /**
     * @return int
     */
    public function getIdVehicule()
    {

        return $this->id_vehicule;
    }

    /**
     * @return int
     */
    public function setIdVehicule(int $id)
    {

        $this->id_vehicule = $id;
        return $this;
    }


    /**
     * @return string
     */
    public function getMarque()
    {

        return $this->marque;
    }

    /**
     * @return string
     */
    public function setMarque(string $marque)
    {

        $this->marque = $marque;
        return $this;
    }


    /**
     * @return string
     */
    public function getModele()
    {

        return $this->modele;
    }

    /**
     * @return string
     */
    public function setModele(string $modele)
    {

        $this->modele = $modele;
        return $this;
    }


    /**
     * @return string
     */
    public function getCouleur()
    {

        return $this->couleur;
    }

    /**
     * @return string
     */
    public function setCouleur(string $couleur)
    {

        $this->couleur = $couleur;
        return $this;
    }


    /**
     * @return string
     */
    public function getImmatriculation()
    {

        return $this->immatriculation;
    }

    /**
     * @return string
     */
    public function setImmatriculation(string $immatriculation)
    {

        $this->immatriculation = $immatriculation;
        return $this;
    }

    public static function findAll()
    {

        $bdd = self::getPdo();

        $query = "SELECT * FROM vehicule";
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
    
        $query = 'INSERT INTO vehicule(marque, modele, couleur, immatriculation) VALUES (:marque, :modele, :couleur, :immatriculation)';
    
        $response = $pdo->prepare($query);
        $response->execute([
            'marque' => $this->getMarque(),
            'modele' => $this->getModele(),
            'couleur' => $this->getCouleur(),
            'immatriculation' => $this->getImmatriculation()
        ]);
    
        return true;
    }

    public static function toObject($array)
    {
        /* var_dump($array); */
        $vehicule = new Vehicule;
        $vehicule->setIdVehicule($array['id_vehicule']);
        $vehicule->setMarque($array['marque']);
        $vehicule->setModele($array['modele']);
        $vehicule->setCouleur($array['couleur']);
        $vehicule->setImmatriculation($array['immatriculation']);

        return $vehicule;
    }
}
