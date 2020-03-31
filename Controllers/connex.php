<?php

//connexion au serveur

//$connexion = new PDO('mysql:host=localhost;dbname=projet_photos;charset=utf8','msb','stagiaire');
$connexion = new PDO('mysql:host=localhost;dbname=projet_photos;charset=utf8','lauhu','stagiaire ');


//Connexion à la base de données

$email=$_POST['email'];
$mdp=$_POST['mdp'];


//Requête de récupération des données

$select = $connexion->prepare('SELECT * FROM user WHERE email=? AND mdp=?');
$select->bindParam(1, $email);
$select->bindParam(2, $mdp);


//Exécution

$select->execute();
$reponse = $select->fetch();
if ($select->rowcount() > 0){
    session_start();
    $_SESSION['nom']=$reponse['nom'];
    $_SESSION['prenom']=$reponse['prenom'];
    $_SESSION['email']=$reponse['email'];
    $_SESSION['mdp']=$reponse['mdp'];
    $_SESSION['id_money']=$reponse['id_money'];
    header('Location:achat.php');
}
?>
