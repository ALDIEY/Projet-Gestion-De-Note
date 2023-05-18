<?php
// Données factices pour la démonstration
$classe = 'CP A';
$eleves = [
    ['id' => 1, 'nom' => 'John Doe', 'note' => 80],
    ['id' => 2, 'nom' => 'Jane Smith', 'note' => 90],
    ['id' => 3, 'nom' => 'Alice Johnson', 'note' => 85],
    ['id' => 4, 'nom' => 'Bob Williams', 'note' => 70],
];

// Effectif de la classe
$effectif = count($eleves);

// Calcul de la moyenne de la classe
$totalNotes = 0;
foreach ($eleves as $eleve) {
    $totalNotes += $eleve['note'];
}
$moyenne = $effectif > 0 ? $totalNotes / $effectif : 0;

// Mettre à jour les notes des élèves

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'indexmenu.html.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des élèves</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Liste des élèves - <?php echo $classe; ?></h1>
        <h3 class="mt-4">Effectif de la classe: <?php echo $effectif; ?></h3>
        <h3 class="mt-4">Moyenne de la classe: <?php echo $moyenne; ?></h3>
        <button id="btnAjouter" class="btn btn-outline-primary btn-sm">Ajouter</button>


        <table class="table mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Note</th>
                    <th>Mettre à jour</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eleves as $eleve) : ?>
                    <tr>
                        <td><?php echo $eleve['id']; ?></td>
                        <td><?php echo $eleve['nom']; ?></td>
                        <td><?php echo $eleve['note']; ?></td>
                        <td>
                            <form method="POST">
                                <div class="input-group">
                                    <input type="number" name="note_<?php echo $eleve['id']; ?>" class="form-control" value="<?php echo $eleve['note']; ?>">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
