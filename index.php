<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marvelous</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a class="menu-label" href="#accueil" onclick="closeNav()">ACCUEIL</a><br>
        <a class="menu-label" href="#films" onclick="closeNav()">NOS FILMS</a><br>
        <a class="menu-label" href="#prochainement" onclick="closeNav()">PROCHAINEMENT</a>
    </div>

    <nav id="accueil">
        <div class="navbar-brand">
            <div class="navbar-start">
                <span class="navbar-item" style="font-size:25px; cursor:pointer; margin:10px;" onclick="openNav()">&#9776;</span>
                <a class="navbar-item" href="#"><img src="images/logo.jpg" width="112" height="28"></a>
            </div>
        </div>
    </nav>

    <div id="corps">
    <div class="avengers"></div>

    <div class="sections" id="films">NOS FILMS</div>
    <?php
    $json = file_get_contents("films.json");
    $parsed_json = json_decode($json, true);
    foreach($parsed_json as $v): ?>
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="<?php echo $v['Image']; ?>" class="MoviePic">
                </figure>
                <div class="middle">
                    <div class="text"><?php echo $v['Description']; ?></div>
                </div>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="titre"><?php echo $v['Titre'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>

    <div class="sections" id="prochainement">PROCHAINEMENT</div>

    <div class="antman"></div><br>
    <div class="captainMarvel"></div><br>
    <div class="avengers4"></div>
</div>
</body>

<footer>
    <br><p class="foot">Rejoignez la communauté !</p><br>
    <img src="images/icons/fb.png" width="40"> <img src="images/icons/twitter.png" width="40"> <img src="images/icons/instagram.png" width="40"> <img src="images/icons/pinterest.png" width="40"> <img src="images/icons/youtube.png" width="40"> <img src="images/icons/google.png" width="40">
    <br><br><p>© Chris Chevalier, 2018 - Tous droits réservés</p><br>
</footer>

</html>
