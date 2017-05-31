<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';
require_once __DIR__ . '/../../layout/header.php';

$id = $_GET["id"];
$destination = getDestinationById($id);

?>

<h1>Modifier une destination</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="inputLibelle">Nom destination</label>
        <input type="text" name="libelle" value="<?php echo $destination["libelle"]; ?>" class="form-control" id="inputTitre" placeholder="Titre">
    </div>
    <div class="form-group">
        <label for="inputImage">Image</label>
        <input type="file" name="image" class="form-control" id="inputImage">
        <img src="<?php echo $website_root ?>img/<?php echo $destination["image"]; ?>" class="img-thumbnail">
    </div>


    <input type="hidden" name="id" value="<?php echo $destination["id"]; ?>">
    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
