<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="View/css/style.css">
</head>
<!--        
       Gestion des traductions :
           
            Si la page n'est pas traduite alors on mets que l'élément n'est pas traduit et on mets un bouton "Change Language" ou "Changement de langue"
            
        Gestion des traductions dans la dashboard:
        
        Menu "gestion des traductions":
            Gestion de traduction paragraphe par paragraphe
            et liste de tout ce qui n'est pas traduit et tableau de ce qui est déja traduit.
            
        Traducteur avec BBCode gestion des couleurs et des gras etc

-->
        
     
    
<body>
     <header>
        <!-- Me suivre -->
        <div class="container_follow">
            Me suivre
        </div>
        <!-- RS -->
        <div class="container_rs">
            <?php
                for($i = 0;$i<count($lien);$i++)
                echo '<a class="rs_bouton" href="'.$lien[$i].'"><img class="container_rs"    src="View/img/'.$pathpicture[$i].'.png"></a>';
      /*
        Gestion des réseaux sociaux :
                5 Réseaux sociaux max
        Gestion des réseaux sociaux dans la dashboard:
            Menu "gestion de contenu"
                Gestion des réseaux sociaux
                - Ajouter un réseaux créer un module
                - Module :
                    Menu deroulant avec les réseaux disponible
                    L'url du site
     */
            
            ?>
        </div>
        <!-- Langue -->
        <div class="container_lang">
        </div>
        <!-- Login/Sign up -->
        <div class="container_log">
            <a href="#?w=500" rel="popup_2" class="poplight">Inscription</a>
            <a href="#?w=500" rel="popup_1" class="poplight">Connexion</a>
            <!-- PopUp -->
            <div id="popup_1" class="popup_block">
                Bien dans la connexion
            </div>

            <div id="popup_2" class="popup_block">
                Bien dans l'inscription
            </div>
         <!--
                ---------Inscription--------
                
                Formulaire d'inscription
                    - Text Nom
                    - Text Pseudo
                    - Mail EMail
                    - Pass Mot de passe (entre 5 et 20 caractere)
                    - Pass Confirmation du mot de passe
                    - Checkbox Accepter les CGU (Lien vers une page de CGU)
                    -Bouton S'enregister avec Facebook (rempli tout les champs)
                    -Bouton S'enregister avec Twitter (rempli tout les champs)
                    -Bouton S'enregister avec Twitch (rempli tout les champs)
                    - Bouton S'enregister
                    - Bouton Annuler
                Erreur possible :
                    * Pseudo existant
                    * Mail existant
                    * Mail incorrect (mail jetable gerer)
                    * Mot de passe trop petit
                    * Mot de passe trop grand
                    * Mot de passe confirmé incorrecte par rapport au premier
                    * Vous n'avez pas accepter la CGU
                    
                -------Gestion de la CGU-------
                                
                Menu "Gestion contenu":
                   Gestion de la CGU
                    - Champs de texte avec la CGU
                    - Bouton Modification de la CGU
                    
                  ---------Connexion--------
                  
                 - Pseudo ou Mail
                 - Mot de passe
                 - Lien "Mot de passe oublié ?"
                 - Checkbox "Se souvenir de moi"
                 - Bouton Connexion
                 - Bouton Annuler
                 Erreur possible :
                    * Pseudo incorrect
                    * Mail incorrect
                    * Mot de passe incorrect
                    
                   ---------Mot de passe oublié--------
                   
                  *Mail Mettre son mail
                    Erreur possible :
                        *Ce mail correspond à aucun mail connu.
                    Message possible
                        *Mail en attente nous vous enverrons un mail sous 48h
                         Mail envoyé par la fonction mail() en php qui ne demande pas de serveur smtp. Envoie d'un lien sur une page qui demande un token lier au compte par le mail qui se trouve dans l'url du lien et qui est verifier pour acceder à la page et l'on va sur la page "Nouveaux mot de passe"
                         
                    ---------Nouveaux mot de passe--------
                    
                    Deux champs de texte avec mot de passe et  retaper le mot de passe. ainsi que valider.
                    Erreur possible :
                        * Identification requise (pas de token)
                        * Identification déjà réalisé (revenir à l'ecran d'accueil)
                        * Mot de passe trop petit
                        * Mot de passe trop grand
                        * Mot de passe confirmé incorrecte par rapport au premier
                        
                    ---------Modal Connexion/Inscription--------
                    
                    Deux onglet qui pemettrons de jongler entre les deux modules
                    
                    ---------Menu Déroulant de l'utilisateur--------
                          
                           -Pseudo de la personne (Menu déroulant)
                            * Afficher le profil (Page profil connecté)
                            * Modifier votre profil (page Modification Profil) 
                            * Dashboard (Si il y a le droit)
                            * Tableau des Invitations (page Invitation)
                            * Tableau des Messages (page MessageEtNotif)
                            * Tableau des Succés (page Succés)
                            * Modifier vos Paramètres (page Paramètre)
                            * Déconnexion
                            
                    ---------Profil Connecté--------
                       
                        Page de visuel de montrant la Photo à gauche de profil
                        avec en dessous une biographie et quelques infos mis dans la page Modifier profil
                        Ensuite sur tout le reste une Zone de texte sur la droite en haut avec en bas des posts.
                        Au dessus de la zone de texte une banniere
                        Separer en 2 zones
                        
                    ------Modification Profil---------
                       
                        -Informations personnels
                            * Nom
                            * Pseudo
                            * Mot de passe
                            * Confirmation Mot de passe
                            * Mail
                            * Age
                            * Activités professionnel
                        -Autres informations
                            * Biographie
                            * Jeux
                            * Config
                        -Lien
                            * Reseaux sociaux
                            * Site Internet 
                        -Visuel
                            *Image Profil Upload
                            *Image Banniere Upload
                        
                    ------DashBoard--------
                    
                    Envoie sur la page dashboard et Non affiché si les droits sont insuffisant
                    
                    ------- Tableau des Invitations -----
                    
                    Invitation à des groupes de chat ou Invitation en amis
                    
                    ----- Message Et Notif --------
                    
                    Affichage des messages Envoyé par les groupes de personne
                    Affichage des notification reçu  (Commentaire, GamePoke, WarTenLikes etc)
                    
                    ----- Warten Succés ------
                    
                    Tableaux des succés réalisé
                                     
                    -------- Paramètres --------
                    
                    * Parametre de blocage
                    * Parametre de message & notif
                                                         
                     ---------Profil Non Connecté--------
                       
                        Page de visuel de montrant la Photo à gauche de profil
                        avec en dessous une biographie et quelques infos mis dans la page Modifier profil
                        Ensuite sur tout le reste une Zone de texte pour vous si autorisé par les parametres
                        sur la droite en haut avec en bas des posts.
                        Au dessus de la zone de texte une banniere de la page de profil ciblé
                        Separer en 2 zones
                                                          
                    
                    
                 -->
        </div>
    </header>

    <!-- Menu et logo -->
    <div class="contener_menu">
        <div class="img_logo">
           <!--
           Gestion du logo
           Gérer dans "Gestion de contenu"           
           
           
           -->
            <img src="View/img/logoWarten.png" alt="Logo warten" width="100%" height="100%">
        </div>
        <nav>

            <ul>
                <?php
                for($i = 0;$i<count($lienMenu);$i++)
                   echo ' <li  ><a class="menu" href="'.$lienMenu[$i].'">'.$lienTexte[$i].'</a></li>';
                ?>
            </ul>
        </nav>
    </div>


</body>
   