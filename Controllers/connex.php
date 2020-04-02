<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Jean-Michel Photographie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/sketchy/bootstrap.min.css"/>
</head>
<body>
            <!--Navbar-->
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="../Index.html">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../Views/presentation.html"> A propos de moi <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Views/achat_ctrl.php"> Mes Photographies</a>
            </li>
            </ul>
            </form>
        </div>
    </nav>
    </div>
            <!--Message de confirmation-->
    <div class="jumbotron">
        <h1 class="display-3"> <?php echo 'Identifiants érronés.';?> </h1>
    
    <button type="button" class="btn btn-outline-secondary"><a href="../Views/formulaire.html">Retour à l'identification </a> </button>
    </div>
            <!--Footer-->
    <footer > 
        <div clas="col">
        <p> <h6>droits d'auteur </h6> 
            <br>Tous les textes et photos présents sur le site <a href="../Index.html">www.jean-michelphotographie.fr</a><br>, sauf
            indications contraire, sont la propriété exclusive de l'auteur . Soumis aux lois<br> sur le droits d'auteur, protégés par le code 
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



<?php

session_start();

/**connexion au serveur de la base de données. @$connexion: il y en a une pour chaque gestionnaire**/
//$connexion = new PDO('mysql:host=localhost;dbname=projet_photos;charset=utf8','msb','stagiaire');
$connexion = new PDO('mysql:host=localhost;dbname=projet_photos;charset=utf8','lauhu','stagiaire ');


/**Connexion à la base de données via le formulaire, l'email sert d'ID*/

$email=htmlspecialchars($_POST['email']);
$mdp=htmlspecialchars($_POST['mdp']);



//Requête de récupération des données

$verif= $connexion->prepare('SELECT email,mdp FROM user WHERE email=? AND mdp=?');

$verif->bindParam(1, $email);
$verif->bindParam(2, $mdp);
$verif->execute();

$repverif=$verif->fetch();

    $_SESSION['email']=$repverif['email'];
    $_SESSION['mdp']=$repverif['mdp'];

//Verification de l'existence ou non de l'adresse email

if (($repverif[0]==$email)&&($repverif[1]==$mdp)) {
    header('Location:../Views/achat_ctrl.php');
}
else 
{ }
