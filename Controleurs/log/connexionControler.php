<?php 

include_once 'Controleurs/log/authentificationControler.php';


/*Donnée envoyée et transmise*/
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





/*Corp de la page*/
include_once'View/include/Connexion.php';
