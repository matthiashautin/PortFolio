<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/projet.css">
    <link rel="stylesheet" href="./style/card-glass.css">
    <link rel="stylesheet" href="./style/wave.css">
    <title>PortFolio</title>
</head>
    <?php
        require_once "./include/icons.php";
        require_once "./include/fonts.php";
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
                <li style="--clr:#ffcb9c">
                    <a id="lien" href="Profil.php" data-text="&nbsp;Profil">&nbsp;Profil</a>
                </li>
                <li style="--clr:#ffcb9c">
                    <a id="lien" href="BtsSio.php" data-text="&nbsp;BtsSio">&nbsp;BtsSio</a>
                </li>
                <li style="--clr:#ffcb9c">
                    <a id="lien" href="Techno.php" data-text="&nbsp;Veille&nbsp;Techno">&nbsp;Veille&nbsp;Techno</a>
                </li>
                <li style="--clr:#b85700">
                <a class="projeth" id="lien" href="Projet.php" data-text="&nbsp;Projet">&nbsp;Projet<span class="material-symbols-outlined">expand_more</span></a>
                        <ul1 id="projet">
                            <li1><a name="tp" href="#tp" data-text="&nbsp;Réalisé en cours (TP)">&nbsp;Réalisé en cours (TP)</a></li1>
                            <li1><a name="stage" href="#stage" data-text="&nbsp;Réalisé en stage">&nbsp;Réalisé en stage</a></li1>
                        </ul1>
                </li>
                <li style="--clr:#ffcb9c">
                    <a id="lien" class="contact" href="Contact.php" data-text="&nbsp;Contact">&nbsp;Contact</a>
                </li>
            </ul>
        </top>
        <a class="projettp1" href="https://hautin.alwaysdata.net/Airbnb/PageMain.php" target="_blank">View<br>More<br>Airbnb</a>
        <a class="projettp2" href="http://btsio.org/2022/hautinm/Quiestce/quiestce.php" target="_blank">View<br>More<br>Erreur</a>
        <a class="projettp3" href="http://hautin.alwaysdata.net/Graph/logo.php" target="_blank">View<br>More<br>Graph</a>
            <div class="menu">Projet</div>
                <div class="container1">
                    <div class="card" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                        <div class="content">
                            <p1 id="nametp">tp</p1>
                            <div class="titre">Projet Tp</div>
                            <div class="TP">Réalisé au cours de mes deux années lors de divers Travaux Pratique</div>
                                <a href="#tp">En Savoir Plus</a>
                        </div>
                    </div>
                    <div class="card" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                        <div class="content">
                            <p1>stage</p1>
                            <div class="titre">Projet Stage</div>
                            <div class="TP">Réalisé au cours de mes différentes périodes de stages</div>
                                <a href="#stage">En Savoir Plus</a>
                        </div>
                    </div>
                </div>
            <main>
                <div id="tp" class="titre">- Projet Tp</div>
                    <div class="annee">1ére Année</div>
                        <div class="container1" id="containerleft">
                            <div class="card1" id="cardleft" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <p1 id="nametp1">tp</p1>
                                    <div class="titre1">AirBnB</div>
                                    <a href="https://github.com/matthiashautin/Airbnb/tree/master" target="_blank">Code Source</a>
                                </div>
                            </div>
                                <p3 class="right">
                                    Ce Projet à été réalisé dans le but d'apprendre a créer, modifier, manipuler une base de donées.
                                    Le langage utilisé pour constituer ma base de doneées a été le SQL avec PDO. Puis j'ai utilisé 
                                    PHP pour faire les champs obligatoires mais aussi le Create, Update, Delete. Pour finir nous avons
                                    commencé a faire de l'objet mais sur ce projet je n'ai pas fini.
                                </p3>
                            </div>
                        <div class="container1" id="containerright">
                                <p3 class="left">
                                    L'objectif de se TP est de créer un jeu "Qui est-ce" avec la possibilité de mentir 1 fois afin 
                                    de créer une réponse erronée. En effet la personne doit garder en mémoire un personnage choisi.
                                    Puis répondre au question posé avec la possibilité de faire une erreur. La finalité de se TP est 
                                    de réalise de l'objet ainsi est que de la gestion d'erreur. Tout cela tourné sous la forme 
                                    d'un jeu. 
                                </p3>
                            <div class="card1" id="cardright" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <p1 id="nametp1">tp</p1>
                                    <div class="titre1">Erreur</div>
                                    <a href="https://github.com/matthiashautin/Quiest-ce" target="_blank">Code Source</a>
                                </div>
                            </div>
                        </div>
                        <div class="container1" id="containerleft">
                            <div class="card1" id="cardleft" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <p1 id="nametp1">tp</p1>
                                    <div class="titre1">Graph</div>
                                    <a href="https://github.com/matthiashautin/gd/tree/master" target="_blank">Code Source</a>
                                </div>
                            </div>
                                <p3 class="right">
                                    Dans se TP j'ai appris à utiliser la librairie GD que propose PHP. Le but était de créer un logo.
                                    Cela m'a permis de me familiariser avec une nouvelle librairie. Pas si simple à gerer au début.
                                </p3>
                            </div>
                    <div class="annee">2éme Année</div>
                        <div class="container1">
                            <div class="card1" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <a href="#">En Savoir Plus</a>
                                </div>
                            </div>
                            <div class="card1" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <a href="#">En Savoir Plus</a>
                                </div>
                            </div>
                            <div class="card1" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <a href="#">En Savoir Plus</a>
                                </div>
                            </div>
                            <div class="card1" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <a href="#">En Savoir Plus</a>
                                </div>
                            </div>
                            <div class="card1" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <a href="#">En Savoir Plus</a>
                                </div>
                            </div>
                            <div class="card1" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <a href="#">En Savoir Plus</a>
                                </div>
                            </div>
                                </div>
                            </main>
                        <main>
                <div id="stage" class="titre">- Projet Stage</div>
                    <div class="annee">1ére Année</div>
                        <div class="container1">
                            <div class="card1" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <a href="#">En Savoir Plus</a>
                                </div>
                            </div>
                            <div class="card1" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <a href="#">En Savoir Plus</a>
                                </div>
                            </div>
                            <div class="card1" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <a href="#">En Savoir Plus</a>
                                </div>
                            </div>
                        </div>
                    <div class="annee">2éme Année</div>
                        <div class="container1">
                            <div class="card1" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <a href="#">En Savoir Plus</a>
                                </div>
                            </div>
                            <div class="card1" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <a href="#">En Savoir Plus</a>
                                </div>
                            </div>
                            <div class="card1" data-tilt data-tilt-reverse="true"  data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt data-tilt-scale="1.1">
                                <div class="content">
                                    <a href="#">En Savoir Plus</a>
                                </div>
                            </div>
                        </div>
            </main>
            <script type="text/javascript" src="vanilla-tilt.js"></script>
        <script type="text/javascript">
	        VanillaTilt.init(document.querySelector(".card"), {
		        max: 27,
		        speed: 500
	            });
            VanillaTilt.init(document.querySelectorAll(".card"));
        </script>
        <script type="text/javascript">
	        VanillaTilt.init(document.querySelector(".card1"), {
		        max: 1,
		        speed: 500
	            });
            VanillaTilt.init(document.querySelectorAll(".card1"));
        </script>
            <section>
                <div class="wave wave1"></div>
                <div class="wave wave2"></div>
                <div class="wave wave3"></div>
                <div class="wave wave4"></div>
            </section>
    </body>
</html>

