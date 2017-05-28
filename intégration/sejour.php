<?php
  require_once 'layout/header.php';
  require_once 'model/database.php';

  $id = (int)$_GET['id'];
  $sejour = getAllInfoSejour($id)

/*echo "<pre>";
print_r($article);
echo "</pre>";
die;
*/
?>

<div class="row article">
<?php if (isset($id) && $id < 100) : ?>

  <div class="col-lg-12 col-md-12 col-sm-12 container-img">
      <img src="images-finales<?php echo $sejour[0]["image"];?>" alt="" class="img-fluid slide">
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12">
      <button type="button" name="button" id="btn1">Itinéraire</button>
      <button type="button" name="button" id="btn2">Equipement</button>
      <button type="button" name="button" id="btn3">Santé</button>
      <button type="button" name="button" id="btn4">Climat</button>
      <button type="button" name="button" id="btn4">Formalités</button>

      <article>
          <h3><a href=""><?php echo $sejour[0]['titre'];?></a></h3>
          <p><?php echo $sejour[0]['contenu'];?></p>
      </article>

      <article>
          <h4>Itinéraire</h4>
          <p><?php echo $sejour[0]['itinéraire'];?></p>
      </article>

      <article>
          <h4>Equipement</h4>
          <p><?php echo $sejour[0]['equipement'];?></p>
      </article>

      <article>
          <h4>Santé</h4>
          <p><?php echo $sejour[0]['sante'];?></p>
      </article>

      <article>
          <h4>Climat</h4>
          <p><?php echo $sejour[0]['climat'];?></p>
      </article>

      <article>
          <h4>Formalités</h4>
          <p><?php echo $sejour[0]['formalite'];?></p>
      </article>
  </div>
<?php else : ?>
  <?php require_once '404.php'; ?>
<?php endif; ?>
</div>





<?php
  require_once 'layout/footer.php';
?>
