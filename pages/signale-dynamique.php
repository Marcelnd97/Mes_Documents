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
        include("../header/header.php");
    ?>
    <section>
      <br><br><br><br>

      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-10" style="padding-left: 25%;">
                <h1 style="font-weight: bold;"><b>Signalisation dynamique</b></h1>
                <hr>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/pansmsvarier.jpg" width="300px" style="border-radius: 10px;">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Panneau à message variable </small></p>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/fermeturedupassage.jpg" width="300px" style="border-radius: 10px;">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Fermeture d'un passage à niveau muni de barrières</small></p>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/radarepedagogique.jpg" width="300px" height="150px;" style="border-radius: 10px;">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Radar pédagogique</small></p>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/flecheoblique.jpg" width="300px" style="border-radius: 10px;">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Flèche oblique orientée vers 
                    le bas signifiant l'obligation de se déporter vers la voie adjacente indiquée</small></p>
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