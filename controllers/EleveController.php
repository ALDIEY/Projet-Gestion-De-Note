<?php


require_once('../models/EleveModel.php');
require_once('../app/Control.php');


class EleveController extends Control
{

private $elevemodel;
public function __construct()
{
$this->elevemodel= new EleveModel;
}

public function affichel()
{
  $voir = $this->elevemodel->affiche();
 $this->render('Eleves.php', $voir);
}


public function inserer()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $dateNaissance = $_POST['date_naissance'];
    $identification = $_POST['identification'];
    $idannee = $_POST['annee'];
    $idclasse = $_POST['classe'];
 
    $eleve = new EleveModel();

    if ($eleve->insert($nom, $prenom, $telephone, $dateNaissance, $identification, $idannee, $idclasse)) {
        echo "succès.";
    } else {
        echo ".";
    }
}
//print_r($_POST);
}

}


