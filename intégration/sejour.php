<?php
  require_once 'layout/header.php';
  require_once 'model/database.php';

  $id = (int)$_GET['id'];
  $sejour = getAllInfoSejour($id);
  $commentaires = getCommentBySejourId($id);
  $liste_depart = getDateDepartBySejourId($id);


?>

<div class="row article">
<?php if (isset($id) && $id < 100) : ?>

  <div class="col-lg-12 col-md-12 col-sm-12 container-img">
      <img src="images-finales<?php echo $sejour["image"];?>" alt="" class="img-fluid slide">
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12">
      <button type="button" name="button" id="btn1">Itinéraire</button>
      <button type="button" name="button" id="btn2">Equipement</button>
      <button type="button" name="button" id="btn3">Santé</button>
      <button type="button" name="button" id="btn4">Climat</button>
      <button type="button" name="button" id="btn4">Formalités</button>

      <article>
          <h3><a href=""><?php echo $sejour['titre'];?></a></h3>
          <p><?php echo $sejour['contenu'];?></p>
      </article>

      <article>
          <h4>Avis clients</h4>
          <?php foreach ($commentaires as $commentaire): ?>
              <h5><?php echo $commentaire['titre'];?></h5>
              <p><?php echo $commentaire['contenu'];?><br>
              Posté le : <?php echo $commentaire['date_creation'];?>,
              par <?php echo $commentaire['user'];?></p>
          <?php endforeach; ?>
      </article>

      <article>
          <h4>Itinéraire</h4>
          <p><?php echo $sejour['itinéraire'];?></p>
      </article>

      <article>
          <h4>Equipement</h4>
          <p><?php echo $sejour['equipement'];?></p>
      </article>

      <article>
          <h4>Santé</h4>
          <p><?php echo $sejour['sante'];?></p>
      </article>

      <article>
          <h4>Climat</h4>
          <p><?php echo $sejour['climat'];?></p>
      </article>

      <article>
          <h4>Formalités</h4>
          <p><?php echo $sejour['formalite'];?></p>
      </article>
  </div>


  <h1>Dates de départ et prix</h1>

  <hr>

  <table class="table table-bordered table-condensed table-striped table-hover">
      <thead>
          <tr>
              <th>Du</th>
              <th>Au</th>
              <th>Prix</th>
              <th>Départ Assuré</th>
              <th>Places à réserver</th>
              <th>Réserver</th>
          </tr>
      </thead>
      <tbody>
        <?php foreach ($liste_depart as $depart): ?>
              <tr>
                  <td><?php echo $depart["depart"]; ?></td>
                  <td>                                </td>
                  <td><?php echo $depart["prix"]. '€'; ?></td>
                  <td><?php if($depart["place"] >= 5):?>
                        <?php echo "Assuré";?>
                      <?php elseif($depart["place"] < 5):?>
                        <?php echo "Plus que " . $depart["place"];?>
                      <?php elseif($depart['place'] == 0): ?>
                        <?php echo "Complet";?>
                      <?php endif;?>
                  </td>
                  <td>
                    <form action="delete_query.php?id=<?php echo $depart['id'];?>" method="POST">
                      <label></label>
                      <select name="places_reservation">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </form>
                  </td>
                  <td>
                      <form action="delete_query.php?id=<?php echo $depart['id'];?>" method="POST">
                          <input type="hidden" name="id" value="<?php echo $depart["id"] ?>">
                          <button type="submit" class="btn btn-danger">
                              <i class="fa fa-trash"></i>
                              Réserver
                          </button>
                      </form>

                  </td>
              </tr>
            <?php endforeach; ?>
      </tbody>
  </table>

<?php else : ?>
  <?php require_once '404.php'; ?>
<?php endif; ?>
</div>





<?php
  require_once 'layout/footer.php';
?>
