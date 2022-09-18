<?php
  $method = 'GET';
  require 'APIHeader.php';
  // Préparation pour accéder aux données
$select = "SELECT `idTrace`, `historique` FROM `receptionCalculator`";
  $void = array();
  // Accéder au donnée dans la DB
  $dataCalcul = new RCUD($select, $void);
  $readDataCalcul = $dataCalcul->READ();
  // Diffusion dans l'API des données existent.
  if($readDataCalcul != []) {
   echo json_encode($readDataCalcul);
 } else {
   echo [{"error":"No DATA in DB"}];
 }
