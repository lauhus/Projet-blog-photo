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
    <header>    
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="../index">Accueil</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="presentation.html"> A propos de moi <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="achat.php"> Mes Photographies</a>
                </li>
                </ul>
            </div>
        </nav>
        </div>
    </header>
        <form>
        <fieldset>
        <legend><font style = "vertical-align: inherit;"><font style = "vertical-align: inherit;"> Nouvelle collection : A WORLD OF FACES  </font> </font> </legend>
        <fieldset class = "form-group">
            <legend><font style = "vertical-align: inherit;"><font style = "vertical-align: inherit;"> A World of faces #1 </font> </font> </legend>
        <img 
        src="../html/Projet-blog-photo/Photo/image.jpg" alt="photo" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Afficher explication ou description + prix 
            </font> </label>
            </div>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #2 </font> </font> </legend>
        <img 
        src="../html/Projet-blog-photo/Photo/image.jpg" alt="photo" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Afficher explication ou description + prix 
            </font></{ </label>
            </div>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #3 </font> </font> </legend>
        <img 
        src="../html/Projet-blog-photo/Photo/image.jpg" alt="photo" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Afficher explication ou description + prix 
            </font></{ </label>
            </div>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #4 </font> </font> </legend>
        <img 
        src="../html/Projet-blog-photo/Photo/image.jpg" alt="photo" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Afficher explication ou description + prix 
            </font></{ </label>
            </div>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #5 </font> </font> </legend>
        <img 
        src="../html/Projet-blog-photo/Photo/image.jpg" alt="photo" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Afficher explication ou description + prix 
            </font></{ </label>
            </div>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #6 </font> </font> </legend>
        <img 
        src="../html/Projet-blog-photo/Photo/image.jpg" alt="photo" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Afficher explication ou description + prix 
            </font></{ </label>
            </div>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #7 </font> </font> </legend>
        <img 
        src="../html/Projet-blog-photo/Photo/image.jpg" alt="photo" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Afficher explication ou description + prix 
            </font></{ </label>
            </div>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #8 </font> </font> </legend>
        <img 
        src="../html/Projet-blog-photo/Photo/image.jpg" alt="photo" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox"><font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Afficher explication ou description + prix 
            </font></{ </label>
            </div>
            <legend> <font style = "vertical-align: inherit;"><font style = "vertical-align: inherit;"> A World of faces #7 </font> </font> </legend>
        <img 
        src="../html/Projet-blog-photo/Photo/image.jpg" alt="photo" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox"><font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Afficher explication ou description + prix 
            </font></{ </label>
            </div>
            <legend> <font style = "vertical-align: inherit;"><font style = "vertical-align: inherit;"> A World of faces #8 </font> </font> </legend>
        <img 
        src="../html/Projet-blog-photo/Photo/image.jpg" alt="photo" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox"><font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Afficher explication ou description + prix 
            </font></{ </label>
            </div>
            <legend> <font style = "vertical-align: inherit;"><font style = "vertical-align: inherit;"> A World of faces #9 </font> </font> </legend>
        <img 
        src="../html/Projet-blog-photo/Photo/image.jpg" alt="photo" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox"><font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Afficher explication ou description + prix 
            </font></{ </label>
            </div>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #10 </font> </font> </legend>
        <img 
        src="../html/Projet-blog-photo/Photo/image.jpg" alt="photo" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Afficher explication ou description + prix 
            </font></{ </label>
            </div>
        </fieldset>
        <button type = "submit" class = "btn btn-primary"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> Valider la commande </font> </ font > </button>
    </form>  
</body>
</html>
