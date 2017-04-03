<?php include_once 'DAO/mainDAO.inc.php';  
 include_once 'Object/mainObject.inc.php';
 ?>

		<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>DataToObject Generator </title>
    </head>

    <body>
    <h1>Result generate by the script</h1>
    <?php $Exampleactivite = new activiteDAO();
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
print_r($Exampleactivite->get_activite());
print_r($Examplearticles->get_articles());
print_r($Examplebiographie->get_biographie());
print_r($Examplegrade->get_grade());
print_r($Examplejoursemaine->get_joursemaine());
print_r($Examplelangues->get_langues());
print_r($Examplemain_settings->get_main_settings());
print_r($Examplemembre->get_membre());
print_r($Exampleplanning->get_planning());
print_r($Exampleprestation->get_prestation());
print_r($Examplerel_planning_joursemaine->get_rel_planning_joursemaine());
print_r($Examplereseauxsociaux->get_reseauxsociaux());
print_r($Examplesponsor->get_sponsor());
?></body>
</html>