<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/profil.css">
    <link rel="stylesheet" href="./style/wave.css">
    <title>PortFolio</title>
</head>
    <?php
        require_once "./include/fonts.php";
        require_once "./include/icons.php";
    ?>
    <body>
        <top>
        <img id="fond" src="images/background1.jpg">
            <div class="profil">
                <img src="images/photo.jpg">
            </div>
        <p id="auteur">Matthias<br><span class="nom">Hautin</span></p>
            <ul>
                <li style="--clr:#ffcb9c">
                    <a id="lien" href="Acceuil.php" data-text="&nbsp;Accueil">&nbsp;Accueil</a>
                </li>
                <li style="--clr:#b85700">
                    <a id="lien" href="Profil.php" data-text="&nbsp;Profil">&nbsp;Profil</a>
                </li>
                <li style="--clr:#ffcb9c">
                    <a id="lien" href="BtsSio.php" data-text="&nbsp;BtsSio">&nbsp;BtsSio</a>
                </li>
                <li style="--clr:#ffcb9c">
                    <a id="lien" href="Techno.php" data-text="&nbsp;Veille&nbsp;Techno">&nbsp;Veille&nbsp;Techno</a>
                </li>
                <li style="--clr:#ffcb9c">
                <a class="projeth" id="lien" href="Projet.php" data-text="&nbsp;Projet">&nbsp;Projet<span class="material-symbols-outlined">expand_more</span></a>
                        <ul1 id="projet">
                            <li1><a href="Projet.php" data-text="&nbsp;Réalisé en cours (TP)">&nbsp;Réalisé en cours (TP)</a></li1>
                            <li1><a href="Projet.php" data-text="&nbsp;Réalisé en stage">&nbsp;Réalisé en stage</a></li1>
                        </ul1>
                </li>
                <li style="--clr:#ffcb9c">
                    <a id="lien" class="contact" href="Contact.php" data-text="&nbsp;Contact">&nbsp;Contact</a>
                </li>
            </ul>
        </top>
            <div class="menu">Profil</div>
            <main>
                <div class="titre">- a propos de moi</div>
                    <p1>Je m'appelle Matthias Hautin, je suis âgé de 18 ans. Je suis étudiant à Noisy-Champs au lycée René Descartes,
                        actuellement en première année de BTS « SIO spécialité SLAM »
                        Services Informatiques aux Organisations spécialité en Solutions Logicielles et Applications Métier.
                        Depuis mes jeunes années, j’ai toujours été attiré par l’informatique et les nouvelles technologies. 
                        C’est tout naturellement que je me suis tourné vers ces études, en effectuant mes trois années 
                        d’études en BAC PRO « Système Informatique et Numérique ».</p1>
                <div class="titre">- Experiences Professionnelles</div>
                    <p1>
                        J’ai eu l'opportunité d’effectuer des stages en milieu professionnel, dans différentes entreprises, 
                        disposant d’un service informatique. Les études que j’ai entreprises répondent, à une passion et à un réel
                        intérêt pour l'innovation informatique et technologique. 
                    </p1>
                <div class="titre">- Projet professionnel</div>   
                    <p1>
                        Mon projet professionnel aujourd’hui est de devenir « Responsable en Ingénierie Systèmes et Réseaux ».
                        A partir du 24 septembre, j’intègre l’école supérieure des métiers CESI du Mans pour suivre durant 2 ans,
                        une formation diplômante bac+4 afin de devenir « Responsable en Ingénierie Systèmes et Réseaux ».
                        Je souhaite par le biais de l’apprentissage en l’alternance participer à la construction et au
                        développement de l’entreprise, en grandissant avec elle, en apportant mes compétences, ma motivation
                        et en partageant ma passion de la haute technologie. En participant à la mise en œuvre et l’exploitation
                        des réseaux informatiques, téléphonique. En contribuant au bon fonctionnement des réseaux et en
                        intervenant sur les incidents en les dépannant. En participant à la gestion et à l'administration 
                        des réseaux.
                    </p1>
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
    </body>
</html>