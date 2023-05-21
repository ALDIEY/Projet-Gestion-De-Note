<?php

require_once '../app/connect.php';

class NiveauModel extends MyConnect
{
    private $id;
    private $nom;
   // private $id_niveau;
    

   public function __construct()
   {
       parent::__construct(); //appele constructeur parent
   }

   
   public function affiche()
{
  $affiche= $this->bd->query('SELECT * FROM niveau');
  return $affiche->fetchAll();

}
public function insert($nom)
{
    $inserer = 'INSERT INTO niveau (nom)
                VALUES (:nom)';
    $sow = $this->bd->prepare($inserer);

    $sow->bindParam(':nom', $nom);
   

    $sow->execute();

    // if ($sow->execute()) {
    //     echo "Enregistrement effectué avec succès";
    //     return true;
    // } else {
    //     echo "Une erreur s'est produite lors de l'enregistrement";
    //     return false;
    // }
}

}