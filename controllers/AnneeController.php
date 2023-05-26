<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

require_once('../models/AnneeModel.php');
require_once('../app/Control.php');


class AnneeController extends Control
{

private $anneemodel;
public function __construct()
{
$this->anneemodel= new AnneeModel;
}

public function affichel()
{
  $voir = $this->anneemodel->affiche();
 $this->render('Annees.php', $voir);
}
public function inserer()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $annee = $_POST['nom'];
   var_dump($annee); // Affiche la valeur de $annee
    //Vérification des années saisies
    $debut = intval(substr($annee, 0, 4));
    $fin = intval(substr($annee, 5, 4));
    
    if ($debut + 1 !== $fin) {
      echo "Les années ne sont pas décalées d'un an.";
      return; // Arrêter l'exécution de la fonction
    }
 
    $annees = new AnneeModel();

    if ($annees->insert($annee)) {
      header("Location: http://localhost:8000/annee",TRUE,303);
      exit();
        
    } else {
        echo "Erreur lors de l'insertion.";
    }
  }
}

// public function inserer()
// {
//   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $nom = $_POST['nom'];
    
 
//     $niveau = new NiveauModel();

//     if ($niveau->insert($nom)) {
//       header("Location: http://localhost:8000/niveau",TRUE,303);
//     } else {
//         echo ".";
//     }
// }
public function delete()
{
    if (isset($_POST['supprimer']))
    {
        $idAnnee =(int)$_POST['id_annee']; // ID de l'élève à supprimer
        
        $annee = new AnneeModel();
        
        
        if ($annee->delete($idAnnee)) {
          header("Location: http://localhost:8000/annee",TRUE,303);
      exit();
        }
        else {
          header("Location: http://localhost:8000/annee",TRUE,303);
      }
            
    }
}
}

