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
