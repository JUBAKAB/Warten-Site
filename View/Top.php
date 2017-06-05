<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Warten Site - Accueil</title>
    <link rel="icon" type="image/png" href="img/logo.png" />
    <?php include('css/config_css.php');?>
    <?php include('js/config_js.php');?>
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
            <?php 
                //for($i = 0;$i<count($langue_url);$i++)
                echo"<img class=\"drapeau\" src=\"img/".$langue_url[0]."_drapeau.png\" alt=\"Changer la langue\">"

            ?>
        </div>
        <div class="container_log">
            <a href="#Inscription">Inscription</a>
            <a href="#Connexion">Connexion</a>
        </div>
    </header>

    <!-- Menu et logo -->
    <div class="contener_menu">
        <div class="img_logo">
            <img src="img/logoWarten.png" alt="Logo warten" width="100%" height="100%">
        </div>
        <nav>

            <ul>
                <?php
                for($i = 0;$i<count($lienMenu);$i++)
                   echo ' <li  ><a class="menu" href="index.php?link='.$lienMenu[$i].'">'.$lienTexte[$i].'</a></li>';
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
                   echo '<a href="'.$lienSponsor[$i].'" target="_blank">
                 <img src="img/'.$imageSponsor[$i].'.png" 
                 onmouseover="changeImage(this,'.$i.',true)" 
                 onmouseout="changeImage(this,'.$i.',false)"
                 class="sponsor" style="margin-left:'.$positionSponsor.'%;">
                 </a>';
                }
                    
                ?>
            </div>
        </div>
    </div>
