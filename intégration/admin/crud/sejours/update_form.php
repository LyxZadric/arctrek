<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';
require_once __DIR__ . '/../../layout/header.php';

$id = $_GET["id"];
$sejour=  getAllInfoSejour($id);
$liste_destinations = getAllDestinations();
?>

<h1>Modifier un article</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="inputTitre">Titre</label>
        <input type="text" name="titre" value="<?php echo $sejour["titre"]; ?>" class="form-control" id="inputTitre" placeholder="Titre">
    </div>
    <div class="form-group">
        <label for="inputImage">Image</label>
        <input type="file" name="image" class="form-control" id="inputImage">
        <img src="<?php echo $website_root ?>img/<?php echo $sejour["image"]; ?>" class="img-thumbnail">
    </div>
    <div class="form-group">
        <label for="inputContenu">Contenu</label>
        <textarea name="contenu" class="form-control" id="inputContenu"><?php echo $sejour["contenu"]; ?></textarea>
    </div>
    <div class="form-group">
        <label for="difficulte">Difficulté</label>
        <input type="number" min="1" max="3" value="<?php echo $sejour["difficulte"]; ?>" name="difficulte" class="form-control" id="difficulte" placeholder="difficulte">
    </div>
    <div class="form-group">
        <label for="duree_sejour">Durée du séjour</label>
        <input type="number" min="1" max="100" value="<?php echo $sejour["duree_sejour"]; ?>" name="duree_sejour" class="form-control" id="duree_sejour" placeholder="duree_sejour">
    </div>
    <div class="form-group">
        <label for="prix">Prix</label>
        <input type="number" min="1" max="20000" value="<?php echo $sejour["prix"]; ?>" name="prix" class="form-control" id="prix" placeholder="prix">
    </div>
    <div class="form-group">
        <label for="itinéraire">Itinéraire</label>
        <textarea name="itineraire" class="form-control" id="inputItineraire"><?php echo $sejour["itinéraire"]; ?></textarea>
    </div>
    <div class="form-group">
        <label for="equipement">Equipement</label>
        <textarea name="equipement" class="form-control" id="inputEquipement"><?php echo $sejour["equipement"]; ?></textarea>
    </div>
    <div class="form-group">
        <label for="formalite">Formalite</label>
        <textarea name="formalite" class="form-control" id="inputFormalite"><?php echo $sejour["formalite"]; ?></textarea>
    </div>
    <div class="form-group">
        <label for="sante">Santé</label>
        <textarea name="sante" class="form-control" id="inputSante"><?php echo $sejour["sante"]; ?></textarea>
    </div>
    <div class="form-group">
        <label for="climat">Climat</label>
        <textarea name="climat" class="form-control" id="inputClimat"><?php echo $sejour["climat"]; ?></textarea>
    </div>
    <div class="form-group">
        <label for="destination">Destination</label>
        <select name="destination_id" class="form-control" id="destination">
            <?php foreach ($liste_destinations as $destination) : ?>
            <option value="<?php echo $destination["id"]; ?>" <?php if ($destination["id"] == $sejour["destination_id"]) : ?>selected<?php endif; ?>>
                <?php echo $destination["libelle"]; ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="hidden" name="id" value="<?php echo $sejour["id"]; ?>">
    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
