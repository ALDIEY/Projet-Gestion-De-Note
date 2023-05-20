<?php

require_once('../models/AnneeModel.php');
require_once('../app/Control.php');


class AnneeController extends Control
{

private $anneemodel;
public function __construct()
{
$this->anneemodel= new AnneeModel;
}

public function affichel()
{
  $voir = $this->anneemodel->affiche();
 $this->render('Annees.php', $voir);
}
public function inserer()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $anneedebut = $_POST['debutannee'];
    $anneefin = $_POST['finannee'];
    
 
    $eleve = new AnneeModel();

    if ($eleve->insert($anneedebut, $anneefin )) {
        echo "succès.";
    } else {
        echo ".";
    }
}
//print_r($_POST);
}
}