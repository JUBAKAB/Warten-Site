<?php 

include_once 'Controleurs/authentification.php';

$auth = new Authentification();
/*
if(!isset($_POST['login'])&&!isset($_POST['pass'])){
	include "../vues/vueNonConnecte.php";

	}else{

		$Login = $_POST['login'];		
		$Mdp = $_POST['pass'];
		$auth->login($Login,$Mdp);
			if ($auth->isLoggedOn()){
				include"../vues/vueConnecte.php";
				$utilisateurConnecte = $auth->getUtilisateurLoggedOn;
				
				}else{
					include "../vues/vueNonConnecte.php";
					
		
					}

				}

	

	*/

	// A gérer une fois l'interface créer : voir les test.php en attendant			

