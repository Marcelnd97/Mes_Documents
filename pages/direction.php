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
                <h1 style="font-weight: bold;"><b>Direction</b></h1>
                <hr>
                <h3 style="font-weight: bold;"><b>Panneaux d'avertissement</b></h3>
                <p><b>Avertissement de bifurcation sur autoroute avec affectation de voies</b></p>
                <div class="card senscirc">
                    <img src="./images/panavertisement1.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneau d'avertissement 1</small></p>
                <p><b>Avertissement de bifurcation sur autoroute sans affectation de voies</b></p>
                <div class="card senscirc">
                    <img src="./images/panavertisement1.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneau d'avertissement 2</small></p>
                <p><b>Avertissements de sortie</b></p>
                <p>1. Avec affectation de voies</p>
                <p>2. Sans affectation de voies</p>
                <div class="card senscirc">
                    <img src="./images/sortieautoroute.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Sortie d'autoroute</small></p>
                
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/bifurcation1.jpg" width="200px" style="border-radius: 10px;">
                  </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Bifurcation autoroutière</small></p>
                <h3 style="font-weight: bold;"><b>Panneaux de présignalisation</b></h3>
                <p><b>Présignalisation diagrammique des carrefours à sens giratoire</b></p>
                <div class="card senscirc">
                    <img src="./images/panpresignale.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneau de présignalisation</small></p>
                <p><b>Présignalisation d'une bifurcation sur autoroute</b></p>
                <div class="card senscirc">
                    <img src="./images/anoncebifurcation.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Annonce de bifurcation sur autoroute</small></p>
                <p><b>Signalisation avancée (1) et (2) ; panneaux de position (3)</b></p>
                <div class="card senscirc">
                    <img src="./images/pandirection.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux de direction </small></p>
                
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