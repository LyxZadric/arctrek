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
                        <h3><?php echo $sejour_is['titre'] ." - " . $sejour_is['libelle'];?></h3>
                        <p><?php echo substr($sejour_is['contenu'], 0, 505); ?></p>
                        <a href="#">En lire plus ...</a>

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
                <a href="">Voir plus de séjours en Islande</a>
            </div>
        </div>
    </div>

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
                        <h3><?php echo $sejour_no['titre'] ." - " . $sejour_no['libelle'];?></h3>
                        <p><?php echo substr($sejour_no['contenu'], 0, 505); ?></p>
                        <a href="#">En lire plus ...</a>

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
                <a href="#">Voir plus de séjours en Norvège</a>
            </div>
        </div>
    </div>

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
                        <h3><?php echo $sejour_ca['titre'] ." - " . $sejour_ca['libelle'];?></h3>
                        <p><?php echo substr($sejour_ca['contenu'], 0, 505); ?></p>
                        <a href="#">En lire plus ...</a>

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
                <a href="">Voir plus de séjours au Canada</a>
            </div>
        </div>
    </div>

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
                        <h3><?php echo $sejour_gro['titre'] ." - " . $sejour_gro['libelle'];?></h3>
                        <p><?php echo substr($sejour_gro['contenu'], 0, 505); ?></p>
                        <a href="#">En lire plus ...</a>

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
                <a href="#">Voir plus de séjours au Groenland</a>
            </div>
        </div>
    </div>
</section>
