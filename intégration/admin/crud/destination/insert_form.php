<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';
require_once __DIR__ . '/../../layout/header.php';

$liste_destinations = getAllDestinations();
?>

<h1>Ajouter une destination</h1>

<form action="insert_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="libelle">Libelle</label>
        <input type="text" name="libelle" class="form-control" id="libelle" placeholder="libelle">
    </div>
    <div class="form-group">
        <label for="inputImage">Image</label>
        <input type="file" name="image" class="form-control" id="inputImage">
    </div>
    
    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
