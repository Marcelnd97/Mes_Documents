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
    <title>Stationner ur route</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 20px; ">

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
                <h1 style="font-weight: bold;"><b>Stationner sur route</b></h1>
                <br>
                <P>S'arrêter sur une route est plus dangereux qu'en agglomération à cause des vitesses et de l'environnement. 
                    Vous pouvez vous arrêter sur un emplacement du type parking ou même au bord de la route, 
                    mais veillez à ne pas gêner la circulation. Ne restez pas sur la chaussée, 
                    déplacez votre voiture vers l'accotement si c'est possible. Pensez à mettre les warnings pour être vus.</p>
                <p>Si l'un des panneaux des indications diverses vous a interpellé, et que vous souhaitez visiter un lieu, 
                    alors pensez à stationner aux endroits prévus à cet effet.  Tout comme pour les dépassements, 
                    certains arrêts et stationnements seront interdits et d'autres autorisés. Petit rappel.</p>
                <p><b>Stationnements interdits</b></p>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Vous rappelez-vous des règles d'interdiction de stationner qui pourraient 
                        s'appliquer aux routes hors agglomération ?</p>
                  </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/indiceinterdiarretoustation.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Indices : interdiction de s'arrêter ou de stationner</small></p>
                
                <p><b>Réponse :</b></p>
                <p>Il est interdit de stationner :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>à proximité d'une intersection, d'un passage à niveau, 
                        d'un virage, d'un sommet de côte (photo n°1) ou même sur un pont ;</li>
                    <li>sur les trottoirs, passages ou accotements réservés aux piétons ;</li>
                    <li>sur les voies, pistes ou bandes réservées aux cycles, bus, taxis, 
                        véhicule du type ambulance ou police, véhicules lents, véhicules faisant le covoiturage ;</li>
                    <li>si vous bloquez l'accès à un véhicule stationné correctement ;</li>
                    <li>dans un tunnel  ou si vous gênez l'accès à une bouche d'incendie ou à une installation souterraine ;</li>
                    <li>devant les garages, les parcs, les entrées privées ;</li>
                    <li>car la signalisation l'interdit (photo n°2).</li>
                </ol>
                <p>L'arrêt est toléré lorsque le conducteur peut bouger son véhicule à tout moment.</p>
                <p><b>Stationnements possibles</b></p>
                <p>Si vous n'avez pas la possibilité de stationner sur un parking comme sur la photo ci-dessous :</p>
                <div class="card senscirc">
                    <img src="../images/stationet parkinsurrouthoraglom.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Stationnement et parking sur une route hors agglomération</small></p>
                
                <p>alors vous pouvez stationner sur l'accotement droit car la ligne de rive vous le permet :</p>
                <div class="card senscirc">
                    <img src="../images/stationsurlacoutement.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Stationnement sur l'accotement</small></p>
                <p>Si vous êtes en camping-car et que vous voyez ce panneau, 
                    alors mieux vaut demander à la mairie de la commune en question une autorisation spéciale :</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/autorispourcampngcar.jpg" width="100px;">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Autorisation spécifique pour les camping-cars </small></p>
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Le stationnement sur les routes hors agglomération est davantage interdit par les situations 
                        implicitement évaluées (sur un pont, un virage, un tunnel). 
                        Vous rencontrerez moins fréquemment les panneaux interdisant l'arrêt ou le stationnement.</li>
                    <li>L'arrêt est autorisé sur les accotements si la ligne de rive vous en autorise.
                        L'arrêt et le stationnement sont autorisés sur les parkings en bord de route.</li>
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