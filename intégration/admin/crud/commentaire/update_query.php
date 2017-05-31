<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$id = $_POST["id"];
$titre = $_POST["titre"];
$contenu = $_POST["contenu"];

updateCommentaire($id, $titre, $contenu);

header("Location: index.php");
