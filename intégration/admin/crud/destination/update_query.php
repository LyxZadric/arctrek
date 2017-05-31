<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$id = $_POST["id"];
$libelle = $_POST["libelle"];

if ($_FILES["image"]["name"] != "") {
    // Upload de la nouvelle image
    $image = $_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], __DIR__ . "/../../../img/" . $image);
} else {
    // Le nom de l'image ne change pas
    $destination = getDestinationById($id);
    $image = $destination["image"];
}


updateDestination($id, $libelle, $image);

header("Location: index.php");
