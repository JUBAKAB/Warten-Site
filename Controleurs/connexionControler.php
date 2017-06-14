<?php 

include_once 'Controleurs/authentificationControler.php';

$auth = new Authentification();

if(!isset($_POST['mail'])&&!isset($_POST['password'])){
	echo' non connecté';

	}else{

		$Login = $_POST['mail'];		
		$Mdp = $_POST['password'];
		$auth->login($Login,$Mdp);
			if ($auth->isLoggedOn()){
				echo'oui';
				
				
				}else{
					echo'non connecte';
					
		
					}

				}

	

	// A gérer une fois l'interface créer : voir les test.php en attendant			

include_once'View/Connexion.php';