<?php

// Connexion au serveur

$pdo = new PDO('mysql:host=localhost;dbname=crud;charset=utf8','msb','stagiaire');

//Champs du formulaire

$pseudo = $_POST['pseudo'];
$mot_de_passe =$_POST['mot_de_passe'];
$u_description=$_POST['u_description'];
$id = $_POST['id'];

//Requête de récupération pour lecture

$pbdd = $pdo->prepare('SELECT * FROM user WHERE pseudo=?');
$pbdd->bindParam(1, $pseudo);

//Exécution

$pbdd->execute([$pseudo]);
$reponse=$pbdd->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>CRUD</title>
    <link rel="stylesheet" href="../crud.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header> 
        <!--Navbar-->
    <div class ="navbar">
    <div class="index"> <a href="../index.html"><h1>Mon CRUD</h1></a></div>
        <div class="create"> <a href="../Views/create.html">Créer mon compte</a></div>
        <div class="read"> <a href="../Views/read.html"><h3>Description</h3></a></div>
        <div class="update"> <a href="../Views/update.html">Modifications</a></div>
        <div class="delete"> <a href="../Views/delete.html">Disparaître</a></div>
    </div>

        <!--If pseudo absent ou description-->
    <div class="descriptif"> <a>
<?php
if ($reponse == NULL){
    echo "Cette personne n'est pas assez maléfique pour faire partie de l'Injustice League.";
}else{
    echo '<br>';
    echo "". $reponse[1].":";
    echo '<br>';
    echo '<br>';
    echo "". $reponse[3]."";
    echo '<br>';
    echo '<br>';
}
?>
    <a></div>
</body>
</html>


