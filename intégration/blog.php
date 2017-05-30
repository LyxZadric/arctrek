<?php
  require_once "layout/header.php";
  require_once "model/database.php";

  $id = $_GET['id'];
  $articles = getAllArticleByCat($id);

?>

<button type="button" name="button"><a href="blog.php?id=1">Actualités</a></button>
<button type="button" name="button"><a href="blog.php?id=2">Récits de voyages</a></button>

<section class="actus">
    <div class="row">
        <h2><?php echo $articles[0]['libelle'];?></h2>
    </div>

    <?php foreach ($articles as $article) : ?>
    <div class="row article">

        <div class="col-lg-6 col-md-12 col-sm-12 container-img">
            <img src="images-finales<?php echo $article["image"];?>" alt="" class="img-fluid slide">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <article>
                <h3><a href="article.php?id=<?php echo $article["id"];?>&cat=<?php echo $article["categorie_id"];?>">
                    <?php echo $article['titre'];?>
                    </a>
                </h3>
                <p><?php echo substr($article['contenu'], 0, 505);?></p>
                <a href="article.php?id=<?php echo $article["id"];?>&cat=<?php echo $article["categorie_id"];?>">
                  En lire plus ...
                </a>
            </article>
        </div>
    </div>
    <?php endforeach; ?>

</section>




<?php
  require_once "layout/footer.php"
 ?>
