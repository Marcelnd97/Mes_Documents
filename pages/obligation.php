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
    <title>Obligations</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<<body class="codebody">>

    <!--L'en-tête de la page-->
    <?php
        include("../header/header.php");
    ?>
    <section>
      <br><br><br><br>

      <div class="container">
       <!-- Content here -->
        <div class="row justify-content-center">
          <div class="col-md-8">
                <h1 style="font-weight: bold;"><b>Obligation</b></h1>
                <hr>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="../images/obligation1.jpg" width="300px">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux d'obligation 1</small></p>
                
                <br>
                <p>1. Direction obligatoire à la prochaine intersection : tout droit</p>
                <p>2. Directions obligatoires à la prochaine intersection : tout droit ou à droite</p>
                <p>3. Directions obligatoires à la prochaine intersection : tout droit ou à gauche</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="../images/obligation2.jpg" width="300px">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux d'obligation 2</small></p>
                <br>
                <p>4. Obligation de tourner à droite</p>
                <p>5. Obligation de tourner à gauche</p>
                <p>6. Obligation de contourner par la droite</p>
                <p>7. Obligation de contourner par la gauche</p>
                <br>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="../images/obligation3.jpg" width="300px">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux d'obligation 3</small></p>
                <br>
                <p>8. Direction obligatoire à la prochaine intersection ( à droite)</p>
                <p>9. Direction obligatoire à la prochaine intersection ( à gauche)</p>
                <p>10. Choix entre 2 directions obligatoires (à gauche ou à droite)</p>
                <br>
                <div class="card sensuniq">
                    <img src="../images/obligation4.jpg" height="100px" class="sensuniq">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'obligation 4</small></p>
                <br>
                
                <p>1. Piste ou bande cyclable réservée aux cycles à 2 ou 3 roues</p>
                <p>2. Chemin obligatoire pour les piétons</p>
                <p>3. Chemin obligatoire pour les cavaliers</p>
                <p>4. Vitesse minimale obligatoire</p>
                <p>5. Chaînes à neige obligatoires sur au moins 2 roues motrices</p>
                <p>6. Voie réservée aux véhicules des services réguliers de transport en commun</p>
                <p>7. Voie réservée aux trams</p>
                <p>8. Obligation d'allumer les feux (avant d'entrer dans un tunnel)</p>
                <br>
                <div class="card sensuniq">
                    <img src="../images/obligation5.jpg" height="100px" class="sensuniq">
                </div>
                <p class="text-muted text-center"><small>Panneaux de fin d'obligation 55</small></p>
                <br>
                <p>9. Fin de piste ou bande cyclable réservée aux cycles à 2 ou 3 roues</p>
                <p>10. Fin de chemin obligatoire pour les piétons</p>
                <p>11. Fin de chemin obligatoire pour les cavaliers</p>
                <p>12. Fin de vitesse minimale obligatoire</p>
                <p>13. Chaînes à neige ne sont plus obligatoires </p>
                <p>14. Fin de voie réservée aux véhicules des services réguliers de transport en commun</p>
                <p>15. Fin de voie réservée aux trams</p>
                <p>16. Fin d'obligation selon inscription</p>
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