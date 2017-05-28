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

    <?php foreach ($actus as $actu) : ?>
    <div class="row article">

        <div class="col-lg-6 col-md-12 col-sm-12 container-img">
            <img src="images-finales<?php echo $actu["image"];?>" alt="" class="img-fluid slide" id="slide<?php echo $i;?>">
            <?php $i = $i + 1; ?>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <article>
                <h3><a href="article.php?id=<?php echo $actu["id"];?>&cat=<?php echo $actu["categorie_id"];?>">
                    <?php echo $actu['titre'];?>
                    </a>
                </h3>
                <p><?php echo substr($actu['contenu'], 0, 505);?></p>
                <a href="article.php?id=<?php echo $actu["id"];?>&cat=<?php echo $actu["categorie_id"];?>">
                  En lire plus ...
                </a>
            </article>
        </div>
    </div>
    <?php endforeach; ?>

    <div class="row voir-plus">
        <hr>
        <a href="blog.php?id=1#img-header"> Lire plus d'actus </a>
    </div>
</section>

<!-- RECITS DE VOYAGES --------------------------------------------------->
<section class="recits">
    <div class="row">
        <h2>VOS RÉCITS DE VOYAGE</h2>
    </div>
    <?php foreach ($recits as $recit) : ?>
    <div class="row article">
        <div class="col-md-6 col-sm-12 container-img">
            <img src="images-finales<?php echo $recit["image"];?>" alt="" class="img-fluid slide" id="slide<?php echo $i;?>">
            <?php $i = $i + 1; ?>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <article>
                <h3>
                  <a href="article.php?id=<?php echo $recit["id"];?>&cat=<?php echo $recit["categorie_id"];?>">
                    <?php echo $recit['titre'];?>
                  </a>
                </h3>
                <p><?php echo substr($recit['contenu'], 0, 505);?></p>
                <a href="article.php?id=<?php echo $recit["id"];?>&cat=<?php echo $recit["categorie_id"];?>">
                  En lire plus ...
                </a>
            </article>
        </div>
    </div>
    <?php endforeach; ?>

    <div class="row voir-plus">
        <hr>
        <a href="blog.php?id=2#img-header">Lire plus de récits de voyage</a>
    </div>
</section>
