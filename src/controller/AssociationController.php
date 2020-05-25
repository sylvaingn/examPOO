<?php
namespace App\Controller;


class AssociationController extends AbstractController{


    public static function index(){

        echo self::getTwig()->render('association/index.html');

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