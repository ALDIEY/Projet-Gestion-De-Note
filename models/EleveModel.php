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

// public function insert($nom, $prenom, $telephone, $datenaissance, $identification, $idannee, $idclasse)
// {
//     $inserer = 'INSERT INTO eleves (nom, prenom, telephone, date_naissance, identification, id_annee, id_classe)
//                 VALUES (:nom, :prenom, :telephone, :datenaissance, :identification, :idannee, :idclasse)';
//     $sow = $this->bd->prepare($inserer);

//     $sow->bindParam(':nom', $nom);
//     $sow->bindParam(':prenom', $prenom);
//     $sow->bindParam(':telephone', $telephone);
//     $sow->bindParam(':datenaissance', $datenaissance);
//     $sow->bindParam(':identification', $identification);
//     $sow->bindParam(':idannee', $idannee);
//     $sow->bindParam(':idclasse', $idclasse);

//     $sow->execute();

//     // if ($sow->execute()) {
//     //     echo "Enregistrement effectué avec succès";
//     //     return true;
//     // } else {
//     //     echo "Une erreur s'est produite lors de l'enregistrement";
//     //     return false;
//     // }
// }
public function delete($id)
{
    $supprimer = 'DELETE FROM eleves WHERE id = :id';
    $sow = $this->bd->prepare($supprimer);

    $sow->bindParam(':id', $id);

    $sow->execute();
}

public function modifier( $nom, $prenom, $telephone, $datenaissance, $identification, $idannee, $idclasse)
{
    $modifier = 'UPDATE eleves SET nom = :nom, prenom = :prenom, telephone = :telephone,
    date_naissance = :datenaissance, identification = :identification, id_annee = :idannee,
     id_classe = :idclasse WHERE id = :id';
    $changer = $this->bd->prepare($modifier);

    $changer->bindParam(':id', $id);
    $changer->bindParam(':nom', $nom);
    $changer->bindParam(':prenom', $prenom);
    $changer->bindParam(':telephone', $telephone);
    $changer->bindParam(':datenaissance', $datenaissance);
    $changer->bindParam(':identification', $identification);
    $changer->bindParam(':idannee', $idannee);
    $changer->bindParam(':idclasse', $idclasse);

    if ($changer->execute()) {
        echo "Modification effectuée avec succès";
        return true;
    } else {
        echo "Une erreur s'est produite lors de la modification";
        return false;
    }
}
// Dans le fichier EleveModel.php (ou un autre fichier modèle approprié)


    // ...

   
    // ...





    public function getNiveaux()
    {
        $sql = "SELECT * FROM niveau";
        $result = $this->bd->query($sql);

        $niveaux = array();

        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $niveaux[] = array(
                    "id" => $row["id_niveau"],
                    "nom" => $row["nom"]
                );
            }
        }

        return $niveaux;
    }
}