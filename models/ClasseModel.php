<?php

require_once '../app/connect.php';

class ClasseModel extends MyConnect
{
    private $id;
    private $nom;
    private $id_niveau;
   

    public function __construct()
    {
        parent::__construct(); //appele constructeur parent
    }


public function affiche()
{
   $affiche= $this->bd->query('SELECT * FROM classes');
   return $affiche->fetchAll();

}

    



}