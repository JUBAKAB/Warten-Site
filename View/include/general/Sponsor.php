<!-- Sponsor -->
<!--
           ---------------- Gestion des sponsors ------------
           
        Les sposnsors sont gérér dans la partie Dashboard "Gestion des sponsors"
    
    -->
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
