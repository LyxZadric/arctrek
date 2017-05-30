<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$image = $_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"], __DIR__ . "/../../../images-finales/actus/" . $image);

$titre = $_POST["titre"];
$contenu = $_POST["contenu"];
$categorie = $_POST["categorie"];

addArticle($titre, $contenu, $image, $categorie, $current_user["id"]);

header("Location: index.php");
