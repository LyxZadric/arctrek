<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';
require_once __DIR__ . '/../../layout/header.php';

$id = $_GET["id"];
$utilisateur = getUser($id);

?>

<h1>Modifier le status d'un utilisateur</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
      <label for="nom">Nom : <?php echo $utilisateur['nom'];?></label>
  </div>
  <div class="form-group">
      <label for="prenom">Prénom : <?php echo $utilisateur['prenom'];?></label>
  </div>
  <div class="form-group">
      <label for="email">E-mail : <?php echo $utilisateur['mail'];?></label>
  </div>


  <div class="form-group">
      <label for="inputStatus">Status utilisateur (0 : utilisateur, 1: admin)</label>
      <input type="number" min="0" max="1" name="admin" value="<?php echo $utilisateur["admin"];?>" class="form-control" id="inputTitre" placeholder="Titre">
  </div>

    <input type="hidden" name="id" value="<?php echo $utilisateur["id"]; ?>">
    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
