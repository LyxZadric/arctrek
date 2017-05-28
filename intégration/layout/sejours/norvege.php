<!-- norvege séjours-->
<?php $a = 2; ?>
<div class="row">
    <div class="sejour" id="norvege">
        <div class="row">
            <h2>Séjours en Norvège</h2>
        </div>
        <div class="row sejour-article">
          <?php foreach ($sejours_no as $sejour_no) : ?>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="container-img">
                    <img src="images-finales<?php echo $sejour_no['image'];?>" alt="" class="img-fluid slide" id="slide1">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">

                <article>
                  <h3>
                    <a href="sejour.php?id=<?php echo $sejour_no['id'];?>">
                      <?php echo $sejour_no['titre'] ." - " . $sejour_no['libelle'];?>
                    </a>
                  </h3>
                    <p><?php echo substr($sejour_no['contenu'], 0, 505); ?></p>
                    <a href="sejour.php?id=<?php echo $sejour_no['id'];?>">En lire plus ...</a>

                    <section>
                        <div>
                            <p>Prochain départ : <?php echo $sejour_no['depart']; ?> </p>
                            <p class="difficult1">Difficulté : <?php echo $sejour_no['difficulte'];?></p>
                        </div>
                        <div>
                            <p><?php echo $sejour_no['duree_sejour']; ?> Jours</p>
                            <p><?php echo $sejour_no['prix'];?> €</p>
                        </div>
                    </section>
                </article>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="row voir-plus">
            <hr>
            <a href="les_sejours.php?id=2">Voir plus de séjours en Norvège</a>
        </div>
    </div>
</div>
