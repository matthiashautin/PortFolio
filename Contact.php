<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/contact.css">
    <script src="https://kit.fontawesome.com/5c366893ff.js" crossorigin="anonymous"></script>
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
                <a class="projeth" id="lien" href="Projet.php" data-text="&nbsp;Projet">&nbsp;Projet<span class="material-symbols-outlined">expand_more</span></a>
                        <ul1 id="projet">
                            <li1><a href="Projet.php" data-text="&nbsp;Réalisé en cours (TP)">&nbsp;Réalisé en cours (TP)</a></li1>
                            <li1><a href="Projet.php" data-text="&nbsp;Réalisé en stage">&nbsp;Réalisé en stage</a></li1>
                        </ul1>
                </li>
                <li style="--clr:#b85700">
                    <a id="lien" class="contact" href="Contact.php" data-text="&nbsp;Contact">&nbsp;Contact</a>
                </li>
            </ul>
        </top>
                <div class="menu">Contact</div>
            <footer>
                <div class="container">
                <div class="topfooter">
                    <span class="material-symbols-outlined">mail</span>
                    <h4>matthiashautin@gmail.com</h4>
                </div>
                <form action="#">
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" required>
                            <div class="underline"></div>
                            <label>Nom</label>
                        </div>
                        <div class="input-data">
                            <input type="text" required>
                            <div class="underline"></div>
                            <label>Prénom</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" required>
                            <div class="underline"></div>
                            <label>Adresse Email</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data textarea">
                            <textarea cols="30" rows="10" required></textarea>
                            <div class="underline"></div>
                            <label>Votre Message</label>
                        </div>
                    </div>
                    <div class="form-row submit-btn">
                        <div class="input-data">
                            <div class="inner"></div>
                                <input type="submit" value="Envoyer">
                            </div>
                        </div>
                    </form>
                </div>
            <div class="middle">
                <a class="icons" href="">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a class="icons" href="">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a class="icons" href="">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a class="icons" href="">
                    <i class="fa-solid fa-at"></i>
                </a>
            </div>
        </footer>
    </body>
</html>