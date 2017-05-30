<?php

function getUser($id){

  global $connection;

  $query = "SELECT
          utilisateur.id,
          utilisateur.nom,
          utilisateur.prenom,
          utilisateur.mail,
          utilisateur.admin
      FROM utilisateur
      WHERE utilisateur.id = :id
  ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  return $stmt->fetch();


}
function getUserByEmailPassword($email, $password) {
    global $connection;

    $query = "SELECT
            utilisateur.id,
            utilisateur.nom,
            utilisateur.prenom,
            utilisateur.mail,
            utilisateur.admin
        FROM utilisateur
        WHERE utilisateur.mail = :email
        AND utilisateur.mdp = md5(:password);
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    return $stmt->fetch();
}

function inscriptionUtilisateur($nom, $prenom, $mail, $mdp){
  global $connection;

  $query = "INSERT INTO utilisateur(nom, prenom, mail, mdp, admin) VALUES (:nom,:prenom, :mail, :mdp, 0);";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":nom", $nom);
  $stmt->bindParam(":prenom", $prenom);
  $stmt->bindParam(":mail", $mail);
  $stmt->bindParam(":mdp", $mdp);
  $stmt->execute();
}
