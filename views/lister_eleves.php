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

// Récupérer la liste des élèves depuis la base de données
$requete = "SELECT * FROM eleves";
$resultat = mysqli_query($connexion, $requete);

// Afficher la liste des élèves
if (mysqli_num_rows($resultat) > 0) {
    while ($row = mysqli_fetch_assoc($resultat)) {
        echo "<tr>";
        echo "<th scope='row'>" . $row['id'] . "</th>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['prenom'] . "</td>";
        echo "<td>" . $row['telephone'] . "</td>";
        echo "<td>" . $row['date_naissance'] . "</td>";
        echo "<td>" . $row['niveau'] . "</td>";
        echo "<td>" . $row['classe'] . "</td>";
        echo "<td>" . $row['identificateur'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan=''>Aucun élève trouvé</td></tr>";
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>
