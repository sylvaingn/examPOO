<?php

use Bramus\Router\Router;

$router = new Router();
$router->setNamespace('App\Controller');

/**
 * Insérez vos routes ici
 */
$router->get("/", 'AppController@index');


$router->get("/vehicule", "VehiculeController@index");
$router->get("/vehicule/create", "VehiculeController@create");
$router->post("/vehicule", "VehiculeController@new");
$router->get("/vehicule/(\w+)/edit", "VehiculeController@edit");
$router->post("/vehicule/(\w+)/edit", "VehiculeController@update");
$router->post("/vehicule/(\w+)/delete", "VehiculeController@delete");
$router->get("/vehicule/(\w+)", "VehiculeController@show");

$router->get("/conducteur", "ConducteurController@index");
$router->get("/conducteur/create", "ConducteurController@create");
$router->post("/conducteur", "ConducteurController@new");
$router->get("/conducteur/(\w+)/edit", "ConducteurController@edit");
$router->post("/conducteur/(\w+)/edit", "ConducteurController@update");
$router->post("/conducteur/(\w+)/delete", "ConducteurController@delete");
$router->get("/conducteur/(\w+)", "ConducteurController@show");

$router->get("/association_vehicule_conducteur", "AssociationController@index");
$router->get("/association_vehicule_conducteur/create", "AssociationController@create");
$router->post("/association_vehicule_conducteur", "AssociationController@new");
$router->get("/association_vehicule_conducteur/(\w+)/edit", "AssociationController@edit");
$router->post("/association_vehicule_conducteur/(\w+)/edit", "AssociationController@update");
$router->post("/association_vehicule_conducteur/(\w+)/delete", "AssociationController@delete");
$router->get("/association_vehicule_conducteur/(\w+)", "AssociationController@show");



$router->run();

