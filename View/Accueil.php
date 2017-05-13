<!--Slider-->
<div class="slider_container">
    <div class="sliderbox">
        <?php 
            $slidermarche=false; // Laisse le slider en marche
                if ($slidermarche){
                    for($i = 0; $i <$nombreSlider;$i++){
                            echo '<div class="box_img" style="z-index:'.$i.'"><a href="'.$lienSlider[$i].'"><img class="img_slider" src="img/img_slider'. $i.'.png"></img></a></div>';
                     }
                 }
        ?>
    </div>

</div>
<div class="background_image"></div>
<!-- Cellules -->
<div class="cellule_container">
    <div class="center_image">
        <div class="cellule_articles">
        <div class="backgroundcellules">
            <span class="titleCellules">Articles</span>
        </div>
        </div>

        <div class="cellule_activity">
           <div class="backgroundcellules">
            <span class="titleCellules">Activités</span>
            </div>
        </div>
    </div>
</div>


</body>

</html>
