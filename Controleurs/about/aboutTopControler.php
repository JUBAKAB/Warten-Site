<?php

/*Donnée envoyée et transmise*/
$ReseauxSociauxDAO = new reseauxsociauxDAO();
$LesReseauxSociaux = $ReseauxSociauxDAO->get_reseauxsociaux();
$LanguesDAO = new languesDAO();
$LesLangues = $LanguesDAO->get_langues();
foreach ($LesReseauxSociaux as $unReseauSocial) {
	$lien[] = $unReseauSocial->get_url();
	$pathpicture[] = $unReseauSocial->get_nom();
}
foreach ($LesLangues as $uneLangue) {
	$langue_url[] = $uneLangue->get_libcourt();
}
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


/*Corp de la page*/
include_once'View/include/about/HeaderAbout.php';
include_once'View/include/general/Top.php';



?>
