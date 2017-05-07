<!-- Menu et logo -->
<div class="contener_menu">
    <div class="img_logo">
        <img src="img/logoWarten.png" alt="Logo warten" width="100%" height="100%">
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
                   echo '<a href="'.$lienSponsor[$i].'">
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
<!--Slider-->
<div class="slider_container">
    <div class="sliderbox">
           <?php
            for($i = 0; $i <$nombreSlider;$i++){
            echo '<div class="box_img" style="z-index:'.$i.'">
                <a href="'.$lienSlider[$i].'">
                    <img class="img_slider" src="img/img_slider'. $i.'.png">
                    </img>
                </a>
            </div>';
            
            }
            ?>
    </div>

</div>
<div class="background_image"></div>
<!-- Cellules -->
<div class="cellule_container">
    <div class="center_image">
        <div class="cellule_articles">
        </div>
        <div class="cellule_activity">
        </div>
    </div>
</div>
  <?php include('js/config_js.php');?>

</body>

</html>
