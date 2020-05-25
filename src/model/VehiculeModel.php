<?php

namespace App\Model;


class Vehicule extends AbstractModel
{


    /**
     * @var int
     */
    private $id_vehicule;

    /**
     * @var string
     */
    private $marque;

    /**
     * @var string
     */
    private $modele;

    /**
     * @var string
     */
    private $couleur;

    /**
     * @var string
     */
    private $immatriculation;


    /**
     * @return int
     */
    public function get_id_vehicule()
    {

        return $this->id_vehicule;
    }

    /**
     * @return int
     */
    public function set_id_vehicule(int $id)
    {

        $this->id_vehicule = $id;
        return $this;
    }


    /**
     * @return string
     */
    public function get_marque()
    {

        return $this->marque;
    }

    /**
     * @return string
     */
    public function set_marque(string $marque)
    {

        $this->marque = $marque;
        return $this;
    }


    /**
     * @return string
     */
    public function get_modele()
    {

        return $this->modele;
    }

    /**
     * @return string
     */
    public function set_modele(string $modele)
    {

        $this->modele = $modele;
        return $this;
    }


    /**
     * @return string
     */
    public function get_couleur()
    {

        return $this->couleur;
    }

    /**
     * @return string
     */
    public function set_couleur(string $couleur)
    {

        $this->couleur = $couleur;
        return $this;
    }


    /**
     * @return string
     */
    public function get_immatriculation()
    {

        return $this->immatriculation;
    }

    /**
     * @return string
     */
    public function set_immatriculation(string $immatriculation)
    {

        $this->immatriculation = $immatriculation;
        return $this;
    }
}
