<?php

function getArticlesByCategorie($id) {
    global $connection;

    $query = "SELECT * FROM article
              INNER JOIN categorie ON categorie.id = article.categorie_id
              WHERE categorie_id = :id
              ORDER BY article.date_creation DESC
              LIMIT 2;
              ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
