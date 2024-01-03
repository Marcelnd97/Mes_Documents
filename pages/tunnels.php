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
    <title>Tunnels</title>
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
                <h1 style="font-weight: bold;"><b>Tunnels</b></h1>
                <hr>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="../images/tunnels1.jpg" width="300px">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Annonce d'un tunnel </small></p>
                <br>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="../images/tunnels2.jpg" width="300px">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux dans le tunnel</small></p>
                <br>
                <p>1. Jalonnement piétonnier d'une issue de secours vers la droite (100m) et vers la gauche (200m)</p>
                <p>2. Issues de secours vers la droite et vers la gauche</p>
                <p>3. Moyen de lutte contre l'incendie</p>
                <p>4. Poste d'appel d'urgence</p>
                <br>
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