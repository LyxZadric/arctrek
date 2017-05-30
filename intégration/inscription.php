<?php

require_once 'layout/header.php';

if(isset($_GET[login])){
  if($_GET["login"] == 'error'){
    echo "Email ou mot de passe incorrect";
  } else if($_GET["login"] == 'succes'){
    echo "Inscription Validé";
  } else{
    echo "";
  }
}
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <h2> Espace Inscription </h2>

            <form class="form-horizontal" action="inscription_query.php" method="POST">
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" name="nom" class="form-control" id="nom" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Prenom</label>
                    <div class="col-sm-10">
                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="mail" class="form-control" id="Email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Mot de passe</label>
                    <div class="col-sm-10">
                        <input type="password" name="mdp" class="form-control" id="inputPassword" placeholder="Mot de passe">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Confirmation mot de passe</label>
                    <div class="col-sm-10">
                        <input type="password" name="mdp_confirm" class="form-control" id="confirmPassword" placeholder="Mot de passe">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Se sourvenir de moi
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Inscription</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<?php require_once 'layout/footer.php'; ?>
