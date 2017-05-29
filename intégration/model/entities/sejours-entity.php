<?php

function getSejours($id) {
    global $connection;

    $query = "SELECT  sejour.id,
		                  sejour.titre,
		                  sejour.contenu,
		                  sejour.difficulte,
		                  sejour.duree_sejour,
		                  date_depart.prix AS 'prix',
		                  date_depart.depart AS 'depart',
		                  sejour.image,
		                  destination.id AS 'destination_id',
		                  destination.libelle
              FROM sejour
              INNER JOIN destination ON destination.id = sejour.destination_id
              INNER JOIN date_depart ON date_depart.sejour_id = sejour.id
              WHERE destination_id = :id
              LIMIT 2;
              ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllSejours($id) {
    global $connection;

    $query = "SELECT  sejour.id,
		                  sejour.titre,
		                  sejour.contenu,
		                  sejour.difficulte,
		                  sejour.duree_sejour,
		                  date_depart.prix AS 'prix',
		                  date_depart.depart AS 'depart',
		                  sejour.image,
		                  destination.id AS 'destination_id',
		                  destination.libelle
              FROM sejour
              INNER JOIN destination ON destination.id = sejour.destination_id
              INNER JOIN date_depart ON date_depart.sejour_id = sejour.id
              WHERE destination_id = :id
              GROUP BY sejour.id;
              ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllInfoSejour($id) {
    global $connection;

    $query = "SELECT  sejour.id,
		sejour.titre,
		sejour.contenu,
		sejour.difficulte,
		sejour.duree_sejour,
		sejour.prix,
		sejour.climat,
		sejour.sante,
		sejour.equipement,
    sejour.formalite,
		sejour.itinéraire,
		sejour.image,
		destination.id AS 'destination_id',
		destination.libelle,
		DATE_FORMAT(MIN(date_depart.depart), '%d-%m-%Y') AS 'depart'
FROM sejour
INNER JOIN destination ON destination.id = sejour.destination_id
INNER JOIN date_depart ON date_depart.sejour_id = sejour.id
WHERE sejour.id = :id;
";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getNbSejours($id) {
    global $connection;

    $query = "SELECT COUNT(sejour.id) AS 'nbsejours'
              FROM sejour
              WHERE destination_id = :id;
              ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
