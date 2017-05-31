<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$id = $_POST["id"];
$depart = $_POST["depart"];
$prix = $_POST["prix"];
$place = $_POST["place"];
$sejour_id = $_POST["sejour_id"];

updateDateDepart($id, $depart, $prix, $place, $sejour_id);

header("Location: index.php");
