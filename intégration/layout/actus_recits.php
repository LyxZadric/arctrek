<?php
require_once __DIR__ . '/../model/database.php';

$actus = getArticlesByCategorie(1);
$recits = getArticlesByCategorie(2);
$i = 3;
?>
<!-- ACTUALITÉS --------------------------------------------------->
<section class="actus">
    <div class="row">
        <h2>ACTUS</h2>
    </div>
    <div class="row article">
        <?php foreach ($actus as $actu) : ?>

        <div class="col-lg-6 col-md-12 col-sm-12 container-img">
            <img src="images-finales<?php echo $actu["image"];?>" alt="" class="img-fluid slide" id="slide<?php echo $i;?>">
            <?php $i = $i + 1; ?>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <article>
                <h3><?php echo $actu['titre'];?></h3>
                <p><?php echo substr($actu['contenu'], 0, 505);?></p>
                <a href="#">En lire plus ...</a>
            </article>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="row voir-plus">
        <hr>
        <a href="#"> Lire plus d'actus </a>
    </div>
</section>

<!-- RECITS DE VOYAGES --------------------------------------------------->
<section class="recits">
    <div class="row">
        <h2>VOS RÉCITS DE VOYAGE</h2>
    </div>
    <div class="row article">
        <?php foreach ($recits as $recit) : ?>
        <div class="col-md-6 col-sm-12 container-img">
            <img src="images-finales<?php echo $recit["image"];?>" alt="" class="img-fluid slide" id="slide<?php echo $i;?>">
            <?php $i = $i + 1; ?>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <article>
                <h3><?php echo $recit['titre'];?></h3>
                <p><?php echo substr($recit['contenu'], 0, 505);?></p>
                <a href="#">En lire plus ...</a>
            </article>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="row voir-plus">
        <hr>
        <a href="#">Lire plus de récits de voyage</a>
    </div>
</section>
