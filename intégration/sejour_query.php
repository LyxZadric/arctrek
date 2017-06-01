<?php

require_once __DIR__ . '/model/database.php';


$id_sejour = $_POST["id_sejour"];
$id_depart = $_POST["id_depart"];


header("Location: reservation.php?id");
