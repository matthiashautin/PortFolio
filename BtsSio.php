<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/btssio.css">
    <link rel="shortcut icon" href="./gd/mh.php">
    <link rel="stylesheet" href="./style/loader.css">
    <?php
        require_once "./include/icons.php";
        require_once "./include/fonts.php";
        require_once "./include/link.php";
    ?>
    <title>PortFolio</title>
</head>
    <body>
    <div class="loader">
        <span class="lettre">C</span>
        <span class="lettre">H</span>
        <span class="lettre">A</span>
        <span class="lettre">R</span>
        <span class="lettre">G</span>
        <span class="lettre">E</span>
        <span class="lettre">M</span>
        <span class="lettre">E</span>
        <span class="lettre">N</span>
        <span class="lettre">T</span>
    </div>
        <top>
        <img id="fond" src="images/background1.jpg">
            <div class="profil">
                <img src="images/photo.jpg">
            </div>
            <p id="auteur">Matthias<br><span class="nom">Hautin</span></p>
            <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <img id="bar" src="./images/burger-bar.png">
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
    </top>
        <div class="menu">Bts sio</div>
        <main>
            <div class="titre">- a propos du bts sio</div>
                <p2>
                    Le BTS SIO est un diplôme national en informatique de niveau bac+2. Il peut être préparé gratuitement en
                    deux ans dans quelque 130 lycées publics ou privés sous contrat présents sur tout le territoire français. 
                    Il est aussi proposé par des établissements privés sous contrat d'association avec l'état ou non.
                </p2>
                <img class="competences_bts" src="images/competences_bts_sio.png">
            <div class="titre">- Option A<br><class id="sous-titre">solutions d'infrastructure, systèmes et réseaux (SISR)</div>
                <p2>

                </p2>
            <div class="titre">- Option B<br><class id="sous-titre">Solutions logicielles et Applications Métier (SLAM)</div>
                <p2>

                </p2>
        </main>
        <script src="script/app.js"></script>
    </body>
</html>