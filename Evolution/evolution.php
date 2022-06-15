<?php
session_start();
$css = '<link rel="stylesheet" href="../ressources/css/style_evolution.css">';
$title = "Evolution";
require "../ressources/headfoot/header.php";
include 'progressbar.php';

?>

<div class="container0">

  <div class="container1">


    <div>
      <progress id="valeur_faim" max="100" value="70"></progress>
      <i class="bi bi-egg-fried positionicone"></i>
    </div>
    <div class="textesousbarre">Faim : valeur</div>
    <div>
      <progress id="valeur_fc" max="220" value=<?php echo $valeurBPM ?>></progress>
      <i class="bi bi-heart-fill positionicone"></i>
    </div>
    <div class="textesousbarre">Fréquence Cardiaque : <?php echo $valeurBPM . " bpm" ?></div>

    <div>
      <progress id="valeur_co2" max="5000" value=<?php echo $valeurCO2 ?>></progress>
      <i class="bi bi-wind positionicone"></i>
    </div>
    <div class="textesousbarre">Taux de CO2 : <?php echo $valeurCO2 . " ppm" ?></div>


    <div>
      <progress id="valeur_son" max="120" value=<?php echo $valeurSon ?>></progress>
      <img class="bi bi-volume-up positionicone"></i>
    </div>

    <div class="textesousbarre">Intensité sonore : <?php echo $valeurSon . " dB" ?></div>


  </div>

  <div class="container2">
    <img id="taillegif" alt="" src="../ressources/images/Evoli.gif">
  </div>


  <div class="humeurkrobitxt">
    <p>
    <p>

  </div>


</div>
<?php ?>

<?php

require "../ressources/headfoot/footer.php"; ?>