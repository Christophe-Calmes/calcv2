<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Calculatrice</title>
</head>
<body>
    <h1>API Calc</h1>
    <section>
      <article>
        <h2>Découverte de React</h2>
        <p>
          Premier projet REACT fait à la plateforme durant la semaine 12 au 16 septembre 2022.<br />
          Ce site est une API faite pour récupérer les données exporter par la calculatrice.
          <<?php echo 'Coucou' ?>
        </p>
      </article>
      <article>
        <?php
        $chemin = "objets/";
        require 'objets/paramDB.php';
        require $chemin.'RCUD.php';
        require $chemin.'preparation.php';
          $select = "SELECT `idTrace`, `historique` FROM `receptionCalculator`";
          $void = array();
            // // Accéder au donnée dans la DB
          $dataCalcul = new RCUD($select, $void);
            $readDataCalcul = $dataCalcul->READ();
            print_r($readDataCalcul);
            if($readDataCalcul != []){
                foreach ($readDataCalcul as $key => $value) {
                echo '<li>'.$value['idTrace'].$value['historique'].'</li>';
                }
              } else {
                echo 'Pas encore de données dans la DB';
           }

         ?>
      </article>
    </section>
</body>
</html>
