<?php
require_once 'layout/header_bis.php';
require_once __DIR__ . '/model/database.php';

$id = $_GET["id"];
$sejour = getAllInfoSejour($id)
?>

<main>
  <h1><?php echo $sejour['titre'];?></h1>
  <div>
  <form action="" method="POST">
    <label>Nombre de voyageurs</label>
    <select name="places_reservation">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select><br>

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
    <li>Départ : <?php echo $sejour['depart'];?></li>
    <li>Retour : </li>
    <li>Durée : <?php echo $sejour['duree_sejour'];?></li>
    <li>Difficulté : <?php echo $sejour['difficulte'];?></li>
  </ul>

  <ul><h4>Montant du voyage</h4>
    <li></li>
    <li></li>
    <li></li>
    <li>Montant total : </li>
    <li>Acompte : </li>
  </ul>
</div>
