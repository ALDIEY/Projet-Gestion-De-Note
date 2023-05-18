<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tableau des Niveaux de Classe</title>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des niveaux de l'année courante</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .level-list {
            padding: 0;
        }

        .level-item {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .level-item:last-child {
            border-bottom: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Liste des niveaux de l'année courante</h1>
        <ul class="list-group level-list">
            <li class="list-group-item level-item">
                <a class="mb-1" href="indexclasseCI.html.php" >CI</a>
                
            </li>
            <li class="list-group-item level-item">
                <a class="mb-1" href="indexclasseCP.html.php">CP</a>

            </li>
            <li class="list-group-item level-item">
                <h5 class="mb-1">C1</h5>

            </li>
            <li class="list-group-item level-item">
                <h5 class="mb-1">C2</h5>

            </li>
            <li class="list-group-item level-item">
                <h5 class="mb-1">CM1</h5>

            <li class="list-group-item level-item">
                <h5 class="mb-1">CM2</h5>

            </li>
            <li class="list-group-item level-item">
                <h5 class="mb-1">6eme</h5>

            </li>
            <li class="list-group-item level-item">
                <h5 class="mb-1">5eme</h5>

            </li>
            <li class="list-group-item level-item">
                <h5 class="mb-1">4eme</h5>

            </li>
            <li class="list-group-item level-item">
                <h5 class="mb-1">3eme</h5>
                
            </li>
            <li class="list-group-item level-item">
                <h5 class="mb-1">2nd</h5>
                
            </li>
        </ul>
    </div>
</body>

</html>

