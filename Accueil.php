<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accueil</title>
</head>

<body>



<?php foreach($LesArticles as $unArticle){
	echo($unArticle->get_titre());
		echo'</br>';
	echo($unArticle->get_texte_fr());
	echo'</br>';
	echo($unArticle->get_texte_en());
	echo'</br>';
	echo($unArticle->get_image());
	echo'</br>';
}
	
	
	foreach($LaBio as $Biographie){
		echo($Biographie->get_titre());
			 echo'</br>';
		echo($Biographie->get_texte_fr());
			echo('</br>');
		
		echo($Biographie->get_texte_en());
			echo('</br>');
	}
	foreach($LesReseauxSociaux as $unReseauSocial){
		echo($unReseauSocial->get_nom());
		echo'</br>';
		echo($unReseauSocial->get_url());
		echo'</br>';
	}
	
	
	
		foreach($LesSponsors as $unSponsor){
		echo($unSponsor->get_nom());
		echo'</br>';
		echo($unSponsor->get_url());
		echo'</br>';
	}
	?>
</body>
</html>