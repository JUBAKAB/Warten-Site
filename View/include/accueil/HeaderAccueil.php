<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Warten Site - Accueil</title>
    <link rel="icon" type="image/png" href="View/img/logo.png" />
    <?php include('View/css/config_css.php');?>
    <?php include('View/js/config_js.php');?>
    <?php
    /*Recuperation des langues avec la variable $langue */
    if(!isset($_GET["langue"])){
        $langue = "fr";
    }else if($_GET["langue"] == "en"){
         $langue = "en";
    }else if($_GET["langue"] == "fr"){
         $langue = "fr";
    }else{
         $langue = "fr";
    }
     /*
        Gestion des traductions :
        
            Si la page n'est pas traduite alors on mets que l'élément n'est pas traduit et on mets un bouton "Change Language" ou "Changement de langue"
            
        Gestion des traductions dans la dashboard:
        
        Menu "gestion des traductions"
        
            Gestion de traduction paragraphe par paragraphe
            et liste de tout ce qui n'est pas traduit et tableau de ce qui est déja traduit.
        Traducteur avec BBCode gestion des couleurs et des gras etc
        
     
     */
    
    
        
    
    ?>
    
</head>

<body lang="<?php echo $langue;?>">