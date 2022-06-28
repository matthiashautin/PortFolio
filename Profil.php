<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/profil.css">
    <link rel="stylesheet" href="./style/wave.css">
    <link rel="shortcut icon" href="./gd/mh.php">
    <link rel="stylesheet" href="./style/loader.css">
    <?php
        require_once "./include/fonts.php";
        require_once "./include/icons.php";
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
                    <li style="--clr:#b4030f">
                        <a id="lien" href="Profil.php" data-text="&nbsp;Profil">&nbsp;Profil</a>
                    </li>
                    <li style="--clr:#e4202d">
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
            <div class="menu">Profil</div>
            <main>
                <div class="titre">- a propos de moi</div>
                    <p2>Je m'appelle Matthias Hautin, je suis âgé de 18 ans. Je suis étudiant à Noisy-Champs au lycée René Descartes;
                        actuellement en première année de BTS « SIO spécialité SLAM »
                        Services Informatiques aux Organisations spécialité en Solutions logicielles et Applications Métier (SLAM).
                        Je suis intéressé par l'informatique, le développement et les nouvelles techniques depuis quelques années. C'est donc 
                        pour cela que naturellement je me suis tourné vers des études d'informatique, de développement.
                        J'ai effectué mes trois années d’études en BAC PRO « Système Informatique et Numérique ».
                    </p2>
                <div class="titre">- Experiences Professionnelles</div>
                    <p2>
                        J'ai pu réaliser mes diverses périodes de stage dans différentes organisations disposant d’un service informatique; 
                        durant mes années de BAC PRO ainsi que mes années de BTS. Grâce à ses organismes j'ai pu acquérir de nouvelles 
                        compétences dans plusieurs domaines. Pendant mes périodes de stage j'ai eu la chance de travailler auprès d'informaticiens; 
                        Technicien informatique, administrateurs réseaux, chefs de projets. J'ai réalisé mes stages à la Mairie de Noisy-Le-Grand; 
                        à la direction des douanes et droits indirects à Montreuil.
                    </p2>
                <div class="titre">- Projets professionnels, etudes</div>   
                    <p2>
                        Mon projet professionnel actuellement est de finir mes études de BTS. Puis je mettrai tout moyen à ma disposition
                        pour une poursuite d'études. Soit intégrer une Licence ou Licence pro en informatique dans le domaine de la programmation.
                        Et pour une finalité d'études je vise un Master.
                    </p2>
                <div class="titre">- Curriculum Vitae</div> 
                    <div class="pdf">
                        <a class="btn-black" href="pdf/CV.pdf" target="_blank"><span class="material-symbols-outlined">visibility</span>&nbsp;Consulter CV</a>
                        <a href="pdf/CV.pdf" class="btn-black" download="Matthias Hautin - Curriculum Vitae.pdf"><span class="material-symbols-outlined">download</span>Télécharger CV</a>
                    </div>
            </main>
        <section>
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
        </section>
        <script src="script/app.js"></script>
    </body>
</html>