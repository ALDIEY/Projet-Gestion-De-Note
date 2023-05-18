<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tableau des Classes</title>
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
<style>
        .class-list {
            padding: 0;
        }

        .class-item {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .class-item:last-child {
            border-bottom: none;
        }
    </style>
<div class="container">
        <h1>Liste des classes d'un niveau donné</h1>
        
        <ul class="list-group class-list">
            <li class="list-group-item class-item">
                <h5 class="mb-1">CI</h5>


            </li>
        </ul>
    </div>
</body>

</html>