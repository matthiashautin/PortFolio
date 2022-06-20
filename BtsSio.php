<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/btssio.css">
    <link rel="shortcut icon" href="./gd/mh.php">
    <?php
        require_once "./include/icons.php";
        require_once "./include/fonts.php";
        require_once "./include/link.php";
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
            <p1><input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas">&#xf039;</i>
                </label>
            <ul>
                <li style="--clr:#e4202d">
                    <a id="lien" href="home.php" data-text="&nbsp;Accueil">&nbsp;Accueil</a>
                </li>
                <li style="--clr:#e4202d">
                    <a id="lien" href="Profil.php" data-text="&nbsp;Profil">&nbsp;Profil</a>
                </li>
                <li style="--clr:#b4030f">
                    <a id="lien" href="BtsSio.php" data-text="&nbsp;BtsSio">&nbsp;BtsSio</a>
                </li>
                <li style="--clr:#e4202d">
                    <a id="lien" href="Techno.php" data-text="&nbsp;Veille&nbsp;Techno">&nbsp;Veille&nbsp;Techno</a>
                </li>
                <li style="--clr:#e4202d">
                    <a class="projeth" id="lien" href="Projet.php" data-text="&nbsp;Projet">&nbsp;Projet<span class="material-symbols-outlined">expand_more</span></a>
                        <ul1 id="projet">
                            <li1><a href="Projet.php" data-text="&nbsp;Réalisé en cours (TP)">&nbsp;Réalisé en cours (TP)</a></li1>
                            <li1><a href="Projet.php" data-text="&nbsp;Réalisé en stage">&nbsp;Réalisé en stage</a></li1>
                        </ul1>
                    </li>
                <li style="--clr:#e4202d">
                    <a id="lien" class="contact" href="Contact.php" data-text="&nbsp;Contact">&nbsp;Contact</a>
                </li>
            </ul>
        </p1>
    </top>
        <div class="menu">Bts sio</div>
    </body>
</html>