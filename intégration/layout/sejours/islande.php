
<!-- islande séjours-->
<div class="row">
    <div class="sejour" id="islande">
        <div class="row">
            <h2>Séjours en Islande</h2>
        </div>
        <div class="row sejour-article">
          <?php foreach ($sejours_is as $sejour_is) : ?>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="container-img">
                    <img src="images-finales<?php echo $sejour_is['image'];?>" alt="" class="img-fluid slide" id="slide1">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">

                <article>
                    <h3>
                      <a href="sejour.php?id=<?php echo $sejour_is['id'];?>">
                        <?php echo $sejour_is['titre'] ." - " . $sejour_is['libelle'];?>
                      </a>
                    </h3>
                    <p><?php echo substr($sejour_is['contenu'], 0, 505); ?></p>
                    <a href="sejour.php?id=<?php echo $sejour_is['id'];?>">En lire plus ...</a>

                    <section>
                        <div>
                            <p>Prochain départ : <?php echo $sejour_is['depart']; ?> </p>
                            <p class="difficult1">Difficulté : <?php echo $sejour_is['difficulte'];?></p>
                        </div>
                        <div>
                            <p><?php echo $sejour_is['duree_sejour']; ?> Jours</p>
                            <p><?php echo $sejour_is['prix'];?> €</p>
                        </div>
                    </section>
                </article>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="row voir-plus">
            <hr>
            <a href="les_sejours.php?id=1">Voir plus de séjours en Islande</a>
        </div>
    </div>
</div>
