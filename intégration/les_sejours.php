<?php
require_once 'layout/header.php';
require_once 'model/database.php';
$id = $_GET['id'];
$destinations = getAllDestinations();
$sejours = getAllSejoursByDest($id);
$nbjsejours = getNbSejours($sejours[0]['destination_id']);

 ?>

 <div class="row destination">
     <div class="row">
         <h1>Les destinations</h1>
     </div>

     <div class="row dest-content" id="dest-content">
       <?php foreach ($destinations as $destination) : ?>
         <div class="col-lg-3 col-md-6 col-sm-6">
             <a id="dest<?php echo $destination['id'];?>" class="dest-link" href="les_sejours.php?id=<?php echo $destination['id'];?>#img-header">
                 <section class="dest-<?php echo $destination['id'];?>">
                     <div class="dest-img">
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

    <div class="row">
        <div class="sejour" id="islande">
            <div class="row">
                <h2>Tous les séjours en <?php echo $sejours[0]['libelle'];?> (<?php echo $nbjsejours[0]['nbsejours'];?>)</h2>
            </div>
            <div class="row sejour-article">
              <?php foreach ($sejours as $sejour) : ?>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="container-img">
                        <img src="images-finales<?php echo $sejour['image'];?>" alt="" class="img-fluid slide" id="slide1">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <article>
                        <h3>
                          <a href="sejour.php?id=<?php echo $sejour['id'];?>">
                            <?php echo $sejour['titre'] ." - " . $sejour['libelle'];?>
                          </a>
                        </h3>
                        <p><?php echo substr($sejour['contenu'], 0, 505); ?></p>
                        <a href="sejour.php?id=<?php echo $sejour['id'];?>">En lire plus ...</a>

                        <section>
                            <div>
                                <p>Prochain départ : <?php echo $sejour['depart']; ?> </p>
                                <p class="difficult1">Difficulté : <?php echo $sejour['difficulte'];?></p>
                            </div>
                            <div>
                                <p><?php echo $sejour['duree_sejour']; ?> Jours</p>
                                <p><?php echo $sejour['prix'];?> €</p>
                            </div>
                        </section>
                    </article>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
    </div>
  </section>

  <div class="voir-plus">
    <hr>
    <a href="#img-header">Voir d'autres destinations</a>
  </div>
</main>


<?php
  require_once 'layout/footer.php';
?>
