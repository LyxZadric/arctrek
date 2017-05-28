<?php
require_once __DIR__ . '/../model/database.php';
$destinations = getAllDestinations();
$sejours_is = getSejours(1);
$sejours_no = getSejours(2);
$sejours_ca = getSejours(3);
$sejours_gro = getSejours(4);
 ?>

<!-- Destinations ------------------------------------------------------------>
<div class="row destination">
    <div class="row">
        <h1>Nos destinations et séjours</h1>
    </div>

    <div class="row dest-content" id="dest-content">
      <?php foreach ($destinations as $destination) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a id="dest<?php echo $destination['id'];?>" class="dest-link" href="#dest-content">
                <section class="dest-<?php echo $destination['id'];?>">
                    <div class="dest-img">
                        <img src="images-finales<?php echo $destination['image'];?>" alt="paysage-islande">
                        <h3><?php echo $destination['libelle'];?></h3>
                    </div>
                </section>
            </a>
        </div>
      <?php endforeach; ?>

    </div>
</div>

<!-- Séjours / pays --------------------------------------------------------->
<section class="sejours-content">

  <?php
    require_once 'sejours/islande.php';
    require_once 'sejours/norvege.php';
    require_once 'sejours/canada.php';
    require_once 'sejours/groenlande.php';
  ?>
</section>
