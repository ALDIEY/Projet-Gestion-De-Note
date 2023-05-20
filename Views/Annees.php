<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des années scolaires</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

  <div class="container py-4">
    <h1 class="text-center mb-4">Gestion des années scolaires</h1>
    <div class="card">
      <div class="card-header">
        <h2 class="card-title">Liste des années scolaires</h2>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-end mb-3">
          <button class="btn btn-primary" data-toggle="modal"
           data-target="#addModal">Ajouter une année scolaire</button>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Debut Année scolaire</th>
              <th> Fin Année scolaire</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $annee): ?>
            <tr>
              <td><?php echo $annee['annee_debut']; ?></td>
              <td><?php echo $annee['annee_fin']; ?></td>
              <td>
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal">Modifier</button>
                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">Supprimer</button>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="modal fade" id="addModal" tabindex="-1"
    role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Ajouter une année scolaire</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="/addAnnee"> 
              <div class="form-group">
                <label for="annee">debut annee :</label>
                <input type="date" class="form-control" id="annee" name="debutannee">
              </div>
              <div class="form-group">
                <label for="annee">fin annee :</label>
                <input type="date" class="form-control" id="annee" name="finannee">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Enregistrer</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1"
    role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Supprimer une année scolaire</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Êtes-vous sûr de vouloir supprimer cette année scolaire ?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger">Supprimer</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1"
    role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Modifier une année scolaire</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="annee">Année scolaire :</label>
                <input type="text" class="form-control" id="annee" name="annee">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Enregistrer</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
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
