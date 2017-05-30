<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../layout/header.php';
?>

<h1>Ajouter un tag</h1>

<form action="insert_query.php" method="POST">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" class="form-control" id="nom" placeholder="nom">
    </div>
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="prenom">
    </div>
    <div class="form-group">
        <label for="telephone">Téléphone</label>
        <input type="tel" name="telephone" class="form-control" id="telephone" placeholder="telephone">
    </div>
    <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="tel" name="adresse" class="form-control" id="adresse" placeholder="adresse">
    </div>
    <div class="form-group">
        <label for="ville">Ville</label>
        <input type="text" name="ville" class="form-control" id="ville" placeholder="ville">
    </div>
    <div class="form-group">
        <label for="code_postal">Code-postal</label>
        <input type="text" name="code_postal" class="form-control" id="code_postal" placeholder="code_postal">
    </div>
    <div class="form-group">
        <label for="mail">E-mail</label>
        <input type="text" name="mail" class="form-control" id="mail" placeholder="mail">
    </div>
    <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" class="form-control" id="mdp" placeholder="mdp">
    </div>
    <div class="form-group">
        <label for="admin">Admin</label>
        <select name="admin" size=1>
          <option value="0" selected>0</option>
          <option value="1">1</option>
        </select>
    </div>


    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Ajouter
    </button>
</form>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
