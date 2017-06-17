<style>
<?php 
    
    // Theme
    $colorprimary="#ff0000"; // Rouge
    $colorsecondary="#000000"; // Noir
    $colortertiaire="#080808"; // Gris
    $colorbasic="#FFFFFF"; //Blanc
    $font="font"; // Police
    
    
    
    // Sponsor
    $tailleSponsor=13.2; // Taille en largeur
    $heightBox=165; // Hauteur de la boite des sponsors
    $positionSponsor=1; // Position des sponsor
    $heightSponsor=60; // Hauteur des sponsors
    
    
    
    //Slider
    $lienSlider=["#","#","#","#"]; // Lien des sliders
    $nombreSlider=2; // Nombre d'image pour le sliders
    
?>
    
    
    
    /*  FontFace  */
    
    @font-face {
        font-family: <?php echo $font ?>;
        src: url("View/font/hydro.ttf");
    }
    
    /*  Général  */
    body,
    html {
        margin: 0 auto;
        padding: 0 auto;
        background-color: <?php echo $colorsecondary ?>;
    }
    header {
        height: 40px;
        width: 100%;
        background-color: <?php echo $colorprimary ?>;
    }
    a {
        text-decoration: none;
    }
    li {
        float: left;
    }
    
    
    /*  Me suivre  */
    
    .container_follow {
        height: 40px;
        float: left;
        font: 15px;
        margin-left: 80px;
        line-height: 40px;
        color: white;
        margin-right: 20px;
        cursor: default;
        font-family: <?php echo $font ?>;
    }
    .container_rs {
        float: left;
        height: 20px;
        margin-top: 5px;
        margin-right: 5px;
    }
    
    
    /*  Login & Logout  */
    
    .container_lang {
        float: right;
        margin-right: 65px;
        line-height: 40px;
        margin-left: 15px;
        height: 30px;
    }
    .drapeau {
        margin-top: 7.5px;
        width: 35px;
        height: 25px;
        cursor: pointer;
    }
    .container_log a {
        float: right;
        margin-right: 35px;
        line-height: 40px;
        color: white;
    }
    .container_log a:link {
        text-decoration: none;
        font-family: <?php echo $font ?>;
        font-size: 20px;
        color: white;
        margin-right: 15px;
    }
    
    
    /*  Menu & Logo  */
    
    .contener_menu {
        background-color: <?php echo $colorsecondary ?>;
        height: 90px;
        width: 100%;
        border-bottom: 3px <?php echo $colorprimary ?> solid;
        float: left;
    }
    .img_logo {
        width: 150px;
        height: 80px;
        padding-top: 5px;
        margin-left: 80px;
        float: left;
    }
    nav {
        height: 45px;
        width: 490px;
        float: right;
        margin-top: 15px;
    }
    .menu {
        color: <?php echo $colorbasic ?>;
        float: left;
        list-style-type: none;
        margin-right: 20px;
        font-family: <?php echo $font ?>;
        cursor: pointer;
        font-size: 25px;
    }
    .menu:hover {
        color: <?php echo $colorprimary ?>;
    }
    
    
    /*  Sponsor  */
    
    .sponsor_container {
        height: 165px;
        width: 100%;
        background-color: <?php echo $colortertiaire;
        ?>;
        float: left;
    }
    .sponsor_box {
        margin: 0 auto;
        width: 1200px;
        height: 165px;
        overflow: hidden;
    }
    .box {
        height: <?php echo $heightBox?>px;
        line-height: 165px;
    }
    .sponsor {
        height: <?php echo $heightSponsor ?>px;
        margin-top: <?php echo ($heightBox - $heightSponsor)/2?>px;
    }
    
    
    /*  Slider  */
    .mid_container{
            width: 100%;
            height: 500px;
            float: left;
        }
    .container{
        width: 1200px;
        height: 500px;
        overflow: hidden;
        margin: 0 auto;
    }
    .box_container{
        width: 1200px;
        height: 500px;
        position: relative;
        right:0px;
    }
    .imgContainer{
        width: 1200px;
        height: 100%;
        float: left;
    }
    .img{
        width: 100%;
        height: 100%;
    }
    .btnLeft{
        position: relative;
        float: left;
        z-index: 200;
        bottom:270px;
        cursor: pointer;
        opacity: 0.7;
    }
    
    .btnRight{
        position: relative;
        float: right;
        z-index: 200;
        bottom:270px;
        cursor: pointer;
        opacity: 0.7;
    }
    
    /*  Cellules  */
    
    .cellule_container {
        float: left;
        position: relative;
        width: 100%;
        height: 800px;
        margin: 0 auto;
        text-align: center;
        background: black url('View/img/background_image.png') no-repeat 0 0;
        background-size: 100% 200%;
        background-position: left bottom;
        color: <?php echo $colorbasic; ?>;
    }
    .cellule_articles {
        float: left;
        width: 62.5%;
        height: 650px;
        margin-top: 15px;
        margin-bottom: 15px;
        background-color: <?php echo $colorsecondary ?>;
        ;
        text-align: left;
        -moz-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        -webkit-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        -o-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        filter: progid:DXImageTransform.Microsoft.Shadow(color=<?php echo $colorbasic ?>, Direction=NaN, Strength=15);
    }
    .cellule_activity {
        float: right;
        width: 35%;
        height: 650px;
        margin-top: 15px;
        margin-bottom: 15px;
        background-color: <?php echo $colorsecondary ?>;
        text-align: left;
        -moz-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        -webkit-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        -o-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        filter: progid:DXImageTransform.Microsoft.Shadow(color=<?php echo $colorbasic ?>, Direction=NaN, Strength=15);
    }
    .cellule_biographie {
        float: left;
        width: 100%;
        height: 650px;
        margin-top: 15px;
        margin-bottom: 15px;
        background-color: <?php echo $colorsecondary ?>;
        text-align: left;
        -moz-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        -webkit-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        -o-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        filter: progid:DXImageTransform.Microsoft.Shadow(color=<?php echo $colorbasic ?>, Direction=NaN, Strength=15);
    }
    .center_image {
        margin: 0 auto;
        width: 1250px;
    }
    .backgroundcellules {
        width: 100%;
        height: 50px;
        background: black url('View/img/banner_red_cellules.png') no-repeat 0 0;
        background-size: 100% 100%;
        vertical-align: center;
    }
    .titleCellules {
        line-height: 50px;
        margin-left: 30px;
        font-size: 35px;
        font-family: <?php echo $font ?>;
        cursor: default;
        color: <?php echo $colorsecondary ?>;
    }
    
    
    /*  Footer  */
    
    .footer_space {
        float: left;
        width: 100%;
        height: 250px;
        color: <?php echo $colorbasic; ?>;
        background-color: <?php echo $colorsecondary; ?>;
        border-top: 3px <?php echo $colorprimary ?> solid;
        -moz-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        -webkit-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        -o-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        filter: progid:DXImageTransform.Microsoft.Shadow(color=<?php echo $colorbasic ?>, Direction=NaN, Strength=15);
    }
    /*ScrollBar*/
    ::-webkit-scrollbar {
      width: 8px;
      height: 8px;
    }
    ::-webkit-scrollbar-button {
      width: 8px;
      height: 8px;
    }
    ::-webkit-scrollbar-thumb {
      background: <?php echo $colorsecondary ?>;
      border: 1px solid <?php echo $colortertiaire ?>;
      border-radius: 8px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: <?php echo $colorbasic ?>;
    }
    ::-webkit-scrollbar-thumb:active {
      background: <?php echo $colorsecondary ?>;
    }
    ::-webkit-scrollbar-track {
      background: <?php echo $colorprimary ?>;
      border: 0px none <?php echo $colorbasic ?>;
      border-radius: 8px;
    }
    ::-webkit-scrollbar-track:hover {
      background: <?php echo $colortertiaire ?>;
    }
    ::-webkit-scrollbar-track:active {
      background: <?php echo $colortertiaire ?>;
    }
    ::-webkit-scrollbar-corner {
      background: transparent;
    }

</style>
