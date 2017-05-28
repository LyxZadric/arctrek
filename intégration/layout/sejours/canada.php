<!-- canada séjours -->
<div class="row">
    <div class="sejour" id="canada">
        <div class="row">
            <h2>Séjours au Canada</h2>
        </div>
        <div class="row sejour-article">
          <?php foreach ($sejours_ca as $sejour_ca) : ?>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="container-img">
                    <img src="images-finales<?php echo $sejour_ca['image'];?>" alt="" class="img-fluid slide" id="slide1">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">

                <article>
                  <h3>
                    <a href="sejour.php?id=<?php echo $sejour_ca['id'];?>">
                      <?php echo $sejour_ca['titre'] ." - " . $sejour_ca['libelle'];?>
                    </a>
                  </h3>
                    <p><?php echo substr($sejour_ca['contenu'], 0, 505); ?></p>
                    <a href="sejour.php?id=<?php echo $sejour_ca['id'];?>">En lire plus ...</a>

                    <section>
                        <div>
                            <p>Prochain départ : <?php echo $sejour_ca['depart']; ?> </p>
                            <p class="difficult1">Difficulté : <?php echo $sejour_ca['difficulte'];?></p>
                        </div>
                        <div>
                            <p><?php echo $sejour_ca['duree_sejour']; ?> Jours</p>
                            <p><?php echo $sejour_ca['prix'];?> €</p>
                        </div>
                    </section>
                </article>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="row voir-plus">
            <hr>
            <a href="les_sejours.php?id=3">Voir plus de séjours au Canada</a>
        </div>
    </div>
</div>
