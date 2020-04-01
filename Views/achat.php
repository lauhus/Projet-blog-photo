<?php

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
                <a class="nav-link" href="achat.html">Mes Photographies</a>
            </li>
        </ul>
        </div>
    </nav>
    <br><br><br>
    <div class="formachat">
        <form action="../Controllers/achat.php" method="POST">
            <fieldset>
            <legend><h1> Nouvelle collection : A WORLD OF FACES  </h1></legend>
            <fieldset class = "form-group">
                <br><br>
                <legend>  A World of faces #1  </legend>
                    <img src="../photos/aworldoffaces1.jpg" alt="photo1" />
                <div class = "form-check">
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="ps1"> 
                    Photographie seule 150€   
                </label>
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="pd1">
                    Photographie avec droits 300€   
                </label>
                </div>
                <br><br>
                <legend>  A World of faces #2  </legend>
                    <img src="../photos/aworldoffaces2.jpg" alt="photo2" />
                <div class = "form-check">
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="ps2">
                    Photographie seule 150€
                </label>
                    <label class = "form-check-label">
                        <input class = "form-check-input" type = "checkbox" name="pd2"> 
                        Photographie avec droits 300€   
                    </label>
                </div>
                <br> <br>
                <legend>  A World of faces #3  </legend>
                    <img src="../photos/aworldoffaces3.jpg" alt="photo3" />
                <div class = "form-check">
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="ps3"> 
                    Photographie seule 150€
                </label>
                    <label class = "form-check-label">
                        <input class = "form-check-input" type = "checkbox" name="pd3"> 
                        Photographie avec droits 300€   
                    </label>
                </div>
                <br> <br>
                <legend>  A World of faces #4  </legend>
                    <img src="../photos/aworldoffaces4.jpg" alt="photo4" />
                <div class = "form-check">
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="ps4"> 
                    Photographie seule 150€
                </label>
                    <label class = "form-check-label">
                        <input class = "form-check-input" type = "checkbox" name="pd4"> 
                        Photographie avec droits 300€   
                    </label>
                </div>
                <br><br>
                <legend>  A World of faces #5  </legend>
                <img src="../photos/aworldoffaces5.jpg" alt="photo5" />
                <div class = "form-check">
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="ps5"> 
                    Photographie seule 150€ 
                </label>
                    <label class = "form-check-label">
                        <input class = "form-check-input" type = "checkbox" name="pd5"> 
                        Photographie avec droits 300€   
                    </label>
                </div>
                <br><br>
                <legend>  A World of faces #6  </legend>
                    <img src="../photos/aworldoffaces6.jpg" alt="photo6" />
                <div class = "form-check">
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="ps6"> 
                    Photographie seule 150€
                    </label>
                    <label class = "form-check-label">
                        <input class = "form-check-input" type = "checkbox" name="pd6"> 
                        Photographie avec droits 300€   
                    </label>
                </div> 
                <br><br>
                <legend>  A World of faces #7  </legend>
                    <img src="../photos/aworldoffaces7.jpg" alt="photo7" />
                <div class = "form-check">
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="ps7"> 
                    Photographie seule 150€
                </label>
                    <label class = "form-check-label">
                        <input class = "form-check-input" type = "checkbox" name="pd7"> 
                        Photographie avec droits 300€   
                    </label>
                </div>
                <br><br>
                <legend>  A World of faces #8 </legend>
                    <img src="../photos/aworldoffaces8.jpg" alt="photo8" />
                <div class = "form-check">
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="ps8"> 
                    Photographie seule 150€
                </label>
                    <label class = "form-check-label">
                        <input class = "form-check-input" type = "checkbox" name="pd8">
                        Photographie avec droits 300€   
                    </label>
                </div>
                <br><br>
                <legend>  A World of faces #9  </legend>
                    <img src="../photos/aworldoffaces9.jpg" alt="photo9" />
                <div class = "form-check">
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="ps9"> 
                    Photographie seule 150€
                </label>
                    <label class = "form-check-label">
                        <input class = "form-check-input" type = "checkbox" name="pd9"> 
                    Photographie avec droits 300€
                    </label>
                </div>
                <br><br>
                <legend>  A World of faces #10  </legend>
                    <img src="../photos/aworldoffaces10 (1).jpg" alt="photo1" />
                <div class = "form-check">
                <label class = "form-check-label">
                    <input class = "form-check-input" type = "checkbox" name="ps10"> 
                    Photographie seule 150€
                </label>
                    <label class = "form-check-label">
                        <input class = "form-check-input" type = "checkbox" name="pd10"> 
                        Photographie avec droits 300€   
                    </label>
                </div>
                <br><br>
            </fieldset>
                <button type = "submit" class = "btn btn-primary">  Valider la commande  </button>
            </fieldset>
        </form>  
    </div>
    </div>
</body>
</html>