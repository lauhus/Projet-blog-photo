<?php
/*session_start();
if{
    session_start($_SESSION['id']==NULL);
    echo 'Veuillez vous connectez avant de profiter de la collection'; }*/

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
        <a class="navbar-brand" href="Index.html">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="Views/presentation.html"> A propos de moi <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Views/achat_ctrl.php"> Mes Photographies</a>
            </li>
            </ul>
            </form>
        </div>
    </nav>
    </div>
    <div class="jumbotron">
        <h1 class="display-3"> <?php echo 'Merci votre est commande validée.';?> </h1>
    <!--METTRE LE BOUTON RETOUR À L'ACCUEIL<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>--> 
    <button type="button" class="btn btn-outline-secondary"><a href="../Index.html">Retour à l'accueil </a> </button>
    </div>
    <footer > 
        <div clas="col">
        <p> <h6>Droit d'auteur </h6> 
            <br>Tous les textes et photos présents sur le site <a href="../Index.html">www.jean-michelphotographie.fr</a><br>, sauf
            indications contraire, sont la propriété exclusive de l'auteur . Soumis aux lois<br> sur le Droit d'auteur, protégés par le code 
            de la proprité Intelectuelle (Art. L. 122-4).<br> Tous droits réservés. ©2020 </p></div>
            <hr class="my-4">
            <div class="col">
        <p> <h6>Me contacter :</h6> <br> jmphotographie@contact.fr <br> 33 (0) 111 111 111<br> 1 rue de la perfection 57000 Metz </p>
        </div>
        <hr class="my-4">
        <div class="col"><p> <h6>Pensez à vous identifier</h6><a href="../Views/formulaire.html" >       Vous connecter ou vous inscrire</a> </p></div>
        </div>
        <hr class="my-4">
    </footer>
</body>
</html>