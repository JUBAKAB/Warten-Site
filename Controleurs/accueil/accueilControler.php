<?php
/*Donnée envoyée et transmise*/
$ArticlesDAO = new articlesDAO();
$LesArticles = $ArticlesDAO->get_articles();
$BiographieDAO = new biographieDAO();
$LaBiographie = $BiographieDAO->get_biographie();
/*Corp de la page*/
include_once('View/include/accueil/BodyAccueil.php');
?>