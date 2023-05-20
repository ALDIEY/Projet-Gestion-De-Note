<?php

require_once '../app/connect.php';

class AnneeModel extends MyConnect
{
    private $id;
    private $debutAnnee;
    private $finAnnee;

    public function __construct()
    {
        parent::__construct(); //appele constructeur parent
    }


public function affiche()
{
   $affiche= $this->bd->query('SELECT * FROM annee');
   return $affiche->fetchAll();

}


public function insert($annee_debut,$annee_fin)
{
    $inserer = 'INSERT INTO annee (annee_debut, annee_fin)
                VALUES (:annee_debut, :annee_fin )';
    $sow = $this->bd->prepare($inserer);

    $sow->bindParam(':annee_debut', $annee_debut);
    $sow->bindParam(':annee_fin', $annee_fin);
    
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