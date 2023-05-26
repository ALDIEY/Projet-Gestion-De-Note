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
    if ($sow->execute())
    { 
        return true;
    } else {
        return false;
    }
}
public function delete($id)
{
    $supprimer = 'DELETE FROM niveau WHERE id_niveau = :id_niveau';
    $sow = $this->bd->prepare($supprimer);

    $sow->bindParam(':id_niveau', $id);

    $sow->execute();
}
}