<?php
session_start();
if(empty($_SESSION['prenom']))
    {
        header('Location:connnex.php');
        exit();
    }
    //echo "Bienvenu $_SESSION['prenom'], vous avez accès au catalogue complet ainsi qu'à l'achat des photographies."
    //}else{ // renvoyer vers inscription ou connexion*/

// NAV BAR
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Jean-Michel Photographie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/sketchy/bootstrap.min.css"/>
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="../">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../"> A propos de moi <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../"> Mes Photographies</a>
            </li>
            </ul>
        </div>
    </nav>
    </div>
</body>
</html>
