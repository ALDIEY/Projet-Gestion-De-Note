<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des classes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <!-- Inclure le menu -->
  <div class="menu-container">
    <!-- Inclure le contenu du fichier "menu.html" -->
    <?php include 'menu.php'; ?>
  </div>
  <div class="container py-4 bg-dark text-white">
    <div class="card">
      <div class="card-header bg-dark text-white">
        <h2 class="card-title">Liste des années</h2>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-end mb-3">
          <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Ajouter une année</button>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Détail</th>
              <th>Annee Scolaire</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $annee): ?>
            <tr>
              <td>
                <a href="#" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" title="Détails">
                  <i class="fas fa-plus-circle"></i>
                </a>
              </td>
              <td><?php echo $annee["annee_scolaire"]; ?></td>
              <td>
                <button type="button" class="btn btn-danger" data-toggle="modal"
                 data-target="#deleteModal<?php echo $annee['id_annee']; ?>">
                  <i class="fas fa-trash-alt"></i>
                </button>
                <button type="button" class="btn btn-primary btn-sm btn-edit"
                 data-toggle="modal" data-target="#editModal<?php echo $annee['id_annee']; ?>">
                  <i class="fas fa-edit"></i>
                </button>
              </td>
            </tr>
            <!-- Modal ajouter -->
            <div class="modal fade" id="addModal" tabindex="-1"
            role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Ajouter une année</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="POST">
                      <div class="form-group">
                        <label for="annee">Annee_scolaire :</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="format xxxx-yyyy">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-primary" value="Enregistrer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
 <!-- modale de suppression -->
    <?php foreach($data as $annee): ?>
  <div class="modal fade" id="deleteModal<?php echo $annee['id_annee']; ?>"
  tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Supprimer un élève</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>vouler vous vraiment supprimer cette annee ?</p>
      </div>
      <div class="modal-footer">
        <form method="POST" action="/SupAnnee">
          <input type="hidden" name="id_annee" value="<?php echo $annee['id_annee']; ?>" >
          <input type="submit" name="supprimer" class="btn btn-danger" value="Supprimer" >
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Modifier une année</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="id">ID :</label>
                <input type="text" class="form-control" id="id" name="id">
              </div>
              <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom">
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
