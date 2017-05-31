<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';
require_once __DIR__ . '/../../layout/header.php';

$sejour_id = $_GET['id'];
?>

<h1>Ajouter un commentaire</h1>

<form action="insert_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" name="titre" class="form-control" id="titre" placeholder="titre">
    </div>
    <div class="form-group">
        <label for="contenu">Contenu</label>
        <textarea name="contenu" class="form-control" id="inputContenu"></textarea>
    </div>

    <input type="hidden" name="sejour_id" value="<?php echo $sejour_id;?>">

    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
