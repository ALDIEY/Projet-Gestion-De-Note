<?php
$serveur = 'localhost';
$utilisateur = 'root';
$mot_de_passe = 'Alkir@320';
$base_de_donnees = 'GESTION_DE_NOTE';

$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

if (!$connexion) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}

// Vérifier si le formulaire d'ajout d'élève a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter_eleve'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $date_naissance = $_POST['date_naissance'];
    $niveau = $_POST['niveau'];
    $classe = $_POST['classe'];
    $identificateur = $_POST['identificateur'];
    $requete = "INSERT INTO eleves (nom, prenom, telephone, date_naissance, niveau, classe, identificateur) VALUES ('$nom', '$prenom', '$telephone', '$date_naissance', '$niveau', '$classe', '$identificateur')";

    if (mysqli_query($connexion, $requete)) {
        echo "Élève ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout de l'élève : " . mysqli_error($connexion);
    }
}

// Récupérer la liste des élèves depuis la base de données
$requete = "SELECT * FROM eleves";
$resultat = mysqli_query($connexion, $requete);

if ($resultat) {
    $eleves = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
} else {
    echo "Erreur lors de la récupération de la liste des élèves : " . mysqli_error($connexion);
}

mysqli_close($connexion);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau des élèves</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<?php include 'indexmenu.html.php'; ?>

<div class="container">
    <h1>Liste des élèves</h1>
    
    <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#ajouterEleveModal">
        Ajouter un élève
    </button>

    <!-- Modal Ajouter un élève -->
    <div class="modal fade" id="ajouterEleveModal" tabindex="-1" role="dialog" aria-labelledby="ajouterEleveModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ajouterEleveModalLabel">Ajouter un élève</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulaire d'ajout d'un élève -->
                    <form id="ajouterEleveForm">
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom :</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>
                        <div class="form-group">
                            <label for="telephone">Téléphone :</label>
                            <input type="text" class="form-control" id="telephone" name="telephone" required>
                        </div>
                        <div class="form-group">
                            <label for="dateNaissance">Date de naissance :</label>
                            <input type="date" class="form-control" id="dateNaissance" name="dateNaissance">
                        </div>
                        <div class="form-group">
                            <label for="dateNaissance">niveau :</label>
                            <input type="tex" class="form-control" id="dateNaissance" name="dateNaissance">
                        </div>
                        <div class="form-group">
                            <label for="dateNaissance">classe :</label>
                            <input type="text" class="form-control" id="dateNaissance" name="dateNaissance">
                        </div>
                        <div class="form-group">
                            <label for="dateNaissance">identificatuer :</label>
                            <input type="number" class="form-control" id="dateNaissance" name="dateNaissance">
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">niveau</th>
                <th scope="col">classe</th>
                <th scope="col">identification</th>
            </tr>
        </thead>
        <tbody id="listeElevesBody">
            <!-- La liste des élèves sera chargée ici -->
            <?php
            require "lister_eleves.php"
            ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    // Charger la liste des élèves au chargement de la page
    chargerListeEleves();

    // Soumettre le formulaire d'ajout d'un élève via AJAX
    $("#ajouterEleveForm").submit(function(event) {
        event.preventDefault();

        // Récupérer les données du formulaire
        var formData = $(this).serialize();

        // Envoyer la requête AJAX d'ajout d'élève
$.ajax({
    url: "ajouter_eleve.php",
    type: "POST",
    data: formData,
    success: function(response) {
        if (response === "success") {
            // Afficher un message de succès
            alert("L'élève a été ajouté avec succès.");

            // Charger à nouveau la liste des élèves
            chargerListeEleves();

            // Réinitialiser le formulaire
            $("#ajouterEleveForm")[0].reset();

            // Fermer la fenêtre modale
            $("#ajouterEleveModal").modal("hide");
        }
        else {
            // Convertir la réponse JSON en objet JavaScript
            var nouvelEleve = JSON.parse(response);

            // Ajouter une nouvelle ligne avec les détails de l'élève ajouté
            var nouvelleLigne = "<tr>" +
                "<th scope='row'>" + nouvelEleve.id + "</th>" +
                "<td>" + nouvelEleve.nom + "</td>" +
                "<td>" + nouvelEleve.prenom + "</td>" +
                "<td>" + nouvelEleve.telephone + "</td>" +
                "<td>" + nouvelEleve.date_naissance + "</td>" +
                "</tr>";

            // Ajouter la nouvelle ligne à la table
            $("#listeElevesBody").append(nouvelleLigne);

            // Afficher un message de succès
            alert("L'élève a été ajouté avec succès.");

            // Réinitialiser le formulaire
            $("#ajouterEleveForm")[0].reset();

            // Fermer la fenêtre modale
            $("#ajouterEleveModal").modal("hide");
        }
    },
            error: function(xhr, status, error) {
                // Afficher un message d'erreur
                alert("Erreur lors de l'ajout de l'élève : " + error);
            }
        });
    });

    // Charger la liste des élèves via AJAX
    function chargerListeEleves() {
        $.ajax({
            url: "lister_eleves.php",
            type: "GET",
            success: function(response) {
                // Mettre à jour le contenu de la liste des élèves
                $("#listeElevesBody").html(response);
            },
            error: function(xhr, status, error) {
                // Afficher un message d'erreur
                alert("Erreur lors du chargement de la liste des élèves : " + error);
            }
        });
    }
});
</script>
</body>
</html>
