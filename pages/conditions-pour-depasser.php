<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../pages/assets/style.css">
    <title>Conditions pour dépasser</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">

<!--L'en-tête de la page-->
<?php
    include("../header/header.php");
?>
    <section>
      <br><br><br><br>

      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-10" style="padding-left: 25%;">
              <h1><b>Conditions pour dépasser</b></h1>
              <br>
              <p>Les dépassements sont autorisés seulement si toutes les conditions de sécurité sont 
                réunies et optimales et que la signalisation ne l'interdit pas :</p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>vous ne devez gêner aucun usager de la route ;</li>
                <li>vous devez savoir où vous rabattre ;</li>
                <li>le véhicule que vous souhaitez dépasser ne doit pas avoir d'obstacle devant lui (un cycliste par exemple) ;</li>
                <li>l'état de la chaussée doit être optimal (éviter par temps de pluie, neige et brouillard) ;</li>
                <li>vous devez toujours avoir assez de visibilité ;</li>
                <li>vous ne devez gêner personne derrière vous et devez vous assurer qu'aucun autre automobiliste ne soit dans l'angle mort ;</li>
                <li>vous ne devez pas dépasser la vitesse maximale autorisée ;</li>
                <li>la différence de vitesse doit être d'au moins 20 km/h et la distance entre le moment où vous avez 
                    commencé le dépassement et l'avez fini de 250 m.</li>
              </ol>
              
              <div class="card senscirc">
                <img src="../images/depassantproblem.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Dépasser sans problèmes </small></p>
              <p>Le dépassement est aussi autorisé dans les cas suivants, 
                même si je vous conseille de rester vigilant et surtout d'analyser d'abord la situation :</p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>sur un passage à niveau avec barrières ou demi-barrières ;</li>
                <li>aux intersections auxquelles vous avez la priorité ;</li>
                <li>à proximité d'une intersection où vous n'avez pas la priorité mais à condition d'avoir la visibilité suffisante ;</li>
                <li>la nuit où la visibilité est réduite, il faut mettre les bons phares et surtout rester vigilant, 
                    car d'autres usagers de la route comme les piétons peuvent vous surprendre.</li>
              </ol>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Les dépassements autorisés sont possibles et faisables <b>seulement sous des conditions indispensables</b> 
                    (bonne visibilité, respect de la vitesse et des distances, pas d'obstacles sur la route..).</li>
                <li>La différence entre le véhicule qui dépasse et le véhicule dépassé <b>doit être d'au moins 20 km/h.</b></li>
              </ol>
              <br>              
          </div>
        </div>
      </div>

    </section>

    <!--Le pied de la page-->
    <?php
    // <!--Le pied de la page-->
        include("../footer/footer.php");

        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("../script/script_link.php");
    ?>
</body>
</html>