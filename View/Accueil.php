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

 
 </body>
 </html>