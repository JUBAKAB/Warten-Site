<h3>Edit Top.php</h3>

<?php 
foreach($LesMenus as $unMenu){
	echo($unMenu->get_libelle_fr());
	echo'</br>';
	echo($unMenu->get_libelle_en());
	
}



foreach($LesSponsors as $unSponsor){
	echo($unSponsor->get_nom());
	echo'</br>';
	echo($unSponsor->get_url());
	echo'</br>';
}
