<?php




$ArticleDAO = new articlesDAO();
$LesArticles = $ArticleDAO->get_articles();

$BiographieDAO = new biographieDAO();
$LaBio = $BiographieDAO->get_biographie();


$ReseauxSociauxDAO = new reseauxsociauxDAO();
$LesReseauxSociaux = $ReseauxSociauxDAO->get_reseauxsociaux();

$SponsorDAO = new sponsorDAO();
$LesSponsors = $SponsorDAO->get_sponsor();


$PrestationDAO = new prestationDAO();
$LesPrestations = $PrestationDAO->get_prestation();





include_once('Accueil.php');
?>