
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
                echo '<a class="rs_bouton" href="'.$lien[$i].'"><img class="container_rs" src="img/'.$pathpicture[$i].'.png"></a>';
            ?>
            </div>
            <!-- Logon/Logout and Sign in -->
            <div class="container_lang">
            <?php 
          //  for($i = 0;$i<count($langue_url);$i++)
                echo"<img class=\"drapeau\" src=\"img/".$langue_url[0]."_drapeau.png\" alt=\"Changer la langue\">"

            ?>
            </div>
            <div class="container_log">
                <a href="#Inscription">Inscription</a>
                <a href="#Connexion">Connexion</a>
            </div>
        </header>



