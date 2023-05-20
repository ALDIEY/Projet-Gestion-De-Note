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

}