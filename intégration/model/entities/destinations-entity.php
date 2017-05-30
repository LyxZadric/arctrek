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

function addDestination($libelle, $image){
  global $connection;

  $query = "INSERT INTO destination(libelle, image)
            VALUES(:libelle, :image)
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":libelle", $libelle);
  $stmt->bindParam(":image", $image);
  $stmt->execute();
}
