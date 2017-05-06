<?php




$MenuDAO = new menuDAO();
$LesMenus = $MenuDAO->get_menu();



$SponsorDAO = new sponsorDAO();
$LesSponsors = $SponsorDAO->get_sponsor();

foreach ($LesMenus as $unMenu) {

	$lienMenu[] = $unMenu->get_lien();
	$lienTexte[] = $unMenu->get_libelle_fr();

}


foreach ($LesSponsors as $unSponsor) {
	
	$lienSponsor[] = $unSponsor->get_url();
	$imageSponsor[] = $unSponsor->get_image();

}

include_once('View/Accueil.php');
?>