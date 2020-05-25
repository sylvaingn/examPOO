<?php
namespace App\Controller;


class AppController extends AbstractController{


    public static function index(){

        echo self::getTwig()->render('app/index.html');

    }

    public static function contact(){

        echo self::getTwig()->render('app/contact.html');

    }
}