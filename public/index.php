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
$router->post('/eleve', 'EleveController@inserer');
$router->post('/eleve', 'EleveController@delete');
$router->post('/eleve', 'EleveController@modification');




$router->get('/niveau', 'NiveauController@affichel');
$router->post('/niveau', 'NiveauController@affichel');
$router->post('/niveau', 'NiveauController@inserer');
$router->post('/SupNiveau', 'NiveauController@delete');



$router->get('/annee', 'AnneeController@affichel');
$router->post('/annee', 'AnneeController@affichel');
$router->post('/annee', 'AnneeController@inserer');
 $router->post('/SupAnnee', 'AnneeController@delete');




$router->get('/classe', 'ClasseController@affichel');
$router->post('/clasee', 'ClasseController@affichel');
$router->post('/classe', 'ClasseController@inserer');


$router->run();

