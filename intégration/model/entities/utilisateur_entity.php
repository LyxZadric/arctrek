<?php
function getAllUsers(){

  global $connection;

  $query = "SELECT * FROM utilisateur";

  $stmt = $connection->prepare($query);
  $stmt->execute();

  return $stmt->fetchAll();

}

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

function addUtilisateur($nom, $prenom, $telephone, $adresse, $ville, $cp, $mail, $mdp, $admin){
  global $connection;

  $query = "INSERT INTO utilisateur(nom, prenom, telephone, adresse, ville, code_postale, mail, mdp, admin)
            VALUES (:nom,:prenom,:telephone, :adresse, :ville, :code_postale, :mail, :mdp, :admin)";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":nom", $nom);
  $stmt->bindParam(":prenom", $prenom);
  $stmt->bindParam(":telephone", $telephone);
  $stmt->bindParam(":adresse", $adresse);
  $stmt->bindParam(":ville", $ville);
  $stmt->bindParam(":code_postale", $cp);
  $stmt->bindParam(":mail", $mail);
  $stmt->bindParam(":mdp", $mdp);
  $stmt->bindParam(":admin", $admin);
  $stmt->execute();

}

function deleteUtilisateur($id){
  global $connection;

  $query = "DELETE FROM utilisateur WHERE utilisateur.id = :id
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->execute();

}

function updateUtilisateur($id, $admin){
  global $connection;

  $query = "UPDATE utilisateur SET admin = :admin WHERE id = :id;
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":admin", $admin);
  $stmt->bindParam(":id", $id);
  $stmt->execute();

}
