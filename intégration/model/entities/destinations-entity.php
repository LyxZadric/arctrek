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

function getDestinationById($id){
  global $connection;

  $query = "SELECT * FROM destination
            WHERE id = :id;
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->execute();

  return $stmt->fetch();
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

function deleteDestination($id){
  global $connection;

  $query = "DELETE FROM destination WHERE destination.id = :id
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->execute();

}

function updateDestination($id, $libelle, $image) {
    global $connection;

    $query = "UPDATE destination SET
                libelle = :libelle,
                image = :image
            WHERE destination.id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}
