<?php

function getAllDateDepart(){

    global $connection;

    $query = "SELECT date_depart.id,
                     DATE_FORMAT(MIN(date_depart.depart), '%d/%m/%Y') AS 'depart',
  	                 date_depart.prix,
  	                 date_depart.place,
  	                 sejour.titre AS 'sejour',
                     destination.libelle AS 'destination'
              FROM date_depart
              INNER JOIN sejour ON sejour.id = date_depart.sejour_id
              INNER JOIN destination ON destination.id = sejour.destination_id
			        ORDER BY sejour.id;
              ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getDateDepartById($id){

  global $connection;

  $query = "SELECT date_depart.id,
                   DATE_FORMAT(MIN(date_depart.depart), '%d/%m/%Y') AS 'depart',
	                 date_depart.prix,
	                 date_depart.place,
                   date_depart.sejour_id,
                   sejour.titre AS 'sejour',
                   destination.libelle AS 'destination'
               FROM date_depart
               INNER JOIN sejour ON sejour.id = date_depart.sejour_id
               INNER JOIN destination ON destination.id = sejour.destination_id
 			         WHERE date_depart.id = :id
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->execute();

  return $stmt->fetch();
}

function getDateDepartBySejourId($id){

  global $connection;

  $query = "SELECT date_depart.id,
                   date_depart.depart,
	                 date_depart.prix,
	                 date_depart.place,
					         date_depart.sejour_id
               FROM date_depart
			   WHERE date_depart.sejour_id = :id;
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->execute();

  return $stmt->fetchAll();
}

function addDateDepart($depart, $prix, $place, $sejour_id){
  global $connection;

  $query = "INSERT INTO date_depart(depart,prix, place, sejour_id)
            VALUES(:depart,:prix, :place, :sejour_id)
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":depart", $depart);
  $stmt->bindParam(":prix", $prix);
  $stmt->bindParam(":place", $place);
  $stmt->bindParam(":sejour_id", $sejour_id);
  $stmt->execute();
}

function deleteDateDepart($id){
  global $connection;

  $query = "DELETE FROM date_depart WHERE date_depart.id = :id
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->execute();
}

function updateDateDepart($id, $depart, $prix, $place, $sejour_id){
  global $connection;

  $query = "UPDATE date_depart SET
              depart = :depart,
              prix = :prix,
              place = :place,
              sejour_id = :sejour_id
            WHERE id = :id
  ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->bindParam(":depart", $depart);
  $stmt->bindParam(":prix", $prix);
  $stmt->bindParam(":place", $place);
  $stmt->bindParam(":sejour_id", $sejour_id);
  $stmt->execute();
}
