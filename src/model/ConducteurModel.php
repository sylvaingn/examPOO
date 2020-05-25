<?php

namespace App\Model;


class Conducteur extends AbstractModel
{


    /**
     * @var int
     */
    public $id_conducteur;

    /**
     * @var string
     */
    public $prenom;

    /**
     * @var string
     */
    public $nom;



    /**
     * @return int
     */
    public function getIdConducteur()
    {

        return $this->id_conducteur;
    }

    /**
     * @return int
     */
    public function setIdConducteur(int $id)
    {

        $this->id_conducteur = $id;
        return $this;
    }


    /**
     * @return string
     */
    public function getPrenom()
    {

        return $this->prenom;
    }

    /**
     * @return string
     */
    public function setPrenom(string $prenom)
    {

        $this->prenom = $prenom;
        return $this;
    }


    /**
     * @return string
     */
    public function getNom()
    {

        return $this->nom;
    }

    /**
     * @return string
     */
    public function setNom(string $nom)
    {

        $this->nom = $nom;
        return $this;
    }


    public static function findAll()
    {

        $bdd = self::getPdo();

        $query = "SELECT * FROM conducteur";
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
    
        $query = 'INSERT INTO conducteur(prenom, nom) VALUES (:prenom, :nom)';
    
        $response = $pdo->prepare($query);
        $response->execute([
            'prenom' => $this->getPrenom(),
            'nom' => $this->getNom()
        ]);
    
        return true;
    }

    public static function toObject($array)
    {
        /* var_dump($array); */
        $conducteur = new Conducteur;
        $conducteur->setIdConducteur($array['id_conducteur']);
        $conducteur->setPrenom($array['prenom']);
        $conducteur->setNom($array['nom']);

        return $conducteur;
    }
}
