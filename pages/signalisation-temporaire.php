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
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">

    <!--L'en-tête de la page-->
    <?php
        include("header.php");
    ?>
    <section>
      <br><br><br><br>

      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-10" style="padding-left: 25%;">
                <h1 style="font-weight: bold;"><b>Signalisation temporairection</b></h1>
                <hr>
                <div class="card senscirc">
                    <img src="./images/infotempsuplement.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Informations temporaires supplémentaires </small></p>
                <br>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/presignaledeviation1.jpg" width="300px" style="border-radius: 10px;">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Présignalisation de déviation 1</small></p>
                <br>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/presignaledeviation2.jpg" width="300px" style="border-radius: 10px;">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Présignalisation de déviation 2 et Direction de déviation pour certains usagers</small></p>
                <br>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/presignaledeviation3.jpg" width="300px" style="border-radius: 10px;">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Directions de déviation 3</small></p>
                <br>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/deviation.jpg" width="300px" style="border-radius: 10px;">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Déviation</small></p>
                <br>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/autrpresignale.jpg" width="300px" style="border-radius: 10px;">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>D'autres présignalisations</small></p>
                <br>
                <p>1. Affectation des voies</p>
                <p>2. Présignalisation de changement de chaussée</p>
                <p>3. Annonce de la réduction de voies dans 500m</p>
                <br>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/itnertempo.jpg" width="200px" style="border-radius: 10px;">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Itinéraires temporaires</small></p>
                <ol style="list-style-type: disc;">
                    <li>Itinéraire Bis</li>
                    <li>Itinéraire de substitution </li>
                </ol>
                <br>
                <div class="card senscirc">
                    <img src="./images/autresignaletravaux.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Autres signalisation de travaux</small></p>
                <br>
                <p>1. Signal de position d'une déviation ou d'un rétrécissement temporaire de la chaussée</p>
                <p>2. Barrage. Signalisation de position d'un obstacle temporaire</p>
                <p>3. Signalisation de position des limites d'obstacles temporaires. Dispositif conique.</p>
                <p>4. Balise de renforcement pour améliorer la visibilité en cas de déviation</p>
                <br>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/paquet-mobile.jpg" width="200px" style="border-radius: 10px;">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Piquets mobiles</small></p>
                <p>1. Interdiction de passer</p>
                <p>2. Autorisation de passer</p>
                <br>
                
          </div>
        </div>
      </div>

    </section>

    <?php
    // <!--Le pied de la page-->
        include("footer.php");
        
        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("script_link.php");
    ?>
    
</body>
</html>