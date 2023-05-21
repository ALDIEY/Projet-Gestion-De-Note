

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
  <div class="container py-4">
    <h1 class="text-center mb-4">Gestion des niveau</h1>
    <div class="card">
      <div class="card-header">
        <h2 class="card-title">Liste des niveau</h2>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-end mb-3">
          <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Ajouter une classe</button>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>detail</th>
              <th>id</th>
              <th>nom</th>
            
            </tr>
          </thead>
          <tbody>
           <?php foreach($data as $niveau): ?>
            <tr>
              <td>
              <a href="#" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" title="Détails">
      <i class="fas fa-plus-circle"></i>
              </td>
            <td><?php echo $niveau["id_niveau"]; ?></td>
            <td><?php echo $niveau["nom"]; ?></td>
           
        
            <td>
            <a href="#" class="text-danger mr-2" data-toggle="tooltip"
                       data-placement="top" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="text-primary" data-toggle="tooltip"
                        data-placement="top" title="Modifier"><i class="fas fa-edit"></i></a>
            </td>
            </tr>
            <!-- Modal ajouter -->
              <div class="modal fade" id="addModal" tabindex="-1" *
              role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Ajouter un niveau</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="/addNiveau"  method="POST">
                      <div class="form-group">
                        <label for="niveau">nom:</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                      </div>
                      
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Enregistrer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
     aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Supprimer une classe</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Êtes-vous sûr de vouloir supprimer cette classe ?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger">Supprimer</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
    aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Modifier une classe</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="nom">id :</label>
                <input type="text" class="form-control" id="nom" name="nom">
              </div>
              <div class="form-group">
                <label for="niveau">nom :</label>
                <input type="text" class="form-control" id="niveau" name="niveau">
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