<?php

require_once('../models/NiveauModels.php');
require_once('../app/Control.php');


class NiveauController extends Control
{

private $niveaumodel;
public function __construct()
{
$this->niveaumodel= new niveauModel;
}

public function affichel()
{
  $voir = $this->niveaumodel->affiche();
 $this->render('niveaux.php', $voir);
}
public function inserer()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    
 
    $niveau = new NiveauModel();

    if ($niveau->insert($nom)) {
      header("Location: http://localhost:8000/niveau",TRUE,303);
    } else {
        echo ".";
    }
}
}
public function delete()
{
    if (isset($_POST['supprimer']))
    {
        $idAnnee =(int)$_POST['id_niveau']; // ID de l'élève à supprimer
        
        $annee = new NiveauModel();
        
        
        if ($annee->delete($idAnnee)) {
          header("Location: http://localhost:8000/niveau",TRUE,303);
      exit();
        }
        else {
          header("Location: http://localhost:8000/niveau",TRUE,303);
      }
            
    }
}
}