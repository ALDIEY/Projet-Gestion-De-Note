
<!DOCTYPE html>
<html>
<head>
    <title>BREUKH'SCOOL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">BREUKH'SCOOL</h2>
                <form>
                    <div class="form-group">
                        
                        <input type="text" class="form-control" id="username" placeholder="Nom d'utilisateur">
                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="login">Se connecter</button>

                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
if(isset($_GET['login'])){
    
    // Vérifications de connexion ici
    
    // Redirection vers l'interface si les identifiants sont valides
    
        header("Location:views/indexmenu.html.php");
       // exit();
   
}
?>

