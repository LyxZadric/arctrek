<?php
function getAllCommentaires(){

  global $connection;

  $query = "SELECT commentaire.id,
                   commentaire.titre,
	                 commentaire.contenu,
	                 DATE_FORMAT(MIN(commentaire.date_creation), '%d/%m/%Y') AS 'date_creation',
	                 CONCAT(utilisateur.nom, ' ' , utilisateur.prenom) AS user
            FROM commentaire
            INNER JOIN sejour ON sejour.id = commentaire.sejour_id
            INNER JOIN utilisateur ON utilisateur.id = commentaire.utilisateur_id
            ";

  $stmt = $connection->prepare($query);
  $stmt->execute();

  return $stmt->fetchAll();
}

function getCommentBySejourId($id){

  global $connection;

  $query = "SELECT commentaire.titre,
	                 commentaire.contenu,
	                 DATE_FORMAT(MIN(commentaire.date_creation), '%d/%m/%Y') AS 'date_creation',
	          CONCAT(utilisateur.nom, ' ' , utilisateur.prenom) AS user
            FROM commentaire
            INNER JOIN sejour ON sejour.id = commentaire.sejour_id
            INNER JOIN utilisateur ON utilisateur.id = commentaire.utilisateur_id
            WHERE sejour.id = :id
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->execute();

  return $stmt->fetchAll();
}

function getCommentById($id){

  global $connection;

  $query = "SELECT commentaire.id,
                   commentaire.titre,
	                 commentaire.contenu,
	                 DATE_FORMAT(MIN(commentaire.date_creation), '%d/%m/%Y') AS 'date_creation',
	          CONCAT(utilisateur.nom, ' ' , utilisateur.prenom) AS 'user'
            FROM commentaire
            INNER JOIN utilisateur ON utilisateur.id = commentaire.utilisateur_id
            WHERE commentaire.id = :id;
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->execute();

  return $stmt->fetch();
}


function addCommentaire($titre, $contenu, $sejour_id, $utilisateur_id){
  global $connection;

  $query = "INSERT INTO commentaire(titre, contenu, date_creation, sejour_id, utilisateur_id)
            VALUES(:titre, :contenu, NOW(), :sejour_id, :utilisateur_id)
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":titre", $titre);
  $stmt->bindParam(":contenu", $contenu);
  $stmt->bindParam(":sejour_id", $sejour_id);
  $stmt->bindParam(":utilisateur_id", $utilisateur_id);
  $stmt->execute();
}

function deleteCommentaire($id){
  global $connection;

  $query = "DELETE FROM commentaire WHERE commentaire.id = :id
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->execute();
}

function updateCommentaire($id, $titre, $contenu){
  global $connection;

  $query = "UPDATE commentaire SET
              titre = :titre,
              contenu = :contenu
            WHERE commentaire.id = :id
  ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":titre", $titre);
  $stmt->bindParam(":contenu", $contenu);
  $stmt->bindParam(":id", $id);
  $stmt->execute();
}
