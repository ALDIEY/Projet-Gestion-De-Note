<?php
/*
require "DbConnexion.php";

class Eleves
{
    private $id;
    private $nom;
    private $prenom;
    private $telephone;
    private $date_de_naissance;
    private $niveau;
    private $classe;
    private $identificateur;
    private $pdo;

    public function __construct()
    {
        $this->pdo = Dbconnexion::connexion();
    }

    public function all()
    {
        $requete = "select * from eleves";
        $statement = $this->pdo->prepare($requete);
        $statement->execute();
        $recupdata = new Dbconnexion();
        return $recupdata->recupfetchAll($statement);
    }

    public function insert(array $data)
    {
        $requete = "insert into  (nom,prenom,telephone,date_de _naissance,niveau,classe,identicateur)
        values ( :nom, :prenom, :telephone, :date_de _naissance,niveau, :classe, :identicateur)";
        $statement = $this->pdo->prepare($requete);
        $statement->execute($data);
    }
}
*/