<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$id = $_POST['id'];
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
$destination_id= $_POST['destination_id'];

if ($_FILES["image"]["name"] != "") {
    // Upload de la nouvelle image
    $image = $_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], __DIR__ . "/../../../images-finales/actus" . $image);
} else {
    // Le nom de l'image ne change pas
    $article = getAllInfoSejour($id);
    $image = $article["image"];
}


updateSejour($id,$titre, $contenu,$difficulte, $duree_sejour, $prix,
                      $itineraire, $equipement, $formalite, $sante, $climat, $image, $destination_id);

header("Location: index.php");
