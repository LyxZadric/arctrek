<?php

function getAllDestinations() {
    global $connection;

    $query = "SELECT * FROM destination
              ORDER BY id
              ";

    $stmt = $connection->prepare($query);
    //$stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
