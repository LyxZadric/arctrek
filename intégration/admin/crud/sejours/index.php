<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$liste_sejours = getAllSejours();

require_once __DIR__ . '/../../layout/header.php';
?>

<h1>Gestion des Séjours</h1>

<a href="insert_form.php" class="btn btn-success">
    <i class="fa fa-plus"></i>
    Ajouter
</a>

<hr>

<?php if (isset($_GET["error_code"]) && is_numeric($_GET["error_code"])) : ?>
    <div class="alert alert-danger" role="alert">
        Erreur lors de la suppression !
    </div>
<?php endif; ?>

<table class="table table-bordered table-condensed table-striped table-hover">
    <thead>
        <tr>
            <th>Nom du séjour</th>
            <th>Destination</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_sejours as $sejour) : ?>
            <tr>
                <td><?php echo $sejour["titre"]; ?></td>
                <td><?php echo $sejour["destination"]; ?></td>
                <td>
                    <form action="delete_query.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $sejour["id"] ?>">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Supprimer
                        </button>
                    </form>
                    <a href="update_form.php?id=<?php echo $sejour["id"]; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
