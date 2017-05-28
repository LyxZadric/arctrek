<!-- groenland séjours -->
<div class="row">
    <div class="sejour" id="groenland">
        <div class="row">
            <h2>Séjours au Groenland</h2>
        </div>
        <div class="row sejour-article">
          <?php foreach ($sejours_gro as $sejour_gro) : ?>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="container-img">
                    <img src="images-finales<?php echo $sejour_gro['image'];?>" alt="" class="img-fluid slide" id="slide1">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">

                <article>
                  <h3>
                    <a href="sejour.php?id=<?php echo $sejour_gro['id'];?>">
                      <?php echo $sejour_gro['titre'] ." - " . $sejour_gro['libelle'];?>
                    </a>
                  </h3>
                    <p><?php echo substr($sejour_gro['contenu'], 0, 505); ?></p>
                    <a href="sejour.php?id=<?php echo $sejour_gro['id'];?>">En lire plus ...</a>

                    <section>
                        <div>
                            <p>Prochain départ : <?php echo $sejour_gro['depart']; ?> </p>
                            <p class="difficult1">Difficulté : <?php echo $sejour_gro['difficulte'];?></p>
                        </div>
                        <div>
                            <p><?php echo $sejour_gro['duree_sejour']; ?> Jours</p>
                            <p><?php echo $sejour_gro['prix'];?> €</p>
                        </div>
                    </section>
                </article>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="row voir-plus">
            <hr>
            <a href="les_sejours.php?id=4">Voir plus de séjours au Groenland</a>
        </div>
    </div>
</div>
