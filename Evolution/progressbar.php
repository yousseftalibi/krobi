<?php

$dbhost = "eu-cdbr-west-02.cleardb.net";
$db = "heroku_656262c843ff55a";
$Username= "b1d8da12ce8adf";
$Password="55fe535f";
$conn = mysqli_connect($dbhost, $Username, $Password, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

echo "</br>";




//SELECT donnee FROM mesures WHERE date = (SELECT MAX(date) FROM mesures);  --> Retourne la dernière donnée de la BDD

// Requete pour les BPM
$requetebpm = 'SELECT donnee FROM mesures WHERE type="heartrate" ORDER BY date DESC LIMIT 1';
$resultbpm = $conn->query($requetebpm);

if ($resultbpm->num_rows > 0) {
  $valeurRecueBPM = $resultbpm->fetch_assoc();
  $valeurBPM= $valeurRecueBPM["donnee"];
  
  
} else {
  echo "Erreur : Aucun résultat";
}

// Requete pour le CO2
$requeteCO2 = 'SELECT donnee FROM mesures WHERE type="carbondioxyde" ORDER BY date DESC LIMIT 1';
$resultCO2 = $conn->query($requeteCO2);

if ($resultbpm->num_rows > 0) {
  $valeurRecueCO2 = $resultCO2->fetch_assoc();
   $valeurCO2=$valeurRecueCO2["donnee"];
  
  
} else {
  echo "Erreur : Aucun résultat";
}


// Requete pour le son
$requeteson = 'SELECT donnee FROM mesures WHERE type="soundrate" ORDER BY date DESC LIMIT 1';
$resultson = $conn->query($requeteson);

if ($resultson->num_rows > 0) {
  $valeurRecueSon = $resultson->fetch_assoc();
  $valeurSon= $valeurRecueSon["donnee"];

} else {
  echo "Erreur : Aucun résultat";
}


$conn->close();
