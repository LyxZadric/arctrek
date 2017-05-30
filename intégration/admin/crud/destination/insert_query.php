<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$image = $_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"], __DIR__ . "/../../../img/" . $image);

$libelle = $_POST["libelle"];

addDestination($libelle, $image);

header("Location: index.php");
