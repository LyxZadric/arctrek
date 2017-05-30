<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$nom = $_POST["nom"];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$cp = $_POST['code_postal'];
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$admin = $_POST['admin'];

ajoutUtilisateur($nom, $prenom, $telephone, $adresse, $ville, $cp,$mail, $mdp,$admin);

header("Location: index.php");
