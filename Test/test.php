<?php
     session_start();
     include_once '../DAO/Param/mainDAO.inc.php';  
     include_once '../Object/param/mainObject.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Test Donnnées </title>
    </head>
<body>
<h1>Données brutes</h1>
<?php 
        
$Exampleactivite = new activiteDAO();
$Examplearticles = new articlesDAO();
$Examplebiographie = new biographieDAO();
$Examplegrade = new gradeDAO();
$Examplejoursemaine = new joursemaineDAO();
$Examplelangues = new languesDAO();
$Examplemain_settings = new main_settingsDAO();
$Examplemembre = new membreDAO();
$Exampleplanning = new planningDAO();
$Exampleprestation = new prestationDAO();
$Examplerel_planning_joursemaine = new rel_planning_joursemaineDAO();
$Examplereseauxsociaux = new reseauxsociauxDAO();
$Examplesponsor = new sponsorDAO();
        
        
        
echo'/-----------------ACTIVITE/-----------------';
echo'</br>';
print_r($Exampleactivite->get_activite());echo'</br>';
echo'/-----------------ARTICLE/-----------------';
echo'</br>';
print_r($Examplearticles->get_articles());echo'</br>';
echo'/-----------------BIO/-----------------';
echo'</br>';
print_r($Examplebiographie->get_biographie());echo'</br>';
echo'/-----------------GRADE/-----------------';
echo'</br>';
print_r($Examplegrade->get_grade());echo'</br>';
echo'/-----------------JOURSEMAINE/-----------------';
echo'</br>';
print_r($Examplejoursemaine->get_joursemaine());echo'</br>';
echo'/-----------------LANGUES/-----------------';
echo'</br>';
print_r($Examplelangues->get_langues());echo'</br>';
echo'/-----------------SETTINGS/-----------------';
echo'</br>';
print_r($Examplemain_settings->get_main_settings());echo'</br>';
echo'/-----------------MEMBRE/-----------------';
echo'</br>';
print_r($Examplemembre->get_membre());echo'</br>';
echo'/-----------------PLANNING/-----------------';
echo'</br>';
print_r($Exampleplanning->get_planning());echo'</br>';
echo'/-----------------PRESTATION/-----------------';
echo'</br>';
print_r($Exampleprestation->get_prestation());echo'</br>';
echo'/-----------------REL _ Plaaning jour semaine/-----------------';
echo'</br>';
print_r($Examplerel_planning_joursemaine->get_rel_planning_joursemaine());echo'</br>';
echo'/-----------------RESEAUX SOCIAUX/-----------------';
echo'</br>';
print_r($Examplereseauxsociaux->get_reseauxsociaux());echo'</br>';
echo'/-----------------SPONSOR/-----------------';
echo'</br>';
print_r($Examplesponsor->get_sponsor());echo'</br>';
echo'<br>';
echo' ---------------------- TEST CONNEXION UTILISATEUR ------------------------ ' ;
include_once"Controleurs/authentificationControler.php";

    $auth = new Authentification();
	// connexion
	$auth->login("charly.strn@gmail.com","1234");
	echo'<br>';
	echo "Mail utilisé : charly.strn@gmail.com";
	echo'<br>';
	echo "Mdp utilisé : 1234";
	echo'<br>';
	echo " Statut renvoyé par le script: ";
	// test de connexion
	if ($auth->isLoggedOn()){
		echo "logged";
	}
	else{
		echo "not logged";
	}
	echo'<br>';
	echo' ----------------------------------------------------------------------------------------------- ' ;
	// deconnexion
	$auth->logout();
?>
</body>
</html>