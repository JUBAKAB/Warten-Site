<!-- Ceci est le slider.... Et pas les sponsors --> 

    <!--Slider-->
        <div class="slider_container">
            
        </div>
        
        <!-- Cellules -->
        <div class="cellule_container">
           <div class="center_image">
            <div class="cellule_articles">
                    <?php
                                // ????? Pas de JS  
                                foreach ($unSponsor as $LesSponsors) {
                                    echo $unSponsor->get_nom();
                                    echo $unSponsor->get_texte_fr();
                                }

                    ?>
            </div>
            <div class="cellule_activity">

            </div>
            </div>
        </div>
    </body>

    </html>
