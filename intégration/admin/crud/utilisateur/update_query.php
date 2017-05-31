<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$id = $_POST["id"];
$admin = $_POST["admin"];

updateUtilisateur($id, $admin);

header("Location: index.php");
