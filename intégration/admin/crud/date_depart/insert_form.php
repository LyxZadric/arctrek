<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';
require_once __DIR__ . '/../../layout/header.php';

$sejour_id = $_GET['id'];
?>

<h1>Ajouter une date de départ</h1>

<form action="insert_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="depart">Depart</label>
        <input type="date" name="depart" class="form-control" id="titre" placeholder="Date de départ">
    </div>
    <div class="form-group">
        <label for="prix">Prix</label>
          <input type="number" min="1" max="20000" name="prix" class="form-control" id="titre" placeholder="prix">
    </div>
    <div class="form-group">
        <label for="place">Nombre de places</label>
          <input type="number" min="1" max="100" name="place" class="form-control" id="titre" placeholder="Nombre de places">
    </div>

    <input type="hidden" name="sejour_id" value="<?php echo $sejour_id;?>">

    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
