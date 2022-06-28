<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/contact.css">
    <link rel="shortcut icon" href="./gd/mh.php">
    <link rel="stylesheet" href="./style/loader.css">
    <script src="https://kit.fontawesome.com/5c366893ff.js" crossorigin="anonymous"></script>
    <?php
        require_once "./include/fonts.php";
        require_once "./include/icons.php";
        require_once "./include/function.php";   
        require_once "./include/link.php";
    ?>
    <title>PortFolio</title>
</head>
<?php
    if((isset($_GET['action']) && $_GET['action']=="send")){
        $nom= $prenom = $email = $message ="";
        $nomE = $prenomE = $emailE = $messageE ="";
        $isErr=false;
        if((isset($_POST['Envoyer']))){
            //var_dump($_POST);
            if (empty($_POST["Nom"])){
                $nomE = "*";
                $isErr=true;
            }
            else{
                $nom = test_input($_POST["Nom"]);
            }

            if (empty($_POST["Prenom"])){
                $prenomE = "*";
                $isErr=true;
            }
            else{
                $prenom = test_input($_POST["Prenom"]);
            }

            if (empty($_POST["Email"])){
                $emailE = "*";
                $isErr=true;
            }
            else{
                $email = test_input($_POST["Email"]);
            }
            if (empty($_POST["Message"])){
                $messageE = "*";
                $isErr=true;
            }
            else{
                $message = test_input($_POST["Message"]);
            }

            $d = new DateTime();
            $date = $d->format('Y-m-d');
            $pdo=null;

        require_once "./include/dbConn.php";    
            try{
                $sql = "INSERT INTO users (ID, Nom, Prenom, Email, Message) VALUES
                (:ID, :Nom, :Prenom, :Email, :Message)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':ID', $id);
                $stmt->bindParam(':Nom', $nom);
                $stmt->bindParam(':Prenom', $prenom);
                $stmt->bindParam(':Email', $email);
                $stmt->bindParam(':Message', $message);

                $stmt->execute();
                echo "$ConnMessage";
            } catch(PDOException $e){
                die("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }
        }
    }
?>
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
        <img class="backgroundimage" src="./images/backgroundimage.png">
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
                <li style="--clr:#b4030f">
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
                <form action="Contact.php?action=send" method="post">
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" name="Nom" id="Nom" required>
                            <div class="underline"></div> 
                            <label>Nom</label>
                        </div>
                        <div class="input-data">
                            <input type="text" name="Prenom" id="Prenom" required>
                            <div class="underline"></div>
                            <label>Prénom</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" name="Email" id="Email" required>
                            <div class="underline"></div>
                            <label>Adresse Email</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data textarea">
                            <input cols="30" rows="10" name="Message" id="Message" required>
                            <div class="underline"></div>
                            <label>Votre Message</label>
                        </div>
                    </div>
                    <div class="form-row submit-btn">
                        <div class="input-data">
                            <div class="inner"></div>
                                <input type="submit" name="Envoyer" value="Envoyer">
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
        <script src="script/app.js"></script>
    </body>
</html>