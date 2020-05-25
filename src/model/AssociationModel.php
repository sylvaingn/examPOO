<?php
namespace App\Model;


class Association extends AbstractModel{


    /**
     * @var int
     */
    private $id_association;

    /**
     * @var int
     */
    private $id_vehicule;

    /**
     * @var int
     */
    private $id_conducteur;


    /**
     * @return int
     */
    public function get_id_association(){

        return $this->id_association;
    }

    /**
     * @return int
     */
    public function set_id_association(int $id){

        $this->id_association = $id;
        return $this;
    }



    /**
     * @return int
     */
    public function get_id_vehicule(){

        return $this->id_vehicule;
    }

    /**
     * @return int
     */
    public function set_id_vehicule(int $id){

        $this->id_vehicule = $id;
        return $this;
    }



    /**
     * @return int
     */
    public function get_id_conducteur(){

        return $this->id_conducteur;
    }

    /**
     * @return int
     */
    public function set_id_conducteur(int $id){

        $this->id_conducteur = $id;
        return $this;
    }




}