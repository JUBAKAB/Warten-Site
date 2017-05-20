<!--Slider-->
<div class="slider_container">
    <div class="sliderbox">
        <?php 
            $slidermarche=true; // Laisse le slider en marche
                if ($slidermarche){
                    for($i = 0; $i <$nombreSlider;$i++){
                            echo '<div class="box_img" ><a href="'.$lienSlider[$i].'"><img class="img_slider" src="img/img_slider'. $i.'.png"></img></a></div>';
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
         <!-- Contenu des articles -->
        <!--         
           Ici il y'aura des photos des articles avec le lien de l'articles pour chaque articles  
           Procédé dans la base pour recuperer les X derniers et les afficher ici avec leur image
           ou juste le lien de l'image ex : img/img_article0.png       
       -->
        </div>

        <div class="cellule_activity">
           <div class="backgroundcellules">
            <span class="titleCellules">Activités</span>
            </div>
        <!-- Contenu des Activités -->
        <!--         
           Ici il y'aura le defilement des activités reçu par du AJAX en temps réeel pour que l'on puisse
           par cette catégorie acceder au lien suivant :
                -Post facebook sur la page de warten (Bleu foncé)
                -Tweet sur le twitter de warten  (Bleu cyan)
                -Photo mise sur instagramm (Jaune soleil)
                -Articles mis par warten (Rouge)
                -Lancement d'un live sur twitch (Violet)
       -->
        </div>
        <div class="cellule_biographie">
           <div class="backgroundcellules">
                 <span class="titleCellules">Biographie</span>
            </div>
        <!-- Contenu de la Biographie -->
        <!--         
           Ici il y'aura la biographie de warten qui le presentera sur les grandes lignes avec pas mal
           d'information comme :
           - Ses infos personnels (nom, prenom, lieu, age, activité professionnel, sponsor,...)
           - Ses Structures, son parcours professionnel , son envie de streamer, ses jeux particulier sur lesquels il joue,...
       -->
        </div>
    </div>
    <div class="footer_space">
        
        
    </div>
    
</div>



</body>

</html>
