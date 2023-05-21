

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des élèves</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!-- Inclure le menu -->
<div class="menu-container">
  <!-- Inclure le contenu du fichier "menu.html" -->
  <?php include 'menu.php'; ?>
</div>

  <div class="container py-4">
    <!--<h1 class="text-center mb-4">Gestion des élèves</h1>-->
    <div class="card">
      <div class="card-header bg-dark text-white">
        <h2 class="card-title">Liste des élèves</h2>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-end mb-3">
          <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Ajouter un élève</button>
        </div>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>id</th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Téléphone</th>
              <th>Date de naissance</th>
              <th>Identificateur</th>
              <th>id_classe</th>
              <th>id_annee</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $eleve): ?>
            <tr>
              <td><?php echo $eleve["id"]; ?></td>
              <td><?php echo $eleve["nom"]; ?></td>
              <td><?php echo $eleve["prenom"]; ?></td>
              <td><?php echo $eleve["telephone"]; ?></td>
              <td><?php echo $eleve["date_naissance"]; ?></td>
              <td><?php echo $eleve["identification"]; ?></td>
              <td><?php echo $eleve["id_classe"]; ?></td>
              <td><?php echo $eleve["id_annee"]; ?></td>
              <td>
             

                <a href="#" class="text-primary" data-toggle="tooltip"
                data-placement="top" title="Modifier"><i class="fas fa-edit"></i></a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
 <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
    aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="addModalLabel">Ajouter un élève</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="POST" action="/addEleve">
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
          <input type="tel" class="form-control" id="telephone" name="telephone" required>
        </div>
        <div class="form-group">
          <label for="date_naissance">Date de naissance :</label>
          <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
        </div>
        <div class="form-group">
          <label for="classe">Identificateur :</label>
          <input type="text" class="form-control" id="identification" name="identification">
        </div>
        <div class="form-group">
          <label for="annee">Année scolaire :</label>
          <input type="text" class="form-control" id="annee" name="annee" required>
        </div>
        <div class="form-group">
          <label for="identificateur">Classe :</label>
          <input type="text" class="form-control" id="classe" name="classe" required>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        </div>
      </form>
    </div>
  </div>
</div>

  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
