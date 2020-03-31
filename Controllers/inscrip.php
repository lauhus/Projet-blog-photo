<?php

//connexion au serveur

//$connexion = new PDO('mysql:host=localhost;dbname=projet_photos;charset=utf8','msb','stagiaire');
$connexion = new PDO('mysql:host=localhost;dbname=projet_photos;charset=utf8','lauhu','stagiaire ');
// $connexion = new PDO('mysql:host=localhost;dbname=

//Création de la BDD

$nom=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
$email=htmlspecialchars($_POST['email']);
$mdp=htmlspecialchars($_POST['mdp']);
$id_money=htmlspecialchars($_POST)['id_money'];

//Requête de création

$connexion->exec("INSERT INTO user(nom, prenom, email, mdp, id_money)VALUES('$nom','$prenom','$email','$mdp','$id_money')");
/*if ($select->rowcount() > 0){
    session_start();
    $_SESSION['nom']=$reponse['nom'];
    $_SESSION['prenom']=$reponse['prenom'];
    $_SESSION['email']=$reponse['email'];
    $_SESSION['mdp']=$reponse['mdp'];
    $_SESSION['id_money']=$reponse['id_money'];
}*/

$reponse=$connexion->fetch();

print_r($reponse);
?>
