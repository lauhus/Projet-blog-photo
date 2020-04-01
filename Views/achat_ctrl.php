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
        <a class="navbar-brand" href="../Index.html">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="presentation.html"> A propos de moi <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="achat_ctrl.php"> Mes Photographies</a>
            </li>
        </ul>
        </div>
    </nav>
    <br> <br> <br>

    <form class="formachat" action="../Controllers/achat_controllers.php" method="POST">
        <fieldset>
        <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"><h1> Nouvelle collection : A WORLD OF FACES  </h1></font> </font> </legend>
        <fieldset class = "form-group">
            <br> <br>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #1 </font> </font> </legend>
        <img 
        src="../photos/aworldoffaces1.jpg" alt="photo1" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox" name="ps1"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Photographie seule 150€   
            </font></{ </label>
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox"name="pd1"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Photographie avec droits 300€   
            </font></{ </label>
            </div>
            <br> <br>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #2 </font> </font> </legend>
        <img 
        src="../photos/aworldoffaces2.jpg" alt="photo2" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox" name="ps2"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Photographie seule 150€
            </font></{ </label>
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="pd2"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                    Photographie avec droits 300€   
                </font></{ </label>
            </div>
            <br> <br>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #3 </font> </font> </legend>
        <img 
        src="../photos/aworldoffaces3.jpg" alt="photo3" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox" name="ps3"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Photographie seule 150€
            </font></{ </label>
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="pd3"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                    Photographie avec droits 300€   
                </font></{ </label>
            </div>
            <br> <br>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #4 </font> </font> </legend>
        <img 
        src="../photos/aworldoffaces4.jpg" alt="photo4" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox" name="ps4"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Photographie seule 150€
            </font></{ </label>
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="pd4"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                    Photographie avec droits 300€   
                </font></{ </label>
            </div>
            <br> <br>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #5 </font> </font> </legend>
        <img 
        src="../photos/aworldoffaces5.jpg" alt="photo5" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox" name="ps5"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Photographie seule 150€ 
            </font></{ </label>
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="pd5"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                    Photographie avec droits 300€   
                </font></{ </label>
            </div>
            <br> <br>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #6 </font> </font> </legend>
        <img 
        src="../photos/aworldoffaces6.jpg" alt="photo6" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox" name="ps6"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Photographie seule 150€
            </font></{ </label>
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="pd6"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                    Photographie avec droits 300€   
                </font></{ </label>
            </div> 
            <br> <br>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #7 </font> </font> </legend>
        <img 
        src="../photos/aworldoffaces7.jpg" alt="photo7" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox" name="ps7"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Photographie seule 150€
            </font></{ </label>
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="pd7"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                    Photographie avec droits 300€   
                </font></{ </label>
            </div>
            <br> <br>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #8 </font> </font> </legend>
        <img 
        src="../photos/aworldoffaces8.jpg" alt="photo8" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox" name="ps8"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Photographie seule 150€
            </font></{ </label>
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="pd8"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                    Photographie avec droits 300€   
                </font></{ </label>
            </div>
            <br> <br>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #9 </font> </font> </legend>
        <img 
        src="../photos/aworldoffaces9.jpg" alt="photo9" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox" name="ps9"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Photographie seule 150€
            </font></{ </label>
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="pd9"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                    Photographie avec droits 300€   
                </font></{ </label>
            </div>
            <br> <br>
            <legend> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> A World of faces #10 </font> </font> </legend>
        <img 
        src="../photos/aworldoffaces10 (1).jpg" alt="photo1" />
            <div class = "form-check">
            <label class = "form-check-label">
                <input class = "form-check-input" type = "checkbox" name="ps10"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                Photographie seule 150€
            </font></{ </label>
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="pd10"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;" >
                    Photographie avec droits 300€   
                </font></{ </label>
            </div>
            <br> <br>
        </fieldset>
        <button type = "submit" class = "btn btn-primary"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> Valider la commande </font> </ font > </button>
        </fieldset>
        </form>  
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
        <div class="col"><p> <h6>Pensez à vous identifier</h6><a href="formulaire.html" >       Vous connecter ou vous inscrire</a> </p></div>
        </div>
        <hr class="my-4">
    </footer>
</body>
</html>