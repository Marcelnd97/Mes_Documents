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
    <link rel="stylesheet" href="../assets/theme.css">
    <title>La nuit</title>
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
                <h1 style="font-weight: bold;"><b>La nuit</b></h1>
                <br>
                <p>Conduire de jour demande d'être vigilant, mais conduire de nuit encore plus. 
                    Il faut donc être sûr que l'on vous a vus et que vous voyez bien aussi.</p>
                <p>Dès le crépuscule, vous pouvez allumer vos phares, en agglomération (1) et en dehors (2) :</p>
                <div class="card senscirc">
                    <img src="../images/theme_trois/nuit1.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Pensez à allumer vos feux dès crépuscule</small></p>
                <h3 style="font-weight: bold;">Types de feux</h3>
                <p>En fonction de la situation, vous devrez allumer les feux correspondants. 
                    Il existe des feux avant et des feux arrière.</p>
                <div class="card senscirc">
                    <img src="../images/theme_trois/nuit2.jfif" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Emplacement des feux sur une voiture </small></p>
                <p><b>Feux avant</b></p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Les feux avant contiennent plusieurs ampoules.</p>
                    </div>
                </div>
                <br>
                
                <p>Le feu numéro :</p>
                <p>1. correspond au feu de croisement ;
                <p>2. contient plusieurs ampoules donc peuvent être allumés les feux suivants : de route, de jour et de position ;</p>
                <p>3. correspond au feu de brouillard.</p>
                <p>Feux arrière</p>
                <p>Le feu numéro :</p>
                <p>1. correspond au feu de recul ;</p>
                <p>2. correspond au feu de position arrière + feu stop ;</p>
                <p>3. correspond au feu de brouillard arrière.</p>
                <p>Voici comment ils sont représentés sur le tableau de bord dans la voiture, 
                    une fois qu'ils sont allumés. La couleur des icônes est normalement la même dans 
                    tous types de véhicules :</p></p>
                <div class="card senscirc">
                    <img src="../images/theme_trois/nuit3.jfif" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Dispositif d'éclairag</small></p>
                
                <p>Au crépuscule ou au lever du jour les couleurs et les formes se mélangent. Il est donc difficile d'être bien vus, 
                    alors pensez à allumer vos feux de croisement. Ils permettent de voir jusqu'à 30 m devant vous.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>En agglomération les routes sont généralement bien éclairées, 
                        donc il faut allumer les feux de position et / ou les feux de croisement.</p>
                    </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/theme_trois/nuit4.jpg" height="230px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Feux à allumer la nuit en agglomération</small></p>
                
                <div class="card important">
                  <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Redoublez de vigilance la nuit, car les usagers de la route vulnérables ne sont pas aussi visibles 
                      que ce qu'ils le croient. Autant les cyclistes doivent porter les gilets rétroréfléchissants 
                      (mais le font-ils systématiquement ?), autant les piétons n'ont pas d'obligations vestimentaires 
                      pour la circulation nocturne. La perception d'indices peut être rendue difficile par leur 
                      couleur ou leur contraste, même de jour !</p>
                  </div>
                </div>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Si vous roulez en agglomération, mais que les rues sont moyennement éclairées, 
                        vous pouvez faire des appels lumineux dans les intersections pour vous annoncer.</p>
                    </div>
                </div>
                <br>
                <p>Ce qui peut arriver aussi, tant en agglomération que sur les routes régionales ou nationales, 
                    c'est <b>d'être ébloui</b>.</p>
                <p>Si vous êtes éblouis <b>de face</b>, ne fixez pas les phares et regardez vers le bord loin devant vous.
                     Si vous êtes éblouis <b>dans le rétroviseur</b> intérieur, mettez la position nuit. 
                     Il existe des rétroviseur dits "électrochromatiques". Quand il est activé, 
                     le miroir se ternit en fonction de la luminosité. Ce qui permet de ne pas être 
                     éblouit par un usager qui vous suit et qui aurait oublié de passer en feux de croisement. </p>
                <div class="card senscirc">
                    <img src="../images/theme_trois/nuit5.jfif" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Eblouissement </small></p>
                
                <p>Dans les tunnels, les règles d'utilisation des feux sont identiques.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Les feux adaptatifs existent sur certains modèles de véhicules et leur fonction est de passer automatiquement 
                        des feux de croisement aux feux de route et inversement selon le besoin.</p>
                    </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <p>Récapitulatif des feux à mettre en fonction de l'éclairage :</p>
                <div class="card senscirc">
                    <img src="../images/theme_trois/nuit5.jfif" height="400px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Feux à allumer en fonction de l'éclairage dans les rues </small></p>
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