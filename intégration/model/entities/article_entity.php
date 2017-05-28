<?php

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
              INNER JOIN utilisateur_has_article ON utilisateur_has_article.article_id = article.id
              INNER JOIN utilisateur ON utilisateur.id = utilisateur_has_article.utilisateur_id
              WHERE article.id = :id
              AND article.categorie_id = :cat;
              ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":cat", $cat);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllArticle($cat) {
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
              INNER JOIN utilisateur_has_article ON utilisateur_has_article.article_id = article.id
              INNER JOIN utilisateur ON utilisateur.id = utilisateur_has_article.utilisateur_id
              WHERE article.categorie_id = :cat;
              ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":cat", $cat);
    $stmt->execute();

    return $stmt->fetchAll();
}
