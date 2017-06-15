<?php 
/*Une classe dans un CONTROLLER ??*/


//Classe à utiliser pour se connecter
class Authentification{
	
	public function login($mailU,$mdpU) {
		if (!isset($_SESSION)){
			//session_start();
		}
		
		$unMembreDAO = new membreDAO();		
		$util = $unMembreDAO->get_membre_by_mail($mailU);
	

		if ($util){


			$mdpBD = $util->get_password();

		
			if ($mdpBD == (sha1($mdpU))){
				// le mot de passe est celui de l'utilisateur dans la base de donnees
				$_SESSION["mail"]=$mailU;
				$_SESSION["mdp"]=$mdpBD;
			}
		}
	}
	

// Logout utilisateur
	public function logout() {
		if(!isset($_SESSION)){
			session_start();
		}else{
		session_destroy();		
}
	}
	

// Est-il connecté ? renvoit true or false
	public function isLoggedOn() {
		
		if (!isset($_SESSION)){
			session_start();
		}
		$ret = false;
	
		if (isset($_SESSION["mail"])){

			$unMembreDAO = new membreDAO();
			$util = $unMembreDAO->get_membre_by_mail( $_SESSION["mail"]);
			if ( $util->get_login() == $_SESSION["mail"]
			  && $util->get_password() == $_SESSION["mdp"]
			 ) {
			$ret = true;
				
			}
		}
		return $ret ;
	}

//Renvoit un objet membre si l'utilisateur est connecté sur la session
Public function getUtilisateurLoggedOn(){
	if($this->isLoggedOn()){
		$MembreLogged = new membreDAO();
		$util =$MembreLogged->get_membre_by_mail($_SESSION['mail']);
	
	return $util;
	}else{
		return null;
	}
}




}





?>