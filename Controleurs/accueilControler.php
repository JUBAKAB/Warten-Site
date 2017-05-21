<?php


$ArticlesDAO = new articlesDAO();
$LesArticles = $ArticlesDAO->get_articles();



$BiographieDAO = new biographieDAO();
$LaBiographie = $BiographieDAO->get_biographie();

include_once('View/Accueil.php');
?>