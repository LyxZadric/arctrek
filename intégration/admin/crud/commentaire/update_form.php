<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';
require_once __DIR__ . '/../../layout/header.php';

$id = $_GET["id"];
$commentaire = getCommentById($id);
?>

<h1>Modifier un commentaire</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="inputTitre">Titre</label>
        <input type="text" name="titre" value="<?php echo $commentaire["titre"]; ?>" class="form-control" id="inputTitre" placeholder="Titre">
    </div>
    <div class="form-group">
        <label for="inputContenu">Contenu</label>
        <textarea name="contenu" class="form-control" id="inputContenu"><?php echo $commentaire["contenu"]; ?></textarea>
    </div>
    <input type="hidden" name="id" value="<?php echo $commentaire["id"]; ?>">
    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
