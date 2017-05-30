<?php
function getAllArticles(){

  global $connection;

  $query = "SELECT article.id,
	                 article.titre,
	                 article.contenu,
		               article.date_creation,
		               article.image,
		               article.categorie_id,
		               article.utilisateur_id,
		                 CONCAT(utilisateur.nom, ' ' ,utilisateur.prenom) AS 'utilisateur'
            FROM article
            INNER JOIN utilisateur ON utilisateur.id = article.utilisateur_id
            ORDER BY date_creation DESC";

  $stmt = $connection->prepare($query);
  $stmt->execute();

  return $stmt->fetchAll();
}

function getArticlesByCategorie($id) {
    global $connection;

    $query = "SELECT article.id,
	                   article.titre,
		                 article.contenu,
		                 article.date_creation,
		                 article.image,
		                 article.categorie_id
              FROM article
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

function getArticle($id, $cat) {
    global $connection;

    $query = "SELECT article.id,
		                  article.titre,
		                  article.contenu,
		                  article.date_creation,
		                  article.image,
		                  article.categorie_id,
		                  CONCAT(utilisateur.nom,' ',utilisateur.prenom) AS auteur
              FROM article
              INNER JOIN categorie ON categorie.id = article.categorie_id
              INNER JOIN utilisateur ON utilisateur.id = article.utilisateur_id
              WHERE article.id = :id
              AND article.categorie_id = :cat;
              ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":cat", $cat);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllArticleByCat($cat) {
    global $connection;

    $query = "SELECT article.id,
		                  article.titre,
		                  article.contenu,
		                  article.date_creation,
		                  article.image,
		                  article.categorie_id,
                      categorie.libelle,
		                  CONCAT(utilisateur.nom,' ',utilisateur.prenom) AS auteur
              FROM article
              INNER JOIN categorie ON categorie.id = article.categorie_id
              INNER JOIN utilisateur ON utilisateur.id = article.utilisateur_id
              WHERE article.categorie_id = :cat;
              ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":cat", $cat);
    $stmt->execute();

    return $stmt->fetchAll();
}

function addArticle($titre, $contenu, $image, $categorie_id, $utilisateur_id){
  global $connection;

  $query = "INSERT INTO article(titre, contenu, date_creation, image, categorie_id, utilisateur_id)
            VALUES(:titre, :contenu, NOW(), :image, :categorie_id, :utilisateur_id)
            ";

  $stmt = $connection->prepare($query);
  $stmt->bindParam(":titre", $titre);
  $stmt->bindParam(":contenu", $contenu);
  $stmt->bindParam(":image", $image);
  $stmt->bindParam(":categorie_id", $categorie_id);
  $stmt->bindParam(":utilisateur_id", $utilisateur_id);
  $stmt->execute();
}
