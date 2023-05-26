<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

require_once '../app/connect.php';

class AnneeModel extends MyConnect
{
    private $id_annee;
    private $annee_scolaire;


    public function __construct()
    {
        parent::__construct(); //appele constructeur parent
    }


public function affiche()
{
   $affiche= $this->bd->query('SELECT * FROM Annee');
   return $affiche->fetchAll();

}


public function insert($annee)
{
    if (empty($annee)) {
        // Gérer le cas où la valeur est vide ou nulle
        return false;
    }
    //Vérification du format de l'année
    if (!preg_match('/^\d{4}-\d{4}$/', $annee)) {
        echo"salut";
        // Le format de l'année est incorrect, renvoyer une erreur ou effectuer une action appropriée
        return false;
    }
    
    $inserer = 'INSERT INTO Annee (annee_scolaire)
                VALUES (:annee_scolaire)';
    $sow = $this->bd->prepare($inserer);
    //var_dump($annee);

    $sow->bindParam(':annee_scolaire', $annee);
    
    if ($sow->execute()) {
        // Insertion réussie
        
        return true;
    } else {
        // Erreur lors de l'insertion
       var_dump($sow->errorInfo()); // Affiche les informations sur l'erreur
        return false;
    }
}
public function delete($id)
{
    $supprimer = 'DELETE FROM Annee WHERE id_annee = :id_annee';
    $sow = $this->bd->prepare($supprimer);

    $sow->bindParam(':id_annee', $id);

    $sow->execute();
}
}


    



