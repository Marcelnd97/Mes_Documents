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
    <title>Aides à la tenue de route</title>
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
                <h1 style="font-weight: bold;"><b>Aides à la tenue de route</b></h1>
                <br>
                <p>Le Programme de Stabilité Électronique (ESP) permet de ramener la voiture sur la bonne 
                    trajectoire si jamais vous commencez à glisser. L'ESP détecte l'adhérence et répartit 
                    automatiquement le freinage sur chacune des roues pour mieux gérer le dérapage.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_neuf/tenu1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Aide au freinage </small></p>
                    </div>
                </div>
                
                <p>Si votre voiture ne freine plus correctement, il faut donc tout de suite s’arrêter.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Ce système a été conçu pour corriger la trajectoire d'un véhicule roulant à vitesse maîtrisée. 
                        Cependant ce système est rendu inefficace par une vitesse trop élevée.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_neuf/tenu2.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Avec et sans ESP </small></p>
                    </div>
                </div>
                <p>L'ESP tend à maintenir la voiture sur la même trajectoire ! Le schéma est très optimiste, 
                    car freiner dans un virage est toujours difficile. Pensez à ralentir avant le virage !</p>
                <br>

                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>L'ESP permet de ramener la voiture sur 
                    la bonne trajectoire et les risques de perte de contrôle du véhicule sont ainsi réduits.</li>
                   <li>L'ESP détecte la perte d'adhérence et 
                    répartit automatiquement le freinage sur chacune des roues.</li>
                </ol>

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