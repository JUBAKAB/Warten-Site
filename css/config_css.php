<style>
    <?php 

    // Theme
    $colorprimary="#ff0000";
    $colorsecondary="#000000";
    $colorbasic="#FFFFFF";
    $font="font";
    // Sponsor
    $tailleSponsor = 13.2;
    $heightBox=165;
    $positionSponsor =1;
    $heightSponsor=60;
    //Slider
    $lienSlider=["#","#","#","#"];
    $nombreSlider=4;
    
    ?>

    @font-face {
        font-family: <?php echo $font ?>;
        src: url("font/hydro.ttf");
    }
    
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
     /*Me suivre*/
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
     /*Login & Logout*/
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
     /*Menu & Logo*/
    .contener_menu {
        background-color: <?php echo $colorsecondary ?>;
        height: 90px;
        width: 100%;
        border-bottom: 3px <?php echo $colorprimary ?> solid;
        float: left;
    }
    
    .img_logo {
        width:150px;
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
     /*Sponsor*/
    .sponsor_container{
        height: 165px;
        width: 100%;
        background-color: #080808;
        float: left;
        
    }
    .sponsor_box{
        margin: 0 auto;
        width: 1200px;
        height: 165px;
        overflow: hidden;
    }
    .box{
        height: <?php echo $heightBox?>px;
        width: <?php echo $tailleBox ?>%;
        line-height: 165px;
        
    }
    .sponsor{
        height: <?php echo $heightSponsor ?>px;
        margin-top: <?php echo ($heightBox - $heightSponsor)/2?>px;
    }
    /*Slider*/
    .slider_container{
        width: 100%;
        height: 600px;
        float: left;
        margin: 0 auto;
    }
    .sliderbox{
        width: 1200px;
        height: 600px;
        margin: 0 auto;
    }
  
    .box_img{
        width: 1200px;
        height: 600px;
        position: absolute;
    }
    .img_slider{
        width: 100%;
        height: 100%;
    }
    
     /*Cellules*/
    .cellule_container{
        float: left;
        position: relative;
        width: 100%;
        height: 800px;
        margin: 0 auto;
        text-align: center;
        background: black url('img/background_image.png') no-repeat 0 0; 
        background-size: 100% 200%;
        background-position: left bottom;
    }
    .cellule_articles{
        float:left;
        width: 62.5%;
        height: 650px;
        margin-top: 15px;
        margin-bottom: 15px;
        background-color: <?php echo $colorsecondary ?>;;
        text-align: left;
        -moz-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        -webkit-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        -o-box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        box-shadow: 0px 0px 15px 0px <?php echo $colorbasic ?>;
        filter:progid:DXImageTransform.Microsoft.Shadow(color=<?php echo $colorbasic ?>, Direction=NaN, Strength=15);
    }
    .cellule_activity{
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
        filter:progid:DXImageTransform.Microsoft.Shadow(color=<?php echo $colorbasic ?>, Direction=NaN, Strength=15);
    }
    .center_image{
        margin: 0 auto;
        width: 1250px;
    }
</style>

