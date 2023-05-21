<?php

require_once '../app/connect.php';

class EleveModel extends MyConnect
{
    private $id;
    private $nom;
    private $prenom;
    private $telephone;
    private $date_naissance;
    private $identification;
    private $id_annee;
    private $id_classe;

    public function __construct()
    {
        parent::__construct(); //appele constructeur parent
    }

    public function affiche()
{
   $affiche= $this->bd->query('SELECT * FROM eleves');
   return $affiche->fetchAll();

}

public function insert($nom, $prenom, $telephone, $datenaissance, $identification, $idannee, $idclasse)
{
    $inserer = 'INSERT INTO eleves (nom, prenom, telephone, date_naissance, identification, id_annee, id_classe)
                VALUES (:nom, :prenom, :telephone, :datenaissance, :identification, :idannee, :idclasse)';
    $sow = $this->bd->prepare($inserer);

    $sow->bindParam(':nom', $nom);
    $sow->bindParam(':prenom', $prenom);
    $sow->bindParam(':telephone', $telephone);
    $sow->bindParam(':datenaissance', $datenaissance);
    $sow->bindParam(':identification', $identification);
    $sow->bindParam(':idannee', $idannee);
    $sow->bindParam(':idclasse', $idclasse);

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
