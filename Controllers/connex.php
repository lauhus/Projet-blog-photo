<?php

/**connexion au serveur de la base de données. @$connexion: il y en a une pour chaque gestionnaire**/
//$connexion = new PDO('mysql:host=localhost;dbname=projet_photos;charset=utf8','msb','stagiaire');
$connexion = new PDO('mysql:host=localhost;dbname=projet_photos;charset=utf8','lauhu','stagiaire ');


/**Connexion à la base de données via le formulaire, l'email sert d'ID*/
$nom=htmlspecialchars($_POST['nom']); 
$prenom=htmlspecialchars($_POST['prenom']);
$email=htmlspecialchars($_POST['email']);
$mdp=htmlspecialchars($_POST['mdp']);
$id_money=htmlspecialchars($_POST['id_money']);


//Requête de récupération des données

$select = $connexion->prepare('SELECT * FROM user WHERE email=? AND mdp=?');
$select->bindParam(1, $email);
$select->bindParam(2, $mdp);


//Exécution

$select->execute();
$reponse = $select->fetch();

print_r($reponse);
/**Réattribution des variables pour une ouverture de session et renvoie vers la page achat.html**/
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
