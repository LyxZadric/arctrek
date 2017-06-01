<?php

require_once __DIR__ . '/model/database.php';

//Récupère les données venant de la page inscription.php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$mdp = $_POST["mdp"];
$mdp_confirm = $_POST["mdp_confirm"];

//test de la présence des variables POST
if(isset($nom) AND isset($prenom) AND isset($mail) AND isset($mdp) AND isset($mdp_confirm)){
  //Verification du mot de passe et de la confirmation du mot de passe
  //qui doivent être les mêmes pour pouvoir s'inscrire
  if($mdp == $mdp_confirm){
      inscriptionUtilisateur($nom, $prenom, $mail, md5($mdp))
  }else{//si mdp et mpd confirm != retour à inscription.php => Affichage d'un message d'erreur
    header("Location: inscription.php?login=error");
  }
}else{//si variable post non présentes
  header("Location: inscription.php?login=miss");
}


header("Location: inscription.php?login=succes");
