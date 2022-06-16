<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/wave.css">
    <link rel="stylesheet" href="./style/acceuil.css">
    <link rel="shortcut icon" href="./gd/mh.php">
    <link rel="stylesheet" href="./style/clock.css">
    <?php
        require_once "./include/icons.php";
        require_once "./include/fonts.php";
    ?>
    <title>PortFolio</title>
</head>
    <body>
        <top>
            <img id="fond" src="images/background1.jpg">
            <div class="profil">
                <img src="images/photo.jpg">
            </div>
                <p id="auteur">Matthias<br><span class="nom">Hautin</span></p>
            <ul>
                <li style="--clr:#b85700">
                    <a id="lien" href="Acceuil.php" data-text="&nbsp;Accueil">&nbsp;Accueil</a>
                </li>
                <li style="--clr:#ffcb9c">
                    <a id="lien" href="Profil.php" data-text="&nbsp;Profil">&nbsp;Profil</a>
                </li>
                <li style="--clr:#ffcb9c">
                    <a id="lien" href="BtsSio.php" data-text="&nbsp;BtsSio">&nbsp;BtsSio</a>
                </li>
                <li style="--clr:#ffcb9c">
                    <a id="lien" href="Techno.php" data-text="&nbsp;Veille&nbsp;Techno">&nbsp;Veille&nbsp;Techno</a>
                </li>
                <li style="--clr:#ffcb9c">
                    <a id="lien" href="Projet.php" data-text="&nbsp;Projet">&nbsp;Projet<span class="material-symbols-outlined">expand_more</span></a>
                        <ul1 id="projet">
                            <li1><a href="Projet.php#" data-text="&nbsp;Réalisé en cours (TP)">&nbsp;Réalisé en cours (TP)</a></li1>
                            <li1><a href="Projet.php#" data-text="&nbsp;Réalisé en stage">&nbsp;Réalisé en stage</a></li1>
                        </ul1>
                </li>
                <li style="--clr:#ffcb9c">
                    <a id="lien" class="contact" href="Contact.php" data-text="&nbsp;Contact">&nbsp;Contact</a>
                </li>
            </ul>
        </top>
        <container>
            <main1>
                <div class="main1">Bienvenue,<br> sur le PortFolio de<br><span class="gras">Matthias Hautin</span></div>
            </main1>
            <div class="box">
                <h2></h2>
                <h3 data-text="Bts&nbsp;Sio&nbsp;Slam">Bts Sio Slam</h3>
            </div>
                <div class="clock">
                    <div class="needle hr" ></div>
                    <div class="needle min"></div>
                    <div class="needle sec"></div>
                </div> 
            </container>
            <div class="btn">
                <a class="btn" href="Profil.php">En savoir plus</a>
            </div>
                <script src="script/script.js"></script>
            <section>
                <div class="wave wave1"></div>
                <div class="wave wave2"></div>
                <div class="wave wave3"></div>
                <div class="wave wave4"></div>
            </section>
           
    </body>
</html>