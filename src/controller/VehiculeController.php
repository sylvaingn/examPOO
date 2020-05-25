<?php
namespace App\Controller;


class VehiculeController extends AbstractController{


    public static function index(){

        echo self::getTwig()->render('vehicule/index.html');

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
        echo self::getTwig()->render('vehicule/new.html');
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