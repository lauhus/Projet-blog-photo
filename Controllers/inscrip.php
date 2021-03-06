<?php
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

$verif= $connexion->prepare('SELECT email FROM user WHERE email=?');

$verif->bindParam(1, $email);
$verif->execute();

$repverif=$verif->fetch();

if ($repverif[0] == $email){
    header('Location:erreurinscrip.html');
    
    } else { 


/**Requête de création d'un compte avec INSERT INTO*/
$select=$connexion->prepare("INSERT INTO user(nom, prenom, email, mdp, id_money)VALUES('$nom','$prenom','$email','$mdp','$id_money')");
$select->execute();
    
    }

$reponse=$select->fetch();
/**Réattribution des variables pour une ouverture de session et renvoie vers la page achat_ctrl.html**/
if ($select->rowcount() > 0){
    session_start();
    $_SESSION['nom']=$reponse['nom'];
    $_SESSION['prenom']=$reponse['prenom'];
    $_SESSION['email']=$reponse['email'];
    $_SESSION['mdp']=$reponse['mdp'];
    $_SESSION['id_money']=$reponse['id_money'];
    header('Location:../Views/achat_ctrl.php');
}

?>