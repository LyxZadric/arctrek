<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';


$titre = $_POST["titre"];
$contenu = $_POST["contenu"];
$sejour_id = $_POST["sejour_id"];

addCommentaire($titre, $contenu, $sejour_id, $current_user["id"]);

header("Location: index.php");
