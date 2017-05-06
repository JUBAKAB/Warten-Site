<?php 
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
include_once'View/Top.php';


?>