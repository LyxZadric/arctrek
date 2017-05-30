<?php

require_once __DIR__ . '/model/database.php';


$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$mdp = $_POST["mdp"];
$mdp_confirm = $_POST["mdp_confirm"];

if(isset($nom) AND isset($prenom) AND isset($mail) AND isset($mdp) AND isset($mdp_confirm)){

    inscriptionUtilisateur($nom, $prenom, $mail, md5($mdp));

}else{
  header("Location: inscription.php?login=error");
}


header("Location: inscription.php?login=succes");
