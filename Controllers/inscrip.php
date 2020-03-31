<?php
//var_dump($_POST);

//connexion au serveur
$connexion = new PDO('mysql:host=localhost;dbname=projet_photos;charset=utf8','msb','stagiaire');
//$connexion = new PDO('mysql:host=localhost;dbname=projet_photos;charset=utf8','lauhu','stagiaire ');

//Création de la BDD
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$mdp=$_POST['mdp'];
$id_money=$_POST['id_money'];

//Vérifie si l'adresse mail existe déjà
if($email ->exists($_POST['email'])){
    throw new Exception("Cet e-mail est déjà enregistré.");
}

//Requête de création
$select=$connexion->prepare("INSERT INTO user(nom, prenom, email, mdp, id_money)VALUES('$nom','$prenom','$email','$mdp','$id_money')");
$select->execute();
$response=$select->fetch();
//print_r($response);
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
