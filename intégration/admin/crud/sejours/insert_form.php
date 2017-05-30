<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../layout/header.php';

$destinations = getAllDestinations();
?>

<h1>Ajouter un séjour </h1>

<form action="insert_query.php" method="POST">
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" name="titre" class="form-control" id="titre" placeholder="titre">
    </div>
    <div class="form-group">
        <label for="contenu">Contenu</label>
        <input type="text" name="contenu" class="form-control" id="contenu" placeholder="contenu">
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" id="contenu" placeholder="image">
    </div>
    <div class="form-group">
        <label for="difficulte">Difficulté</label>
        <input type="number" min="1" max="3" name="difficulte" class="form-control" id="difficulte" placeholder="difficulte">
    </div>
    <div class="form-group">
        <label for="duree_sejour">Durée du séjour</label>
        <input type="number" min="1" max="100" name="duree_sejour" class="form-control" id="duree_sejour" placeholder="duree_sejour">
    </div>
    <div class="form-group">
        <label for="prix">Prix</label>
        <input type="number" min="1" max="20000" name="prix" class="form-control" id="prix" placeholder="prix">
    </div>
    <div class="form-group">
        <label for="itinéraire">Itinéraire</label>
        <textarea name="itineraire" class="form-control" id="inputItineraire"></textarea>
    </div>
    <div class="form-group">
        <label for="equipement">Equipement</label>
        <textarea name="equipement" class="form-control" id="inputEquipement"></textarea>
    </div>
    <div class="form-group">
        <label for="formalite">Formalite</label>
        <textarea name="formalite" class="form-control" id="inputFormalite"></textarea>
    </div>
    <div class="form-group">
        <label for="sante">Santé</label>
        <textarea name="sante" class="form-control" id="inputSante"></textarea>
    </div>
    <div class="form-group">
        <label for="climat">Climat</label>
        <textarea name="climat" class="form-control" id="inputClimat"></textarea>
    </div>
    <div class="form-group">
        <label for="destination_id">Destination</label>
        <select name="destination_id" class="form-control" id="inputDestination">
          <?php foreach ($destinations as $destination) :?>
            <option value="<?php echo $destination['id'];?>">
              <?php echo $destination['libelle'];?>
            </option>
          <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Ajouter
    </button>
</form>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
