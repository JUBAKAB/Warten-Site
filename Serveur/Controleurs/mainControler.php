<?php


require_once('mainDAO.inc.php');
include_once('topControler.php');

if(isset($_GET['link'])){

	switch ($_GET['link']) {
		case 'sponsor':
			include_once('sponsorControler.php');
			break;
		case 'accueil':
			include_once('accueilControler.php');
			break;
		default:
			include_once('accueilControler.php');
			break;
	}
	
}else{
include_once('accueilControler.php');

}

include_once('Controleurs/botControler.php');?>
