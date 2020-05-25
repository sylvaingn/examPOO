<?php
namespace App\Controller;

use App\Model\Conducteur;

class ConducteurController extends AbstractController{


    public static function index(){

        $conducteurs = Conducteur::findAll();
        echo self::getTwig()->render('conducteur/index.html', [
            'conducteurs' => $conducteurs
        ]);
    }


    public static function show()
    {
        echo self::getTwig()->render('conducteur/show.html');
    }

    
    public static function create()
    {
        echo self::getTwig()->render('conducteur/create.html');
    }

    
    public static function new() {
        echo self::getTwig()->render('conducteur/new.html');
        
    }

    
    public static function edit()
    {
        echo self::getTwig()->render('conducteur/edit.html');
    }


    public static function update()
    {

    }


    public static function delete(int $id)
    {
        echo self::getTwig()->render('conducteur/delete.html');
    }

}