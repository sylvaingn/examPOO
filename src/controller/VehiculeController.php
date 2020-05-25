<?php
namespace App\Controller;

use App\Model\Vehicule;

class VehiculeController extends AbstractController{


    public static function index(){

        $vehicules = Vehicule::findAll();
        echo self::getTwig()->render('vehicule/index.html', [
            'vehicules' => $vehicules
        ]);

    }


    public static function show()
    {
        echo self::getTwig()->render('vehicule/show.html');
    }

    
    public static function create()
    {
        echo self::getTwig()->render('vehicule/create.html');
    }

    public static function new() {
        $vehicule = new Vehicule;
        $vehicule->setMarque($_POST['marque']);
        $vehicule->setModele($_POST['modele']);
        $vehicule->setCouleur($_POST['couleur']);
        $vehicule->setImmatriculation($_POST['immatriculation']);
        $vehicule->store();

        self::index();
    }

    
    public static function edit()
    {
        echo self::getTwig()->render('vehicule/edit.html');
    }


    public static function update()
    {

    }


    public static function delete(int $id)
    {
        echo self::getTwig()->render('vehicule/delete.html');
    }


}