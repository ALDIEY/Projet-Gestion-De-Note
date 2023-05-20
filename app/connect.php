<?php


require_once 'Bdconnexion.php';


class MyConnect
{

protected PDO $bd;


public function __construct()
{
   $db= new Bdconnexion();
   $this->bd=$db->connexion(); //appele a la methode
}

}

