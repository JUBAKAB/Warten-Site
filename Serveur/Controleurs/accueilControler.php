<?php




$ArticleDAO = new articlesDAO();
$LesArticles = $ArticleDAO->get_articles();

$BiographieDAO = new biographieDAO();
$LaBio = $BiographieDAO->get_biographie();


$PrestationDAO = new prestationDAO();
$LesPrestations = $PrestationDAO->get_prestation();





include_once('View/Accueil.php');
?>