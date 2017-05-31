<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$liste_commentaires = getAllCommentaires();

require_once __DIR__ . '/../../layout/header.php';
?>

<h1>Gestion des commentaires</h1>


<hr>

<?php if (isset($_GET["error_code"]) && is_numeric($_GET["error_code"])) : ?>
    <div class="alert alert-danger" role="alert">
        Erreur lors de la suppression !
    </div>
<?php endif; ?>

<table class="table table-bordered table-condensed table-striped table-hover">
    <thead>
        <tr>
            <th>Titre</th>
            <th>contenu</th>
            <th>date de creation</th>
            <th>Utilisateur</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_commentaires as $commentaire) : ?>
            <tr>
                <td><?php echo $commentaire["titre"]; ?></td>
                <td><?php echo $commentaire["contenu"]; ?></td>
                <td><?php echo $commentaire["date_creation"]; ?></td>
                <td><?php echo $commentaire["user"]; ?></td>
                <td>
                    <form action="delete_query.php?id=<?php echo $commentaire['id'];?>" method="POST">
                        <input type="hidden" name="id" value="<?php echo $commentaire["id"] ?>">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Supprimer
                        </button>
                    </form>
                    <a href="update_form.php?id=<?php echo $commentaire["id"]; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
