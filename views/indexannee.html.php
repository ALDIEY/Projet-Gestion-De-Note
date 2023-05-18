<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tableau des Années Scolaires</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<?php include 'indexmenu.html.php'; ?>
    <div class="container">
        <h1>Les Années Scolaires</h1>
        <button id="btnAjouter" class="btn btn-outline-primary btn-sm">Ajouter</button>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Année Scolaire</th>
                    <th>Classe</th>
                    <th>Niveau</th>
                    <th>Nombre d'Élèves</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2021-2022</td>
                    <td>Classe A</td>
                    <td>CP</td>
                    <td>25</td>
                    <td>
                        <a href="#" class="text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2021-2022</td>
                    <td>Classe B</td>
                    <td>CE1</td>
                    <td>28</td>
                    <td>
                        <a href="#" class="text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2021-2022</td>
                    <td>Classe C</td>
                    <td>CE2</td>
                    <td>30</td>
                    <td>
                        <a href="#" class="text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2021-2022</td>
                    <td>Classe D</td>
                    <td>CM1</td>
                    <td>27</td>
                    <td>
                        <a href="#" class="text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2021-2022</td>
                    <td>Classe E</td>
                    <td>CM2</td>
                    <td>29</td>
                    <td>
                        <a href="#" class="text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

