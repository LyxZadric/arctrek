<?php

function getAllCategories(){

  global $connection;

  $query = "SELECT * FROM categorie";

  $stmt = $connection->prepare($query);
  $stmt->execute();

  return $stmt->fetchAll();

}

function getCategoriesById($id){

  global $connection;

  $query = "SELECT * FROM categorie WHERE categorie.id = :id";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->execute();

  return $stmt->fetch();

}

function insertCategorie($libelle){
  global $connection;

  $query = "INSERT INTO categorie(libelle)
            VALUES(:libelle)
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":libelle", $libelle);
  $stmt->execute();
}

function deleteCategorie($id){
  global $connection;

  $query = "DELETE FROM categorie WHERE categorie.id = :id
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->execute();

}

function updatecategorie($id, $libelle) {
    global $connection;

    $query = "UPDATE categorie SET
                libelle = :libelle
            WHERE categorie.id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}
