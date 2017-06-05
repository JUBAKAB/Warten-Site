<!--Slider-->
<div class="mid_container">
    <div class="container">
        <div class="box_container" id="moveSlider">
            <?php 
                $slidermarche=true; // Laisse le slider en marche
                    if ($slidermarche){
                        for($i = 0; $i <$nombreSlider;$i++){
                                echo '<div class="imgContainer" >
                                        <a href="'.$lienSlider[$i].'">
                                            <img class="img_slider img" src="img/img_slider'. $i.'.png"></img>
                                        </a>
                                      </div>';
                         }
                     }
            ?>
        </div>
        <img src="img/leftarrow.png" alt="Précédente" onclick="rightSlider()" class="btnLeft">
    <img src="img/rightarrow.png" alt="Suivant" onclick="nextSlider()" class="btnRight">
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

            <?php 
          foreach ($LesArticles as $unArticle ) {


         //id de l'article 
          echo $unArticle->get_id();
              echo '<br>';
          //titre de l'article en francais  
          echo $unArticle->get_titre();
              echo '<br>';
          //url de l'image de l'article
          echo $unArticle->get_image();
              echo '<br>';
        
        /* 
            --------------Articles-------------
        
    Ceux avec une étoile sont ceux qui sont répéter dans les deux pages
        
     Panel dans l'accueil
      * - ID de l'articles
        - Lien de l'image Slider (Miniature utilisé aussi pour l'article en bas)
        - MiniDescription de l'article
      * - Sujet
      * - Categorie
        - Url
      * - Date de création
      
     Page Article (Meme page pour tous : Routage sur l'ID different)
      * - ID Article
        - Lien de l'image banniere
      * - Sujet
      * - Categorie
        - Article
      * - Date de création
      
        --------------Gestion d'Articles-------------
        
        - Menu "Gestion d'Articles" : 
                * Liste des articles existants sous forme de tableau
                * Filtrage sous menu déroulant : 
                    - Sujet (Par ordre alphabétique et par ordre inversé alphabétique)
                    - Categorie (Par ordre alphabétique et par ordre inversé alphabétique)
                    - Date de création (Par ordre croissant et décroissant)
                * Recherche d'article par sujet,categorie, mot dans les articles (via une barre de recherche)
                * Bouton Nouvelle Article (En dehors du tableau)
                * Bouton Modifier d'un article (Lier à l'article dans le tableau et si il est modifier par un autre Message disant que la modification est impossible)
                * Bouton Suppression d'un article (Lier à l'article dans le tableau  avec confirmation et suppression si "Oui")
                * Zone montrant quand le fichier sera "Publié" (Si il est paru on mets "Publié" sinon on mets la date ou il sera "Publié" )
                
                
        --------------Nouvelle Articles-------------
        
            * Edition des champs suivant obligatoire
                    - Titre de l'article (Sujet)
                    - Upload de l'image pour le slider (1200x500)
                    - Upload de l'image pour la banniere (1200x300)
                    - MiniDescription de l'article
                    - Article avec Gestion du BBcode pour afficher des couleurs et des images.
                    - Categorie (Pouvant etre créer ou séléctionné dans un menu déroulant si déja existant)
                    - Date de publication (Gestion par une horloge Date et Heure) 
                    
             * Bouton
                    - Créer un nouvelle article
                    - Prévisualisée l'articles (page de prévisualisation qui créer une page temporaire et elle est supprimé au bout d'un certain temps (3h)).
                    -Annuler les modifications
                    
         --------------Modification d'Articles-------------         
               * Edition des champs suivant possible
                    - Titre de l'article (Sujet)
                    - Upload de l'image pour le slider (1200x500)
                    - Upload de l'image pour la banniere (1200x300)
                    - MiniDescription de l'article
                    - Article avec Gestion du BBcode pour afficher des couleurs et des images.
                    - Categorie (Pouvant etre créer ou séléctionné dans un menu déroulant si déja existant)
                    - Date de publication (Gestion par une horloge Date et Heure)
              * Bouton
                    - Modification de l'article nouvelle article
                    - Prévisualisée l'articles (page de prévisualisation qui créer une page temporaire et elle est supprimé au bout d'un certain temps (3h)).
                    -Annuler les modifications
        */
          }


          ?>
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
                    
                    
             Activation Via le dashboard sur les activités
           -->
        </div>
        <div class="cellule_biographie">
            <div class="backgroundcellules">
                <span class="titleCellules">Biographie</span>
            </div>

            <?php foreach ($LaBiographie as $uneBiographie) {
            echo $uneBiographie->get_texte_fr();
          }
          
    /*
        Contenu de la Biographie 
           Ici il y'aura la biographie de warten qui le presentera sur les grandes lignes avec pas mal
           d'information comme :
           - Photo de Warten sur la gauche
           - Ses infos personnels (nom, prénom, lieu, age, activité professionnel, sponsor) sur la droite 
           - Ses Structures, son parcours professionnel , son envie de streamer, ses jeux particulier sur lesquels il joue,... en dessous voir dossier Marketing (Donner dans la convos)
       */
          ?>




       
        </div>
    </div>
    <div class="footer_space">


    </div>

</div>
<script src="js/scriptSlider.js"></script>
</body>

</html>
