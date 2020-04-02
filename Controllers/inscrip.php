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
    <div class="jumbotron">
        <h1 class="display-3"> <?php echo 'E-mail déjà utlisé.';?> </h1>
    <!-- bouton pour retour --> 
    <button type="button" class="btn btn-outline-secondary"><a href="../Views/formulaire.html">Retour à l'identification </a> </button>
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




<?php

session_start();

//var_dump($_POST);

/**connexion au serveur de la base de données. @$connexion: il y en a une pour chaque gestionnaire**/
//$connexion = new PDO('mysql:host=localhost;dbname=projet_photos;charset=utf8','msb','stagiaire');
$connexion = new PDO('mysql:host=localhost;dbname=projet_photos;charset=utf8','lauhu','stagiaire ');

/**@$_POST[''] pour récupérer les donnnées provenant des champs du formulaire d'inscription:
 *  nom, prenom, email(qui servira d'identifiant pour les connexions), mot de passe et $_POST['id_money'] pour pouvoir ne pas avoir à les entrer à chaque nouvel achat.
Création de la BDD*/
$nom=htmlspecialchars($_POST['nom']); 
$prenom=htmlspecialchars($_POST['prenom']);
$email=htmlspecialchars($_POST['email']);
$mdp=htmlspecialchars($_POST['mdp']);
$id_money=htmlspecialchars($_POST['id_money']);

/**Vérifie si l'adresse mail existe déjà*/
$verif= $connexion->prepare('SELECT email FROM user WHERE email=?');

$verif->bindParam(1, $email);
$verif->execute();

$repverif=$verif->fetch();

if ($repverif[0] == $email){
    echo'';
    
    } else { 

/**Requête de création d'un compte avec INSERT INTO*/
$select=$connexion->prepare("INSERT INTO user(nom, prenom, email, mdp, id_money)VALUES('$nom','$prenom','$email','$mdp','$id_money')");
$select->execute();
    }

$response=$select->fetch();
/**Réattribution des variables pour une ouverture de session et renvoie vers la page achat.html**/
if ($select->rowcount() > 0){
    $_SESSION['nom']=$reponse['nom'];
    $_SESSION['prenom']=$reponse['prenom'];
    $_SESSION['email']=$reponse['email'];
    $_SESSION['mdp']=$reponse['mdp'];
    $_SESSION['id_money']=$reponse['id_money'];
    header('Location:../Views/achat_ctrl.php');
}

?>