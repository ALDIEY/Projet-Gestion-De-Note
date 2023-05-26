<?php


require_once('../models/EleveModel.php');
require_once('../app/Control.php');
require_once('../Views/View.php');


class EleveController extends Control
{

private $elevemodel;
public function __construct()
{
$this->elevemodel= new EleveModel;
}

public function affichel()
{
  $voir = $this->elevemodel->affiche();
 $this->render('Eleves.php', $voir);
}


// public function inserer()
// {
//   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $nom = $_POST['nom'];
//     $prenom = $_POST['prenom'];
//     $telephone = $_POST['telephone'];
//     $dateNaissance = $_POST['date_naissance'];
//     $identification = $_POST['identification'];
//     $idannee = $_POST['annee'];
//     $idclasse = $_POST['classe'];
 
//     $eleve = new EleveModel();

//     if ($eleve->insert($nom, $prenom, $telephone, $dateNaissance, $identification, $idannee, $idclasse)) {
//         echo "succès.";
//         header('Location:/eleve');
//         exit();
//     } else {
//         echo ".";
//     }
// }
//print_r($_POST);

// }

public function delete()
{
    if (isset($_POST['supprimer']))
    {
        $idEleve =(int)$_POST['id_eleve']; // ID de l'élève à supprimer
        
        $eleve = new EleveModel();
        
        $eleve->delete($idEleve);
            
    }
}
public function modification()
{
    if (isset($_POST['enrigistrer'])) {
        $id = (int)$_POST['id']; // Récupérer l'ID de l'élève à modifier
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $telephone = $_POST['telephone'];
        $dateNaissance = $_POST['date_naissance'];
        $identification = $_POST['identification'];
        $idannee = $_POST['annee'];
        $idclasse = $_POST['classe'];

        $eleve = new EleveModel();

        if ($eleve->modifier($id, $nom, $prenom, $telephone, $dateNaissance, $identification, $idannee, $idclasse)) {
            echo "Modification effectuée avec succès.";
            header('Location: /eleve'); // Rediriger vers la page des élèves après la modification
            exit();
        } else {
            echo "Une erreur s'est produite lors de la modification.";
        }
    }
}


   

public function ajouterEleve()
{
    // ...

    // Récupérer les niveaux à partir du modèle
    $eleveModel = new EleveModel();
    $niveaux = $eleveModel->getNiveaux();

    // Passer les niveaux à la vue
    $data['niveaux'] = $niveaux;

    // Inclure et instancier la classe View
    require_once '../Views/View.php';
    $view = new View('views');

    // Charger la vue correspondante avec les données
    $view->render('ajouter_eleve', $data);

    // ...
}
// ...
}



