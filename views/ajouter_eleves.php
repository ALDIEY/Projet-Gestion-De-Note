<?php
// Connexion à la base de données

$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "Alkir@320";
$nomBaseDeDonnees = "GESTION_DE_NOTE";

$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

if (!$connexion) {
    die("Connexion échouée : " . mysqli_connect_error());
}

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$date_naissance = $_POST['dateNaissance'];
$niveau = $_POST['niveau'];
$classe = $_POST['classe'];
$identificateur = $_POST['identificateur'];


// Préparer la requête d'insertion
$requete = "INSERT INTO eleves (nom, prenom, telephone, date_naissance,niveau,classe,identificateur) 
VALUES ('$nom', '$prenom', '$telephone', '$dateNaissance','$niveau', '$classe', '$classe','$identificateuridentificatuer')";

// Exécuter la requête d'insertion
if (mysqli_query($connexion, $requete)) {
    // Récupérer l'ID de l'élève inséré
    $idEleve = mysqli_insert_id($connexion);

    // Récupérer les détails de l'élève inséré
    $requeteDetails = "SELECT * FROM eleves WHERE id = $idEleve";
    $resultatDetails = mysqli_query($connexion, $requeteDetails);

    if ($row = mysqli_fetch_assoc($resultatDetails)) {
        // Convertir la date de naissance au format souhaité (si nécessaire)
        // $dateNaissance = date('d/m/Y', strtotime($row['date_naissance']));

        // Construire la réponse JSON contenant les détails de l'élève
        $reponse = json_encode($row);
        echo $reponse;
    }
} else {
    echo "Erreur lors de l'ajout de l'élève : " . mysqli_error($connexion);
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
