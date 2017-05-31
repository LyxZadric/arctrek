<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$liste_departs = getAllDateDepart();

require_once __DIR__ . '/../../layout/header.php';
?>

<h1>Gestion des dates de départ</h1>

<hr>

<?php if (isset($_GET["error_code"]) && is_numeric($_GET["error_code"])) : ?>
    <div class="alert alert-danger" role="alert">
        Erreur lors de la suppression !
    </div>
<?php endif; ?>

<table class="table table-bordered table-condensed table-striped table-hover">
    <thead>
        <tr>
            <th>Date de départ</th>
            <th>prix</th>
            <th>nombre de places</th>
            <th>Nom du séjour</th>
            <th>Pays de destination</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_departs as $depart) : ?>
            <tr>
                <td><?php echo $depart["depart"]; ?></td>
                <td><?php echo $depart["prix"]. '€'; ?></td>
                <td><?php echo $depart["place"]; ?></td>
                <td><?php echo $depart["sejour"]; ?></td>
                <td><?php echo $depart["destination"]; ?></td>
                <td>
                    <form action="delete_query.php?id=<?php echo $depart['id'];?>" method="POST">
                        <input type="hidden" name="id" value="<?php echo $depart["id"] ?>">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Supprimer
                        </button>
                    </form>
                    <a href="update_form.php?id=<?php echo $depart["id"]; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
