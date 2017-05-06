<?php
//Lien
$lien=
["https://twitter.com/W4RTEN",
"https://www.facebook.com/VincentWarten/",
"https://www.twitch.tv/warten_rog",
"https://www.youtube.com/channel/UCxLI4j-u9eHCOfNZAydlviA/",
""];
//Chemin d'image
$pathpicture=
["twitter",
"facebook",
"twitch",
 "youtube",
 "instagram"];
//Drapeau
$drapeau=
["img/fr_drapeau.png",
 "img/en_drapeau.png"];
//Lien Menu
$lienMenu=
["",
 "",
 "",
 "",
 ""];
//Menu Texte
$lienTexte=
["Accueil",
"Nouveautés",
"Live",
"Sponsors",
"À propos"];

//Sponsor
$lienSponsor=[
    "","","","","","",""
];
$imageSponsor=[
     "","","","","","",""
];

?>



    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Warten Site - Accueil</title>
        <link rel="icon" type="image/png" href="img/logo.png" />
        <?php include('css/config_css.php');?>
    </head>

    <body>
        <header>
            <!-- Me suivre -->
            <div class="container_follow">
                Me suivre
            </div>
            <div class="container_rs">
                <?php
                for($i = 0;$i<count($lien);$i++)
                echo '<a class="rs_bouton" href="'.$lien[$i].'"><img class="container_rs"    src="img/'.$pathpicture[$i].'.png"></a>';
            ?>
            </div>
            <!-- Logon/Logout and Sign in -->
            <div class="container_lang">
                <img class="drapeau" src="<?php echo $drapeau[0] ?>" alt="Changer la langue">
            </div>
            <div class="container_log">
                <a href="#Inscription">Inscription</a>
                <a href="#Connexion">Connexion</a>
            </div>
        </header>

        <!-- Menu et logo -->
        <div class="contener_menu">
            <div class="img_logo">
                <img src="img/logowarten.png" alt="Logo warten">
            </div>
            <nav>

                <ul>
                    <?php
                for($i = 0;$i<count($lienMenu);$i++)
                   echo '<li class="menu" href="'.$lienMenu[$i].'">'.$lienTexte[$i].'</li>';
                ?>
                </ul>
            </nav>
        </div>
        <!-- Sponsor -->
        <div class="sponsor_container">
            <div class="sponsor_box">
                <div class="box">
                    <?php
                for($i = 0;$i<count($imageSponsor);$i++){
                   echo '<a href="'.$lienSponsor[$i].'"><img src="'.$imageSponsor[$i].'" class="sponsor" style="margin-left:'.$positionSponsor.'%;"></a>';
                }
                    
                ?>
                </div>
            </div>
        </div>
        <!--Slider-->
        <div class="slider_container">
            
        </div>
        <!-- Cellules -->
        <div class="cellule_container">
            <div class="cellule_articles">
            </div>
            <div class="cellule_activity">
            </div>
        </div>
    </body>

    </html>
