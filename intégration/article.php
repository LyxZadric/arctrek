<?php
  require_once "layout/header.php";

  require_once "model/database.php";

  //récupère les données venant des liens_titres sur les articles
  $id = (int)$_GET['id'];
  $cat = (int)$_GET['cat'];
  //FetchAll au lieu de fetch (à modifier)
  $article = getArticle($id, $cat);

  /*echo "<pre>";
  print_r($article);
  echo "</pre>";
  die;
*/
?>

<div class="row article">
  <?php if (isset($id) && isset($cat) && $id < 100 && $cat < 5) : ?>

    <div class="col-lg-12 col-md-12 col-sm-12 container-img">
        <img src="images-finales<?php echo $article[0]["image"];?>" alt="" class="img-fluid slide">
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <article>
            <h3><a href=""><?php echo $article[0]['titre'];?></a></h3>
            <p> Posté le : <?php echo $article[0]['date_creation'];?>, par : <?php echo $article[0]['auteur'];?>
            <p><?php echo $article[0]['contenu'];?></p>
        </article>
    </div>
  <?php else : ?>
    <?php require_once '404.php'; ?>
  <?php endif; ?>
</div>


<?php
  require_once "layout/footer.php";
 ?>
