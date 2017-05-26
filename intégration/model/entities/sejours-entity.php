<?php

function getSejours($id) {
    global $connection;

    $query = "SELECT  sejour.id,
		sejour.titre,
		sejour.contenu,
		sejour.difficulte,
		sejour.duree_sejour,
		sejour.prix,
		sejour.image,
		destination.id,
		destination.libelle,
		DATE_FORMAT(MIN(date_depart.depart), '%d-%m-%Y') AS 'depart'
FROM sejour
INNER JOIN destination ON destination.id = sejour.destination_id
INNER JOIN sejour_has_date_depart ON sejour_has_date_depart.sejour_id = sejour.id
INNER JOIN date_depart ON date_depart.id = sejour_has_date_depart.date_depart_id
WHERE destination_id = :id
GROUP BY sejour.id
LIMIT 2;
";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
