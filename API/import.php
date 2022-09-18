<?php
// Enregistrement des calcul dans la DB
  $method = 'POST';
  require 'APIHeader.php';
  // Préparation acesse DB
  $insert = "INSERT INTO `receptionCalculatrice`(`historique`) VALUES (':historique')";
  $parametre = new creationPrep ($_POST);
  $param = $parametre->creationPrep;
  // Objet pour enregistrer dans la DB
  $RecordDataCalcul = new RCUD($insert, $param);
  $RecordDataCalcul->CUD();
