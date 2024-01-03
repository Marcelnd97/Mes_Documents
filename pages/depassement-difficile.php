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
    <link rel="stylesheet" href="../pages/assets/theme.css">
    <title>Dépassement difficile</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">
     <!--L'en-tête de la page-->
     <?php
        include("../header/header.php")
     ?>
    <br><br><br>
    <section>
    <br><br><br><br>
      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-10" style="padding-left: 25%;">
              <h1><b>Dépassements difficiles</b></h1>
              <br> 
              <p>Certains dépassements peuvent s'avérer difficiles ou dangereux.</p>
              <h4><b>Dépassements dangereux</b></h4>
              <p>Ces dépassements sont possibles en théorie mais dangereux en pratique.</p>
              <p>Il s'agit des routes avec des lignes discontinues mais qui contiennent beaucoup de virages. 
                S'il y a une voiture devant vous que vous souhaitez dépasser (voir la photo ci-dessous), 
                je vous conseille de patienter pendant 6 km avant de vous lancer dans un dépassement :</p>
              <div class="card senscirc">
                <img src="../images/nodepasvirage.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Ne dépassez pas d'autres véhicules dans les virages</small></p>
              
              <p>Voici tous les panneaux qui peuvent indiquer des virages. En leur présence, 
                je vous conseille de vous abstenir de dépasser même si le marquage au sol vous y autorise :</p>
                <br>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/depasmaeviter.jpg" width="300px">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Dépassements à éviter</small></p>
              <p>Les quatre panneaux indiquent l'existence des virages. Le n°1 et le n°2 indiquent le danger des virages à 
                droite et à gauche. Le n°3 et le n°4 indiquent une succession de virages. 
                Pour le n°3 le premier virage est à droite et pour le n°4 il est à gauche.</p>
              <p>Parfois, les routes ne contiennent pas de virages, mais sont en montée et votre visibilité étant réduite 
                vous ne pouvez pas voir si quelqu'un arrive en face. Bien entendu, 
                le dépassement est extrêmement dangereux. La preuve en image :</p>
              <div class="card senscirc">
                <img src="../images/depassdanger.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Dépassement dangereux</small></p>
              <p>Je vous déconseille également de vous engager dans un dépassement si les conditions climatiques ne 
                sont pas bonnes car vous pouvez glisser ou être déporté par le vent !</p>
                <p>Si vous devez dépasser une file de véhicules en une seule fois, 
                    pensez à garder le clignotant pendant toute la manœuvre.</p>
              <br>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Si vous effectuez un dépassement dangereux vous risquez 135 euros d'amende, 
                    3 ans de suspension de permis de conduire ainsi que la perte de 3 points sur votre permis.</p>
                </div>
              </div>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Les dépassements sont fortement déconseillés dans les situations 
                    avec un manque de visibilité (virages, route qui monte..).</li>
                <li>Les dépassements interdits, mais effectués, sont passibles d'une amende.</li>
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