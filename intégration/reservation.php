<?php
require_once 'layout/header_bis.php';
require_once __DIR__ . '/model/database.php';

$id = $_GET["id"];
$places = $_GET['places_reservation'];
$sejour = getAllInfoSejour($id);
//calcul ttc
$prix = $sejour["prix"] * $places;
$ttc = ($prix * 1)/100;
//calcul acompte
$acompte = $prix + $ttc;
$acompte = ($acompte * 30)/100;
//Calcul date de fin du séjour
$date_depart = strtotime($sejour['depart']);
$duree = $sejour['duree_sejour'];
$date_fin = date('d-m-Y', strtotime('+'.$duree. ' day', $date_depart));
?>

<main>
  <h1><?php echo $sejour['titre'];?></h1>
  <div>
  <form action="" method="POST">

      <button type="submit" class="btn">
          <i class="fa fa-trash"></i>
          Poser une option
      </button>

      <button type="submit" class="btn btn-success">
          <i class="fa fa-trash"></i>
          Réserver
      </button>
  </form>
</div>
<div>
  <ul><h4>Récapitulatif du voyage</h4>
    <li>Départ : <?php echo date('d-m-Y', $date_depart);?></li>
    <li>Retour : <?php echo $date_fin;?></li>
    <li><?php echo $places . " voyageurs";?></li>
    <li>Durée : <?php echo $sejour['duree_sejour'];?> jours</li>
    <li>Difficulté : <?php echo $sejour['difficulte'];?></li>
  </ul>

  <ul><h4>Montant du voyage</h4>
    <li id="voyageur">Voyageur</li>
    <li id="prix">prix : <?php echo "( ".$sejour["prix"]. "€ x " .$places. ")" ;?> </li>
    <li id="ttc">taxes : <?php echo $ttc . "€";?></li>
    <li id="montant">Montant total : <?php echo $prix + $ttc . "€";?></li>
    <li id="Acompte">Acompte : <?php echo $acompte. "€";?></li>
  </ul>
</div>
