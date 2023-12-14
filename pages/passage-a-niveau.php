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
                <h1 style="font-weight: bold;"><b>Passages à niveau</b></h1>
                <hr>
                <br>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="./images/passageaniveau1.jpg" width="300px" height="150">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux d'annonce d'un passage à niveau</small></p>
                <br>
                <h3 style="font-weight: bold;"><b>Passages à niveau</b></h2>
                
                <div class="card senscirc">
                    <img src="./images/passageaniveau2.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux : passage à niveau</small></p>
                <br>
                <p>1. Passage à niveau sans barrière, ni demi-barrière - signal avancé</p>
                <p>2. Obligation de s'arrêter si le feu rouge clignote - signal avancé</p>
                <p>3. Obligation de marquer l'arrêt avant de traverser les voies - signal avancé</p>
                <p>4. Demi-barrières à fonctionnement automatique - signal avancé</p>
                <br>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="./images/passageaniveau3.jpg" width="300px" height="150">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Signaux de position</small></p>
                <br>
                <p>1. Signal de position (passage à niveau sans barrière, ni semi-barrière)</p>
                <p>2. Signal de position  (passage à niveau sans barrière avec le feu)</p>
                <p>3. Signal de position  (passage à niveau sans barrière avec un Stop)</p>
                <br>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="./images/passageaniveau4.jpg" width="300px" height="150">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Barrières à fonctionnement manuel : variantes </small></p>
                <br>
                <p>1. Barrières à fonctionnement manuel</p>
                <p>2. Signal avancé</p>
                <p>3. Barrières avec ligne électrifiée située à moins de 6 m au-dessus de la chaussée</p>
                <br>
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