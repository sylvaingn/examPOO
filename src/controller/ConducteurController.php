<?php
namespace App\Controller;


class ConducteurController extends AbstractController{


    public static function index(){

        echo self::getTwig()->render('conducteur/index.html');

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