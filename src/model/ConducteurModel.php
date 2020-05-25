<?php

namespace App\Model;


class Conducteur extends AbstractModel
{


    /**
     * @var int
     */
    private $id_conducteur;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $nom;



    /**
     * @return int
     */
    public function get_id_conducteur()
    {

        return $this->id_conducteur;
    }

    /**
     * @return int
     */
    public function set_id_conducteur(int $id)
    {

        $this->id_conducteur = $id;
        return $this;
    }


    /**
     * @return string
     */
    public function get_prenom()
    {

        return $this->prenom;
    }

    /**
     * @return string
     */
    public function set_prenom(string $prenom)
    {

        $this->prenom = $prenom;
        return $this;
    }


    /**
     * @return string
     */
    public function get_nom()
    {

        return $this->nom;
    }

    /**
     * @return string
     */
    public function set_nom(string $nom)
    {

        $this->nom = $nom;
        return $this;
    }
}
