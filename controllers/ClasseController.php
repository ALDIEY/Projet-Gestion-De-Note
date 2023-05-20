<?php


require_once('../models/ClasseModel.php');
require_once('../app/Control.php');


class ClasseController extends Control
{

private $classemodel;
public function __construct()
{
$this->classemodel= new ClasseModel;
}

public function affichel()
{
  $voir = $this->classemodel->affiche();
 $this->render('Classes.php', $voir);
}
























}



