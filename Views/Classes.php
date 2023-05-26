<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des classes</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="menu-container">
  <!-- Inclure le contenu du fichier "menu.html" -->
  <?php include 'menu.php'; ?>
</div>
  <div class="container py-4 bg-dark text-white">
    
    <div class="card ">
      <div class="card-header bg-dark text-white">
        <h2 class="card-title">Liste des classes</h2>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-end mb-3">
          <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Ajouter une classe</button>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
             
              <th>nom</th>
              
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $key => $classe): ?>
            <tr class="<?php echo ($key % 2 == 0) ? 'table-dark' : 'table-light'; ?>">
              <td><?php echo $classe['nom']; ?></td>
              <td>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo $anee['id']; ?>">
                  <i class="fas fa-trash-alt"></i>
                </button>
                
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
            <!-- Modal ajouter -->
              <div class="modal fade" id="addModal" tabindex="-1" *
              role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Ajouter une classe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action=""  method="POST">
                      <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                      </div>
                      <div class="form-group">
                        <label for="niveau">classe :</label>
                        <input type="text" class="form-control" id="niveau" name="niveau">
                      </div>
                      <div class="form-group">
                        <label for="cycle">niveau :</label>
                        <input type="text" class="form-control" id="cycle" name="cycle">
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
            
          </tbody>
        </table>
      </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
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
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom">
              </div>
              <div class="form-group">
                <label for="niveau">Niveau :</label>
                <input type="text" class="form-control" id="niveau" name="niveau">
              </div>
              <div class="form-group">
                <label for="cycle">Type de cycle :</label>
                <input type="text" class="form-control" id="cycle" name="cycle">
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
