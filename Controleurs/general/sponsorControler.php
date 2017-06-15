<?php
/*Donnée envoyée et transmise*/
$SponsorDAO  = new SponsorDAO();
$LesSponsors = $SponsorDAO->get_sponsor();
foreach ($unSponsor as $LesSponsors) {
                        echo $unSponsor->get_nom();
                        echo $unSponsor->get_texte_fr();
                    }
/*Corp de la page*/
include_once'View/include/general/Sponsor.php';

?>