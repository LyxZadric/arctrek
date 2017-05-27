<?php
  require_once "layout/header.php";

  require_once "model/database.php";

  $id = $_GET['id'];
  $cat = $_GET['cat'];
  $article = getArticle($id, $cat);
  echo "<pre>";
  print_r($article);
  echo "</pre>";
  die;
?>

<div class="row article">

    <div class="col-lg-6 col-md-12 col-sm-12 container-img">
        <img src="images-finales<?php echo $actu["image"];?>" alt="" class="img-fluid slide" id="slide<?php echo $i;?>">
        <?php $i = $i + 1; ?>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
        <article>
            <h3><a href=""><?php echo $actu['titre'];?></a></h3>
            <p><?php echo substr($actu['contenu'], 0, 505);?></p>
        </article>
    </div>
</div>


<?php
  require_once "layout/footer.php";
 ?>
