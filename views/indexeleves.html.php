<?php
//header("Location:indexmenu.html.php");
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'indexmenu.html.php'; ?>

<div class="row justify-content-center ">
  <div class="col-md-4"></div>
<div class="form-group">
            <label for="sort-select"></label>
            <select id="sort-select" class="form-control small-select" style="width: 150px;">
                <option value="name">trier par</option>
                <option value="age">nom</option>
            </select>
            </div>
        </div>
        </div>
  <div class="container">
    <h1>Liste  des élèves</h1>
    
    <button id="btnAjouter" class="btn btn-outline-primary btn-sm">Ajouter</button>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">numero</th>
          <th scope="col">Niveau</th>
          <th scope="col">Classe</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>ali</td>
          <td>ba</td>
          <td>20</td>
          <td>6eme</td>
          <td> B2</td>
          <td>
                        <a href="#" class="text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fas fa-edit"></i></a>
         </td>

        </tr>
        <tr>
          <th scope="row">2</th>
          <td>lima</td>
          <td>ba</td>
          <td>16</td>
          <td>CM2</td>
          <td>A</td>
          <td>
                        <a href="#" class="text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fas fa-edit"></i></a>
                    </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>IBOU</td>
          <td>Daffa</td>
          <td>39</td>
          <td>CI</td>
          <td>A2</td>
          <td>
                        <a href="#" class="text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fas fa-edit"></i></a>
          </td>
        </tr>
        <!-- Ajoutez plus de lignes ici si nécessaire -->
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>