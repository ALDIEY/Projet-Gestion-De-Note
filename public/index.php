<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

require '../routers/Router.php';


$router= new Routeur();
 




$router->get('/', 'ConnexionController@connectel');
$router->post('/', 'ConnexionController@connectel');

$router->get('/menu', 'MenuController@display');
$router->post('/menu', 'MenuController@display');


$router->get('/eleve', 'EleveController@affichel');
$router->post('/eleve', 'EleveController@affichel');


$router->post('/addEleve', 'EleveController@inserer');


$router->get('/niveau', 'NiveauController@affichel');
$router->post('/niveau', 'NiveauController@affichel');



$router->get('/annee', 'AnneeController@affichel');
$router->post('/annee', 'AnneeController@affichel');

$router->get('/addAnnee', 'AnneeController@inserer');







$router->run();

