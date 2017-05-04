<?php 
$SponsorDAO = new sponsorDAO();
$LesSponsors = $SponsorDAO->get_sponsor();


$ReseauxSociauxDAO = new reseauxsociauxDAO();
$LesReseauxSociaux = $ReseauxSociauxDAO->get_reseauxsociaux();

$MenuDAO = new menuDAO();
$LesMenus = $MenuDAO->get_menu();

include_once'View/Top.php';
?>