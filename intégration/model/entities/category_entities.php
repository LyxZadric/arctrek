<?php

function getAllCategories(){

  global $connection;

  $query = "SELECT * FROM categorie";

  $stmt = $connection->prepare($query);
  $stmt->execute();

  return $stmt->fetchAll();

}
