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
                <h1 style="font-weight: bold;"><b>Localisation</b></h1>
                <hr>
                <h2 style="font-weight: bold;"><b>Panneaux de localisation</b></h2>
                <div class="card senscirc">
                    <img src="../images/sortieaglomunetdeux.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Sortie d'agglomération (1) et entrée en agglomération (2) </small></p>
                <div class="card senscirc">
                    <img src="../images/appartenancecumonunparc.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Appartenance d'une commune à un parc national ou parc naturel régional ou réserve naturelle </small></p>
                <div class="card senscirc">
                    <img src="../images/parcnationetnatureletreserve.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Parc national ou parc naturel ou réserve naturelle</small></p>
                <div class="card senscirc">
                    <img src="../images/confusionaeviter.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Confusion à éviter</small></p>
                
                <p>Lieu-dit</p>
                <p>Cours d'eau</p>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/frontièreunioneuropfrance.jpg" width="150px">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Localisation de la frontière d'un état de l'Union Européenne</small></p>
                <h2 style="font-weight: bold;"><b>Panneaux d'information</b></h2>
                <div class="card senscirc">
                      <img src="../images/panitineraire.jpg" height="200px" class="senscirc">
                  </div>
                <p class="text-muted text-center"><small>Panneaux informant sur les localisations 
                      ou itinéraires touristiques</small></p>
                
                
                <p>1. Localisation d'un itinéraire touristique</p>
                <p>2. Fin d'un itinéraire touristique</p>
                <p>3. Indication d'une curiosité ou d'un lieu touristique avec la direction à suivre</p>
                <p>4. Présignalisation d'un itinéraire touristique</p>
                <p>5. Indication par message littéral et graphique</p>
                <h2 style="font-weight: bold;"><b>Bornes de localisation</b></h2>
                <div class="card senscirc">
                      <img src="../images/localisation.jpg" height="200px" class="senscirc">
                  </div>
                <p class="text-muted text-center"><small>Localisation</small></p>
                <p>1. Borne de route départementale</p>
                <p>2. Borne de route nationale</p>
                <p>3. Réseau européen</p>
                <p>4. Autoroute</p>
                <p>5. Route nationale</p>
                <p>6. Route départementale</p>
                <p>7. Réseau communal ou rural</p>
                <p>8. Réseau forestier</p>
                <p>9. Rocade ou boulevard périphérique</p>
                <h2 style="font-weight: bold;"><b>Cartouches et encarts</b></h2>
                <div class="card senscirc">
                      <img src="../images/encart.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Encarts</small></p>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/cartouche.jpg" width="300px" style="border-radius: 10px;">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Cartouches</small></p>
                <p>1. Autoroute A51</p>
                <p>2. Réseau européen E712</p>
                <br>
          </div>
        </div>
      </div>

    </section>

    <?php
    // <!--Le pied de la page-->
        include("../footer/footer.php");
        
        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("../script/script_link.php");
    ?>
    
</body>
</html>