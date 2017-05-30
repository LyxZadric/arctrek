<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$titre = $_POST["titre"];
$contenu = $_POST['contenu'];
$difficulte = $_POST['difficulte'];
$duree_sejour = $_POST['duree_sejour'];
$prix = $_POST['prix'];
$itineraire = $_POST['itineraire'];
$equipement = $_POST['equipement'];
$formalite = $_POST['formalite'];
$sante = $_POST['sante'];
$climat = $_POST['climat'];
$image = $_POST['image'];
$destination_id= $_POST['destination_id'];

addSejour($titre, $contenu, $difficulte, $duree_sejour, $prix, $itineraire ,$equipement,
                  $formalite,$sante, $climat, $image, $destination_id);

header("Location: index.php");
