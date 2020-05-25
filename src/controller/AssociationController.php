<?php
namespace App\Controller;

use App\Model\Association;

class AssociationController extends AbstractController{


    public static function index(){

        $associations = Association::findAll();
        echo self::getTwig()->render('association/index.html', [
            'associations' => $associations
        ]);
        var_dump($associations);
    }


    public static function show()
    {
        echo self::getTwig()->render('association/show.html');
    }

    
    public static function create()
    {
        echo self::getTwig()->render('association/create.html');
    }

    
    public static function new() {
        $vehicule = new Association;
        $vehicule->setIdConducteur($_POST['id_conducteur']);
        $vehicule->setIdVehicule($_POST['id_vehicule']);
        $vehicule->store();

        self::index();
    }

    
    public static function edit()
    {
        echo self::getTwig()->render('association/edit.html');
    }


    public static function update()
    {

    }


    public static function delete(int $id)
    {
        echo self::getTwig()->render('association/delete.html');
    }

}