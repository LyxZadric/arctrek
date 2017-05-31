<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';
require_once __DIR__ . '/../../layout/header.php';

$id = $_GET["id"];
$date_depart = getDateDepartById($id);
?>

<h1>Modifier une date de départ</h1>

<form action="insert_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="depart">Depart</label>
        <input type="date" name="depart" value="<?php echo $date_depart['depart'];?>" class="form-control" id="titre" placeholder="Date de départ">
    </div>
    <div class="form-group">
        <label for="prix">Prix</label>
          <input type="number" min="1" max="20000" value="<?php echo $date_depart['prix'];?>" name="prix" class="form-control" id="titre" placeholder="prix">
    </div>
    <div class="form-group">
        <label for="place">Nombre de places</label>
          <input type="number" min="1" max="100" value="<?php echo $date_depart['place'];?>" name="place" class="form-control" id="titre" placeholder="Nombre de places">
    </div>

    <input type="hidden" name="sejour_id" value="<?php echo $date_depart['sejour_id'];?>">

    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>


<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
