<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/home.css">
    <link rel="stylesheet" href="./style/wave.css">
    <link rel="shortcut icon" href="./gd/mh.php">
    <link rel="stylesheet" href="./style/clock.css">
    <?php
        require_once "./include/icons.php";
        require_once "./include/fonts.php";
        require_once "./include/link.php";
    ?>
    <title>PortFolio</title>
</head>
    <body>
        <img class="backgroundimage" src="./images/backgroundimage.png">
        <top>
            <img id="fond" src="images/background1.jpg">
            <div class="profil">
                <img src="images/photo.jpg">
            </div>
                <p id="auteur">Matthias<br><span class="nom">Hautin</span></p>
                <p1><input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                        <img id="bar" src="./images/burger-bar.png">
                    </label>
                <ul>
                    <li style="--clr:#b4030f">
                        <a id="lien" href="home.php" data-text="&nbsp;Accueil">&nbsp;Accueil</a>
                    </li>
                    <li style="--clr:#e4202d">
                        <a id="lien" href="Profil.php" data-text="&nbsp;Profil">&nbsp;Profil</a>
                    </li>
                    <li style="--clr:#e4202d">
                        <a id="lien" href="BtsSio.php" data-text="&nbsp;BtsSio">&nbsp;BtsSio</a>
                    </li>
                    <li style="--clr:#e4202d">
                        <a id="lien" href="Techno.php" data-text="&nbsp;Veille&nbsp;Techno">&nbsp;Veille&nbsp;Techno</a>
                    </li>
                    <li style="--clr:#e4202d">
                        <a id="lien" href="Projet.php" data-text="&nbsp;Projet">&nbsp;Projet<span class="material-symbols-outlined">expand_more</span></a>
                            <ul1 id="projet">
                                <li1><a href="Projet.php#" data-text="&nbsp;Réalisé en cours (TP)">&nbsp;Réalisé en cours (TP)</a></li1>
                                <li1><a href="Projet.php#" data-text="&nbsp;Réalisé en stage">&nbsp;Réalisé en stage</a></li1>
                            </ul1>
                    </li>
                    <li style="--clr:#e4202d">
                        <a id="lien" class="contact" href="Contact.php" data-text="&nbsp;Contact">&nbsp;Contact</a>
                    </li>
                </ul>
            </p1>
        <div class="clock">
                <div class="needle hr" ></div>
                <div class="needle min"></div>
                <div class="needle sec"></div>
        </div>
    </top>
        <main>
            <div class="left">Bienvenue,<br> sur le PortFolio de<br><span class="gras">Matthias Hautin</span></div>
            <div class="center">Bts Sio Slam</div>
            <div class="right">
        </main>
            <div class="right">
                <a class="btn" href="Profil.php"><img class="flechedroite" src="./images/flechedroite.png">                
            </div>
                <div class="more">Voir Plus</div>
            </a>
        <script src="script/script.js"></script>  
    </body>
</html>